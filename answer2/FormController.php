<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $input = [
            'name' => 'required',
            'age' => 'required|numeric|between:min,max',
            'can_drive' => 'required|boolean'
        ];

        $messages = [
            'name.required' => 'The :attribute is required',
            'age.between' => 'The :attribute must between :min and :max',
            'can_drive.boolean' => 'The answer must be Yes or No'
        ];

        $validator = Validator::make($request->all(),
        [$input, $messages]);

        if ($validator->fails()) {
            return redirect('index')
            ->withErrors($validator)
            ->withInput();
        }
    }
}