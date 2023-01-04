<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('/contacts/index');
    }
    
    public function confirm(ContactRequest $request, Contact $contact)
    {
        $input = $request['contact'];
        return view('/contacts/confirm')->with(['contact' => $input]);
    }
    
    public function send(ContactRequest $request, Contact $contact)
    {
        $input = $request['contact'];
        $contact->fill($input)->save();
        return view('/contacts/thanks')->with(['contact' => $contact]);
    }
    
    public function show(Contact $contact)
    {
        return view('contacts/show')->with(['contacts' => $contact -> getPaginateByLimit(15)]);
    }
}
