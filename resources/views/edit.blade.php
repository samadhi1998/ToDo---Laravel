@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card" style="border-radius: 20px">
        <div class="card-header">
           <b>Update Task</b> 
        </div>
            <div class="card-body">
                <div class="container"  style="background :none !important ">
                    <form method="POST" action="/editeventurl"  id="myformproduct" enctype="multipart/form-data" >
                        @csrf
                        <label for="id" class="mt-3"><b>Reminder ID: </b></label>
                        <input type="text" name="id" value="{{$events['id']}}" required readonly style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                        <br>
                        <label for="title" class="mt-3" ><b>Title : </b></label>
                        <input type="text" name="title" value="{{$events['title']}}" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                        <br>
                        <label for="start_date"class="mt-3"  ><b>Start Date : </b></label>
                        <input type="date" name="start_date" value="{{$events['start_date']}}" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                        <br>
                        <label for="end_date" class="mt-3"  ><b>End Date : </b></label>
                        <input type="date" name="end_date" value="{{$events['end_date']}}" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 10px">
                        <br>
                        <label for="color" class="mt-3" ><b>Color : </b></label>
                        <input type="color" name="color" value="{{$events['color']}}" required style="background-color: #F5F2F2; border-radius: 10px; border: none; width: 100%; padding: 30px">
                        <br>
                        <br>
                        <div class="btn-group float-right" role="group">
                            <button type="button" data-toggle="modal" class="btn btn-primary" data-target="#exampleModal" style="background-color: #3F3D56 !important; border-style: none !important; color:white !important; border-radius: 10px">Update</button>
                        </div>
                        <div class="btn-group float-right mr-2 " role="group">
                            <button type="submit" class="btn btn-primary" style="background-color: white !important; border-color: #3F3D56 !important; color:#3F3D56 !important; border-radius: 10px"><a href="/reminder" style="color:#3F3D56 !important "> <b>Cancel</b> </a></button>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Update Alert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body" style="color:#233554">
                You are going to update the details of reminder {{$events->id}} . Do you want to continue ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" form="myformproduct" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>        
@endsection