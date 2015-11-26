@extends('app')

@section('content')

	<h1>Surveys</h1>

	<hr/>

	@foreach ($surveys as $survey)

		<article>

			<h2>
				<!-- Method 1 -->
				<!--
				<a href="/articles/{{ $survey->id }}">{{ $survey->title }}</a>
				-->

				<!-- Method 2 -->
				<!--
				<a href="{ action('SurveysController@show', [$survey->id]) }">{ $survey->title }</a>
				-->

				<!-- Method 3 -->
				<a href="{{ url('/survey', $survey->id) }}">{{ $survey->name }}</a>
			</h2>

			<div class="body">{{ $survey->statement }}</div>

		</article>

	@endforeach

@stop