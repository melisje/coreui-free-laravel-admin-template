<?php

namespace App\Domains\Zerohuis\Controllers;

use App\Domains\Zerohuis\Models\Campaign;
use App\Domains\Zerohuis\Models\Contact;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'location_id' => 'required|max:255',
                'name'        => 'required|max:255',
                'email'       => 'required|max:255',
                'phone'       => 'required|max:255',
                'zipcode'     => 'required|numeric|min:1000|max:9999',
                'location'    => 'required|max:255',
                'street'      => 'nullable|max:255',
                'extra'       => 'nullable|max:1000',
                'persons'     => 'required|numeric',
                //                'consent'     => 'numeric',
                'contact_id'  => 'nullable|numeric|exists:contacts,id'
            ]);

        $location_id = request('location_id');

        $cdata = [
            'name'        => request('name'),
            'email'       => request('email'),
            'phone'       => request('phone'),
            'zipcode'     => request('zipcode'),
            'location'    => request('location'),
            'street'      => request('street'),
            'extra'       => request('extra'),
            'campaign_id' => Campaign::default()->id,
            'consent'     => request('consent', false),
        ];

        $contact = Contact::create($cdata);

        /*
         * prepare visit and cookie info
         */
        $vdata = [
            'contact_id' => $contact->id,
            'persons'    => request('persons'),
            'start_at'   => Carbon::now(),
        ];

        Cookie::queue('contact', json_encode($vdata)); // contact cookie always valid

        /*
         * set cookie to remember the last time user was 'here'
         */
        Cookie::queue($location_id, 'visited', config('zerohuis.contact.minutes', 60)); // valid for x minutes


        $contact->locations()->attach($location_id, $vdata);


        if ($request->ajax())
        {
            return response()->json([
                                        'success' => true,
                                        'id'      => $contact->id
                                    ]);
        }
        else
        {
            return redirect(route('location.show', $location_id));
        }

    }
}
