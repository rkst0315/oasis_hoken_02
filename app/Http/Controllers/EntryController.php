<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Events\EntryFinished;
use App\Http\Requests\StoreEntry;
use App\Http\Requests\ContactStoreEntry;
use App\Models\Entry;
use Illuminate\Http\Request;
use App\Mail\ContactFormEmail;
use App\Mail\EntryAdminNotificationEmail;


class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function confirm(StoreEntry $request)
    {
        return view('confirm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntry $request)
    {
        //
        $entry = new Entry;

        $entry->tel_1 = $request->input('tel_1');

        $entry->name_sei = $request->input('name_sei');
        $entry->name_mei = $request->input('name_mei');
        $entry->name_sei_kana = $request->input('name_sei_kana');
        $entry->name_mei_kana = $request->input('name_mei_kana');

        $entry->zipcode_1 = $request->input('zipcode_1');
        $entry->pref = $request->input('pref');
        $entry->address_1 = $request->input('address_1');
        $entry->address_2 = $request->input('address_2');
        $entry->address_3 = $request->input('address_3');

        $entry->email = $request->input('email');

        $entry->birthday_year  = $request->input('birthday_year');
        $entry->birthday_month = $request->input('birthday_month');
        $entry->birthday_day   = $request->input('birthday_day');

        $entry->birthday_child_year  = $request->input('birthday_child_year');
        $entry->birthday_child_month = $request->input('birthday_child_month');
        $entry->birthday_child_day   = $request->input('birthday_child_day');

        // $entry->num = $request->input('num');
        // $entry->lifestyle = $request->input('lifestyle');



        //
        $data = array(
            'tel' => $entry->tel_1,

            'kanji_sei' => $entry->name_sei,
            'kanji_mei'=> $entry->name_mei,
            'kana_sei' => $entry->name_sei_kana,
            'kana_mei'=> $entry->name_mei_kana,

            'zip1' => $entry->zipcode_1,
            'address1' => $entry->pref,
            'address2' => $entry->address_1,
            'address3' => $entry->address_2,
            'address4' => $entry->address_3,

            'email' => $entry->email,

            'birth_date' => $entry->birthday_year . sprintf('%02d', $entry->birthday_month) . sprintf('%02d', $entry->birthday_day),
            'birth_child_date' => $entry->birthday_child_year . sprintf('%02d', $entry->birthday_child_month) . sprintf('%02d', $entry->birthday_child_day),

            // 'lifestyle' => $entry->lifestyle,

        );

        // $entry->save();

        EntryFinished::dispatch( $entry );

        $adminEmail = env('MAIL_TO_ADMIN');
        Mail::to($adminEmail)->send(new EntryAdminNotificationEmail($entry));
        
        return redirect('/form/finished');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        //
    }

    public function contact_confirm(ContactStoreEntry $request)
    {
        return view('contact-confirm');
    }

    public function contact_store(ContactStoreEntry $request)
    {
        //

        $entry->tel_1 = $request->input('tel_1');

        $entry->name_sei = $request->input('name_sei');
        $entry->name_mei = $request->input('name_mei');
        $entry->name_sei_kana = $request->input('name_sei_kana');
        $entry->name_mei_kana = $request->input('name_mei_kana');


        $entry->email = $request->input('email');

        $entry->num = $request->input('num');

        $entry->message = $request->input('contact_message');

        

        // $entry->save();


        return redirect('/contact-form/contact-finished');
    }

}
