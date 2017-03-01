<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {  
        //validating array of radio buttons --> does not return with data
        
            // $rules = $this->request->get('marriage') = 'required';
        // $rules[
        //     'name' => 'required|max:100',
        //     'lastname' => 'required|max:100',
        // ];
        // foreach($this->request->get('marriage') as $b)
        // {
        //     $rules[$b] = 'required';
        // }

        return [
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'marriage' => 'required',
            'gender' => 'required',
            'birth_date' => 'date',
            'phone' => 'numeric',
            'talents' => 'string',
           


            
        ];
        // return $rules;
    }
}
