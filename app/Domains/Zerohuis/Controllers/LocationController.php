<?php

namespace App\Domains\Zerohuis\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Melit\Melbase\ViewModel;
use App\Domains\Zerohuis\Models\Location;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Domains\Zerohuis\Models\Contact;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vm            = new ViewModel('zerohuis.location.index');
        $vm->locations = Location::all();
        return $vm;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Location $location)
    {
        $vm           = new ViewModel('zerohuis.location.show');
        $vm->location = $location;

        // only show contact_tracing if scanned with qr code
        if (Route::currentRouteName() === 'location.show.qr')
        {
            // if we don't find the cookie for this Location, show the contact tracing form
            $vm->show_contact_tracing = !$request->hasCookie($location->id);
        }
        else
        {
            $vm->show_contact_tracing = false;
        }

        /*
         * Check if a contact cookie is present
         * If present we assume it is the same person and the cookie contains the id
         * of the contact that was used on the device the current user is using
         */
        if ($cookie = request()->cookie('contact'))
        {
            // decode cookie and find contact
            $cookie_decoded = json_decode($cookie);
            $vm->contact    = Contact::find($cookie_decoded->contact_id);

            // add the persons propertie if we have a contact found
            if ($vm->contact)
            {
                $vm->contact->persons = $cookie_decoded->persons;
            }
            else
            {
                $vm->contact              = new Contact();
                $vm->show_contact_tracing = true;
            }
        }
        else
        {
            $vm->contact              = new Contact();
            $vm->show_contact_tracing = true;
        }

        // return $vm->flash('key', "Showing location $location->id");
        return $vm;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function qrcode(Location $location)
    {

        $url = route('location.show.qr', $location);

        // https://www.simplesoftware.io/#/docs/simple-qrcode
        $qrcode = QrCode::format('png')
            //                        ->merge('img/zh-black.png', 0.3, true)
                        ->size(500)
                        ->errorCorrection('M')
                        ->color(255, 255, 255)
                        ->backgroundColor(132, 98, 51)
                        ->generate($url)
        ;

        return response($qrcode)->header('Content-type', 'image/png');
    }

}
