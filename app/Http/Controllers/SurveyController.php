<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Survey;

class SurveyController extends Controller
{
	public function create() {
		return view('survey.create');
	}

    public function index() {
		$surveys = Survey::all();
		return view('survey.index', compact('surveys'));
	}

	public function show($id) {
		$survey = Survey::findOrFail($id);
		return view('survey.show', compact('survey'));
	}
}
