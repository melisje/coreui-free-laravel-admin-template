<?php

namespace App\Domains\Zerohuis\Controllers;

use App\Http\Controllers\Controller;
use Melit\Melbase\ViewModel;
use App\Domains\Zerohuis\Models\Location;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;

class LocationAdminController extends Controller
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
    public function show(Location $location)
    {
        $vm           = new ViewModel('zerohuis.location.show');
        $vm->location = $location;
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

        $url = route('location.show', $location);

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
