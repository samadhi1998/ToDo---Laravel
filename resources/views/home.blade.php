@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-around ">
        <div class="col-6">
            <div class="card" style="background: rgba(255, 255, 255, 0.7) !important; border-radius: 20px">
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="background: rgba(255, 255, 255, 0.5) !important; border-radius: 20px">
                <div class="card-header">
                    <b>Todo List</b> 
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: #3F3D56 !important; border-style: none !important; color:white !important; border-radius: 10px">
                        Add new task
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Status</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($task as $event)
                            <tr>                                                
                                <th scope="row">{{$event['id']}}</th>
                                <td style="text-align: left">
                                    @if($event->status == 'Completed')
                                    <del>{{$event['title']}}</del>
                                    @elseif($event->status == 'Open')
                                    {{$event['title']}}
                                    @endif
                                </td>
                                <td>
                                    @if($event->status == 'Completed')
                                    <del>{{$event['start_date']}}</del>
                                    @elseif($event->status == 'Open')
                                    {{$event['start_date']}}
                                    @endif
                                </td>
                                <td>
                                    @if($event->status == 'Completed')
                                    <del>{{$event['end_date']}}</del>
                                    @elseif($event->status == 'Open')
                                    {{$event['end_date']}}
                                    @endif
                                </td>
                                <td>
                                    @if($event->status == 'Completed')
                                    <del>{{$event['status']}}</del>
                                    @elseif($event->status == 'Open')
                                    {{$event['status']}}
                                    @endif
                                </td>
                                <td>
                                <a href= "/editeventurl/update/{{$event['id']}}"  ><i data-feather ="edit" style="color: #3F3D56 !important"></i></a>                           
                                <a href= "/deleteeventurl/{{$event['id']}}"  onclick="return confirm('Are you sure you want to delete this item?');"><i data-feather ="trash-2" style="color: #3F3D56 !important"></i></a> 
                                @if( $event->status == 'Open' )
                                    <a href="/completeTask/{{$event->id}}" class="text-my-own-color"><i data-feather="check-circle" style="color: #3F3D56 !important"></i></a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('addevent.store') }}"  id="myform">
                @csrf
                <label for="title" ><b>Add Description : </b></label>
                <input type="text" name="title" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                <br>
                <label for="color" ><b>Add Color : </b></label>
                <input type="color" name="color" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 20px">
                <br>
                <label for="start_date" ><b>Start Date : </b></label>
                <input type="date" name="start_date" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                <br>
                <label for="end_date" ><b>End Date : </b></label>
                <input type="date" name="end_date" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                <br>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="myform">Add</button>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
