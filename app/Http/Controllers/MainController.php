<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    public function home() {
        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    public function personDelete(Person $person) {
        $person -> delete();

        return redirect() -> route('home');

    }

    public function personCreate() {

        return view('pages.personCreate');
    }

    public function personStore(Request $request) {

        $data = $request -> validate([
            'firstname' => 'required|string|max:32',
            'lastname' => 'required|string|max:32',
            'birthday' => 'required',
            'height' => 'nullable|integer|min:150|max:210',
        ]);
    
        $person = new Person();
    
        $person -> firstName = $data['firstname'];
        $person -> lastName = $data['lastname'];
        $person -> dateOfBirth = $data['birthday'];
        $person -> height = $data['height'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }
}
