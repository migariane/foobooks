@extends('_master')

@section('title')
	What is your name?
@stop

@section('content')

	<h1>What is your name?</h1>

	{{ Form::open(array('url' => 'ajax-example')); }}

		{{ Form::text('name'); }}

		{{ Form::submit() }}

	{{ Form::close() }}

	<div id='results'></div>

@stop

@section('/body')
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>

	<script>
	// First, set up the options for the ajax submission
	var options = { 
	    type: 'post',
	    url: '/ajax-example',
	    success: function(response) { 
	        // Load the results recieved from process.php into the results div
	        $('#results').html(response);       
	    } 
	}; 

	// Then attach the ajax form plugin to this form so that when it's submitted, 
	// it will be submitted via ajax    
	$('form').ajaxForm(options);

	</script>
@stop