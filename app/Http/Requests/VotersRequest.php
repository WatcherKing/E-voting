<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Crypt;

class VotersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        // encrypt the name, vin, age, dob, address, phone, gender and voter_code
        

        return [
            'local_gov_id' => ['required', 'exists:local_govs,id'],
            'state_id' => ['required', 'exists:states,id'],
            'name' => ['required'],
            'vin' => ['required', 'unique:voters,vin'],
            'age' => ['required'],
            'dob' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'voter_code' => ['required', 'unique:voters,voter_code'],
        ];
    }
}
