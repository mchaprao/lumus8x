<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $repository;

    public function __construct(Contact $contact)
    {
        $this->repository = $contact;
    }

    public function contact()
    {
        return view('web.contact');
    }

//    public function store(StoreUpdateContact $request)
//    {
//        $this->repository->create($request->all());
//
//        return redirect()->route('web.contact_success');
//    }

    public function sendEmail(StoreUpdateContact $request)
    {
         $data = [
             'name' => $request->name,
             'email' => $request->email,
             'telephone' => $request->telephone,
             'message' => $request->message
         ];

        // Mail::send(new Contact($data));

        $this->repository->create($data);

         return redirect()->route('sendEmailSuccess');
    }

    public function sendEmailSuccess()
    {
        return view('web.contact_success');
    }
}
