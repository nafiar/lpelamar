<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Pelamar;

class MainController extends Controller
{
    //
	public function home() {
		return view('home');
	}

    public function termsPage() {
    	return view('terms');
    }

    public function regis() {
    	return view('regis');
    }

    public function saveRegis(Request $request) {
    	
    	$messagesError = [
            'firstname.required' => 'Firstname field is required',
            'lastname.required' => 'Lastname field is required',
            'nrp.digits_between' => 'NRP field must definitely 10 digits',
            'contact.required' => 'Phone number filed is required',
            'email.unique' => "Woops! The email you've entered is used for another application",
            'filecv.required' => 'Something wrong with your attachment, make sure it is a PDF and less than 3MBs',
	    	'nrp.max' => 'Student Registration Number violation - Only the member of TC2016 is allowed to submit the application',
	    	'nrp.min' => 'Student Registration Number violation - Only the member of TC2016 is allowed to submit the application',
        ];

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'nrp' => 'required|numeric|digits_between:10,10|max:5116100999|min:5116100001',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'filecv' => 'mimes:pdf|max:5120|required'
        ], $messagesError);

        if( !$validator->fails() ) {
	    	
	    	$pelamar = new Pelamar(); 	
	    	$pelamar->nrp = $request->nrp;
	    	$pelamar->nama_depan = $request->firstname;
	    	$pelamar->nama_belakang = $request->lastname;
	    	$pelamar->email = $request->email;
	    	$pelamar->kontak = $request->contact;
	    	$pelamar->link_fb = $request->linkfb;
	    	//dd($pelamar);
	    	$file = $request->filecv;
	    	$uploaded = $request->filecv->storeAs(public_path('uploads'), $file->getClientOriginalName());
	    	
	    	if( $uploaded && $pelamar->save() ) {
	    		return Redirect::to('/regis')->with('message', 'Berhasil menyimpan data');
	    	}
	    	else{
	    		return Redirect::to('/regis')->withErrors('Gagal menyimpan data silahkan coba lagi.');
	    	}
        }
        else {
        	return Redirect::to('/regis')->withErrors($validator)->withInput();
        }
    }
}
