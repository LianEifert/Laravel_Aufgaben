<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Event;

class ApplicationController extends Controller
{
    public function create($id)
    {
        $request = request();





        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'answer' => 'required|max:255',
        ], [
            'email.required' => 'Bitte Email-Adresse eingeben',
            'email.email' => 'Bitte gültige Email-Adresse eingeben',
            'firstname.required' => 'Bitte Name eingeben',
            'lastname.required' => 'Bitte Name eingeben',
            'answer.required' => 'Bitte Antwort auswählen',
        ]);

        $application = new Application();
        $application->email = $request->get('email');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->answer = $request->get('answer');
        $application->event_id = $id;
        $application->save();

        return redirect('/');
    }

    public function  list($id)
    {

        $event = Event::findOrFail($id);

        $applications = $event->applications->where('answer', 'yes');
        $declinedApplications = $event->applications->where('answer', 'no')->count();


        return view(
            'applications',
            [
                'id' => $id,
                'applications' => $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }
}
