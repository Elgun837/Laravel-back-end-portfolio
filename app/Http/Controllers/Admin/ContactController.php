<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::find(1);
        return view('dashboard.contact.index', compact('contact'));
    }
    public function updateContact(Request $request)
    {
        $contact = Contact::find(1);

        $this->validate($request, [
            'tel_number' => 'required',
            'email' => 'required|email',
            'location' => 'nullable',
            'map' => 'nullable',
        ]);

        $contact->tel_number = $request->tel_number;
        $contact->email = $request->email;
        $contact->location = $request->location;
        $contact->map = $request->map;

        $contact->save();

        return redirect()
            ->back()
            ->with('success', 'Succesfully updated!');
    }
}
