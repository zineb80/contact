<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
   
    {
       
       $contacts = Contact::all() ;
       return view('contact',['contacts'=>$contacts,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('contact',['contacts'=>$contacts,'layout'=>'create']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
    $contact = new Contact() ;
        $contact -> wilaya = $request->input('wilaya');
        $contact -> nome = $request->input('nome');
        $contact -> email = $request->input('email');
        $contact -> telephon = $request->input('telephon');
        $contact -> fax = $request->input('fax');
        $contact -> Adress = $request->input('Adress'); 
        $contact ->save();
        return redirect('/') ;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id); 
        $contacts = Contact::all();
        return view('contact',['contacts'=>$contacts, 'contact'=>$contact ,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $contact = Contact::find($id);
        $contacts = Contact::all();
        return view('contact',['contacts'=>$contacts, 'contact'=>$contact ,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->wilaya =  $request->get('wilaya');
        $contact->nome = $request->get('nome');
        $contact->email = $request->get('email');
        $contact->telephon = $request->get('telephon');
        $contact->fax = $request->get('fax');
        $contact->Adress = $request->get('Adress');
        $contact->save();
       
        return redirect('/contacts')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }
}
