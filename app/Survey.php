<?php

namespace App;

use App\Http\Requests\SurveyRequest;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
	protected $fillable = [
		'name',
		'email',
		'city',
		'birthday',
		'diagnosis',
		'age_at_diagnosis',
		'anonymous',
		'statement',
	];

	protected $dates = [
		'birthday',
	];

    public function store(SurveyRequest $request) {
		Survey::create($request->all());
		return redirect('/'); // TODO Make this redirect to a thank you page
	}
}
