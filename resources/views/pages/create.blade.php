@extends('layouts.default')
@section('content')
     <div class="page-content--bgf7">
     	<div class="offset-3 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Create Ticket</strong>
                </div>
                <form action="{{ url('/tickets/store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                	@csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="title" class=" form-control-label">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter your ticket name" class="form-control @error('title') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Description</label>
                        <textarea name="description" id="description" rows="6" placeholder="Enter your description..." class="form-control @error('description') is-invalid @enderror"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="assignuser" class=" form-control-label">Assign Users</label>
	                    <select name="assignuser" id="select" class="form-control">
	                        <option value="0">Please select</option>
	                        @foreach($assign_users as $item) 
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
	                    </select>
                    </div>
                   	<div class="card-footer">
                    	<button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <a href="{{ url('/') }}"><button type="button" class="btn btn-primary btn-sm">Back</button></a>
                	</div>
                </div>
            	</form>
            </div>
        </div>
        @include('partials.footer')
    </div>
@stop