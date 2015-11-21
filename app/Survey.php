<?php

namespace App;

use App\Http\Requests\SurveyRequest;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	// TODO Add fields
	protected $fillable = [
		'story',
		'birthday',
	];

	protected $dates = [
		'birthday',
	];

    public function store(SurveyRequest $request) {
		Survey::create($request->all());
		return redirect('/'); // TODO Make this redirect to a thank you page
	}
}
