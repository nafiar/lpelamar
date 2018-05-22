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
		return view('index');
	}

    public function terms() {
    	return view('terms');
    }

    public function register_index() {
    	return view('apply');
    }

    public function register(Request $request){
        $errorMessage = [
            'full_name.required' => 'Full Name is Required',
            'nick_name.required' => 'Nickname is Required',
            'email.required' => 'Email is Required',
            'phone_number.required' => 'Phone Number is Required',
            'cv_essay.required' => 'CV and Essay is Required',
            'cv_essay.mimetypes' => 'CV and Essay must be a file of ZIP type',
            'cv_essay.max' => 'CV and Essay is too large. Maximum size is 8 MB',
            'nrp.required' => 'NRP is Required',
            'nrp.max' => 'Only Informatics 2016 and 2017 is allowed',
            'nrp.min' => 'Only Informatics 2016 and 2017 is allowed',
            'nrp.digits_between' => 'NRP must be 14 digits',
            'agree.required' => 'You have to agree to the Terms and Conditions',
        ];

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'nick_name' => 'required|max:255',
            'nrp' => 'required|numeric|digits_between:10,14|min:5111640000001|max:5111740009999',
            'phone_number' => 'required',
            'email' => 'required|email',
            'cv_essay' => 'required|mimetypes:application/zip|max:8192',
            'agree' => 'required',
        ], $errorMessage);

        if ( !$validator->fails() ) {
            $pelamar = new Pelamar();
            $pelamar->nrp = $request->nrp;
            $pelamar->full_name = $request->full_name;
            $pelamar->nick_name = $request->nick_name;
            $pelamar->email = $request->email;
            $pelamar->phone_number = $request->phone_number;
            $pelamar->id_fb = $request->id_fb;
            $pelamar->id_line = $request->id_line;

            if ($request->hasFile('cv_essay') && $request->file('cv_essay')->isValid()) {
                $file = $request->cv_essay;
                $path = 'public/cv';
                $uploaded = $request->cv_essay->storeAs($path, $file->getClientOriginalName());
                $pelamar->cv_essay_path = 'storage/cv/'.$file->getClientOriginalName();
            } else {
                return Redirect::to('/apply')->withErrors('Gagal Menyimpan File. Silahkan Coba Lagi');
            }


            if ($uploaded && $pelamar->save()) {
                return Redirect::to('/apply')->with('status', 'Berhasil Mendaftar');
            } else {
                return Redirect::to('/apply')->withErrors('Gagal Menyimpan Data, Silahkan Coba Lagi');
            }
        } else {
            return redirect('/apply')->withErrors($validator)->withInput();
        }
    }
}
