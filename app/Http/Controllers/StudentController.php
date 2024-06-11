<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*.....................
          When search/find information from first table
        $students = Student::with('contact')->where('age','>',30)->get();
        ''''''''''''''''''''''''''''''''''''''''''''''''''''''*/

        // When search/find information from second table (with foreign table)
//       $students = Student::withWhereHas('contact', function ($query) {
//           $query->where('city', 'Dhaka')})->get();

           //When search/find information from both table simultanously
//        $students = Student::where('gender', 'F')->withWhereHas('contact', function ($query) {
//            $query->where('city', 'Dhaka');
//        })->get();

// this whereHas method search both table but show data only from first table
        $students = Student::where('gender', 'M')->whereHas('contact', function ($query) {
            $query->where('city', 'Dhaka');
        })->get();
       return $students;
   }

   /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
