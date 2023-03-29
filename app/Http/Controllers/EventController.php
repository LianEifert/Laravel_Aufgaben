<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Event;

class EventController extends Controller
{



    public function create()
    {
        $request = request();





        $request->validate(
            [
                'title' => 'required|max:255',
                'date' => 'required|max:255',
                'description' => 'required|max:255',
            ],

        );

        $event = new Event();
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->save();

        return redirect('/form_create');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('form_application', [
            'event' => $event
        ]);
    }

    public function list()
    {
        $events = Event::with('applications')->get();
        return view('events', [
            'events' => $events
        ]);
    }
}
