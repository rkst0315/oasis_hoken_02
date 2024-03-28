<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Events\EntryFinished;
use App\Http\Requests\StoreEntry;
use App\Http\Requests\ContactStoreEntry;
use App\Models\Entry;
use Illuminate\Http\Request;
use App\Mail\ContactFormEmail;
use App\Mail\AdminNotificationEmail;



class ContactFromController extends Controller
{

    public function contact_confirm(ContactStoreEntry $request)
    {
        return view('contact-confirm');
    }

    public function store(ContactStoreEntry $request)
    {
        //
        $entry = new Entry;

        $entry->tel_1 = $request->input('tel_1');

        $entry->name_sei = $request->input('name_sei');
        $entry->name_mei = $request->input('name_mei');
        $entry->name_sei_kana = $request->input('name_sei_kana');
        $entry->name_mei_kana = $request->input('name_mei_kana');

        $entry->email = $request->input('email');
        $entry->num = $request->input('num');
        $entry->contact_message = $request->input('contact_message');

        // $entry->save();

        Mail::to( $entry->email )->send(new ContactFormEmail($entry));
        
        $adminEmail = env('MAIL_TO_ADMIN');
        Mail::to($adminEmail)->send(new AdminNotificationEmail($entry));

        return redirect('/contact-form/contact-finished');
    }

}
