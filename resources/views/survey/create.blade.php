@extends('app')

@section('content')

	<h1>Act Vocally</h1>

	<hr/>

	{!! Form::open(['url' => '/']) !!}

	<div>
		<p>“Act Vocally” is a unique musical initiative designed to shine a light on the issues
			facing young adult cancer survivors. And we need your help! More info will come to light
			as the project progresses so stay tuned!</p>
	</div>

	{!! Form::hidden('user_id', 1) !!}

	<div class="form-group">
		{!! Form::label('story', '1. Tell us in a sentence or two how has cancer affected your life, your outlook, your relationships, your emotional state, and/or how you view the world. Be positive. Be negative. Be honest. Be real.') !!}
		{!! Form::textarea('story', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('personal',
				'2. To be considered for inclusion in this project, please include all of the following information:') !!}
		{!! Form::hidden('personal', 2) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! Form::label('city', 'City/Town:') !!}
		{!! Form::text('city', null, ['class' => 'form-control']) !!}
		{!! Form::label('email', 'Email:') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>

	<div>
		<p>(We will not disclose your full name or email address.)</p>
	</div>

	<div class="form-group">
		{!! Form::label('birthday', '3. Enter your birthday:') !!}
		{!! Form::input('birthday', 'published_at', date('m/d/Y'), ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('diagnosis', '4. Diagnosis:') !!}
		{!! Form::text('diagnosis', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('diagnosis_age', '5. Age at diagnosis:') !!}
		{!! Form::text('diagnosis_age', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('anonymous_dummy',
				'6. If we use your entry, you will be acknowledged by your first name, last initial, and diagnosis. To remain anonymous, check the box below:') !!}
		{!! Form::hidden('anonymous_dummy', 3) !!}
	</div>

	<div class="form-group">
		{!! Form::label('anonymous', 'I wish to remain anonymous.') !!}
		{!! Form::checkbox('anonymous', 'false', false) !!}
	</div>

	<div>
		<p>By submitting this form, I acknowledge that my submission can be used both on- and offline
		for the purposes of the “Act Vocally” project. I agree to being contacted via email
		about project updates and/or correspondence about my entry, and give permission to use my entry
		as written or adapted by “Act Vocally.” By submitting an entry, I represent to the best of my knowledge
		that (a) the entry is my original thoughts (b) I consent to the entry be used as the creator chooses,
		and (c) the entry has not been previously published in any medium.</p>
	</div>

	<div class="form-group">
		{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}

@stop
