@extends('layouts.main')

@section('navbar')
	<li role="presentation"><a href="{{URL::to('/')}}">Wishlist</a></li>	
	<li role="presentation"><a href="{{URL::to('wish/create')}}">Create</a></li>
	<li role="presentation"><a href="{{URL::to('/user/logout')}}">Logout</a></li>
    @parent    
@stop

@section('content')
<div class="container">
  <div class="row">
  	@if($wish->status != 'done')
    <div class="col-md-12">
    	<div class="page-header">
		  <h1>Update Wish</h1>
		</div>				
		{{ Form::open(array('route' => array('wish.update', $wish->id), 'method' => 'put')) }}
		<div class="form-group">
		    <label>Wish</label>
		    <textarea name="wish" class="form-control" rows="4" placeholder="Example: I want to visit Japan">{{$wish->wish}}</textarea>
		    <p class="text-danger">{{ $errors->first('wish') }}</p>
		</div>
		<div class="form-group">
			<button class="btn btn-primary pull-right" type="submit">Save</button>  
		</div>
		{{ Form::close() }}		
    </div>
    @else
	<div class="col-md-12">    		
	  <div class="alert alert-danger">
	    Can't edit accomplished this wish.
	  </div>			
	</div>
	@endif

  </div>  
</div>
@stop