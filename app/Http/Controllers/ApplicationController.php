<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create($id){
        $request = request();

        $application = new Application();
        $application->email = $request->get('email');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->answer = $request->get('answer');
        $application->event_id = $id;
        $application->save();

        return redirect('/event/'. $id);
    }

    public function  list($id){
        $applications = Application::where('answer', 'yes')::where('event_id', $id);
        $declinedApplications = Application::where('answer', 'no')::where('event-id', $id)->count();

        return view('applications',[
                'id' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }
}
