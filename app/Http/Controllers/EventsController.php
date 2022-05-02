<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventList;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['events'] = Event::orderBy('id','desc')->paginate(5);
        $data1['eventlists'] = EventList::orderBy('id','desc')->paginate(5);

        return view('pages.event', $data,$data1);
    }
}
