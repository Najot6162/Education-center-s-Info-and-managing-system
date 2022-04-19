<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EventList;
use Illuminate\Http\Request;

class EventListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['eventlists'] = EventList::orderBy('id','asc')->paginate(5);

        return view('eventlists.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventlists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'event_name'=>'required',
            'event_time'=>'required',
            'event_room'=>'required'
        ]);

        $eventlist = new EventList;

        $eventlist->event_name=$request->event_name;
        $eventlist->event_time=$request->event_time;
        $eventlist->event_room=$request->event_room;

        $eventlist->save();

        return redirect()->route('eventlist.index')
            ->with('success','Event has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function edit(EventList $eventlist)
    {
        return view('eventlists.edit',compact('eventlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventlist  $evenlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name'=>'required',
            'event_time'=>'required',
            'event_room'=>'required'
        ]);

        $eventlist = EventList::find($id);

        $eventlist->event_name=$request->event_name;
        $eventlist->event_time=$request->event_time;
        $eventlist->event_room=$request->event_room;

        $eventlist->save();

        return redirect()->route('eventlist.index')
            ->with('success','Event has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventlist  $eventlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventList $eventlist)
    {
        $eventlist->delete();

        return redirect()->route('eventlist.index')
            ->with('success','Evenlist has been deleted successfully');
    }
}
