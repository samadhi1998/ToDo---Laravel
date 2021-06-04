<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
                $events = [];
                $data = Event::where('Added_By','=', Auth::user()->id)->get();
                if($data->count())
                 {
                    foreach ($data as $key => $value) 
                    {
                        $events[] = \Calendar::event(
                            $value->title,
                            true,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.'+1 day'),
                            null,
                            // Add color
                         [
                            'color'=> $value->color,
                            'textColor' => $value->textColor,
                         ]
                        );
                    }
                }

        

                $task = Event::where('Added_By','=', Auth::user()->id)->get();
                $calendar =\Calendar::addEvents($events);
            
                return view('home',compact('events','calendar','task'));
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:4|max:50',
            'color'=>'required',
            'start_date'=>'required|date_format:Y-m-d|before_or_equal:end_date',
            'end_date'=>'required|date_format:Y-m-d|after_or_equal:start_date',
          ]);

         $events=new Event;
         $events->Added_By = Auth::user()->id;
         $events->title=$request->input('title');
         $events->color=$request->input('color');
         $events->start_date=$request->input('start_date');
         $events->end_date=$request->input('end_date');
         $events->save();
         return redirect('/home')->with('success','Event Added Successfully');
    }

   
    public function show()
    {
        $task = Event::where('Added_By','=', Auth::user()->id);
        return view('home')->with('events',$task);
    }

   
    public function edit($id)
    {
       
        $events = Event::find($id);
        return view('edit',['events'=>$events]);
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title'=>'required|min:4|max:50',
            'color'=>'required',
            'start_date'=>'required|date_format:Y-m-d|before_or_equal:end_date',
            'end_date'=>'required|date_format:Y-m-d|after_or_equal:start_date',
          ]);
          
        $events = Event::find($request->input('id'));
        $events->id = $request->input('id');
        $events->title = $request->input('title');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->color = $request->input('color');
        

          $events->update($request->all());

         return redirect('/home')->with('success','Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $events = Event::find($id);
        $events->delete();
        return redirect('/home')->with('success','Event Deleted Successfully');
    }

    public function searchReminders(Request $request)
    {

        $request->validate([
            'query'=>'required']);

        $query=$request->input('query') ;
        
        $event=Event::where('title', 'like', "%$query%")->orWhere('start_date', 'like', "%$query%")->orWhere('end_date', 'like', "%$query%")->paginate(5);
        
        if (count($event)>0) {
            return view('Reminder/searchReminder', ['events'=>$event]);
        } else {
            return redirect()->back()->with('error', 'Invalid Search , Enter available one ...');
        }
    
    }
}
