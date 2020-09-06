<?php

namespace App\Domains\Zerohuis\Controllers;

use App\Http\Controllers\Controller;
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
    public function show(Location $location)
    {
        $vm = new ViewModel('zerohuis.location.show');
        $vm->location = $location;


        /*
         * check if a contact cookie is present
         */
        $cookie      = request()->cookie('contact');
        $vm->cookie  = isset($cookie);
        $vm->contact = Contact::json_decode($cookie);
        //$vm->cookie_found = $isset

        return $vm->flash('key', "Showing location $location->id");
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

}
