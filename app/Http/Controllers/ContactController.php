<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        //search all information
//    $contact = Contact::with('student')->get();

        //When search/find information from Second or cantact table with foreign table
        // $contact = Contact::with('student')->where('city','Dhaka')->get();

        //When search/find information from First or studnet table without foreign table
//        $contact = Contact::withWhereHas('student', function ($query) {
//            $query->where('name', 'Sharmin');
//        })->get();

 //When search/find information from both table simultanously
//        $contact = Contact::where('city', 'Dhaka')->withWhereHas('student', function ($query) {
//            $query->where('name', 'Noman');
//        })->get();

        // this whereHas method search both table but show data only from second table
        $contact = Contact::where('city', 'Dhaka')->whereHas('student', function ($query) {
            $query->where('gender', 'M');
        })->get();

return $contact;
    }
}
