<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateHmoRequest extends FormRequest
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
        return [
            'hmo_provider_id'           => 'required',
            'on_drugs'                  => 'sometimes|nullable',
            'hospitalized_before'       => 'sometimes|nullable',
            'allergies'                 => 'sometimes|nullable',
            'medical_conditions'        => 'sometimes|nullable',
            'pregnant'                  => 'sometimes|nullable',
            'expected_due_date'         => 'sometimes|nullable',
            'spouse_passport_url'       => 'sometimes|nullable',
            'dependant_1_passport_url'  => 'sometimes|nullable',
            'dependant_2_passport_url'  => 'sometimes|nullable',
            'dependant_3_passport_url'  => 'sometimes|nullable',
            'dependant_4_passport_url'  => 'sometimes|nullable',
            'hospital_id'               => 'sometimes|nullable',
            'spouse_full_name'          => 'sometimes|nullable',
            'spouse_dob'                => 'sometimes|nullable',
            'spouse_passport_url'       => 'sometimes|nullable',
            'dependant_1_full_name'     => 'sometimes|nullable',
            'dependant_1_dob'           => 'sometimes|nullable',
            'dependant_1_relationship'  => 'sometimes|nullable',
            'dependant_1_passport_url'  => 'sometimes|nullable',
            'dependant_2_full_name'     => 'sometimes|nullable',
            'dependant_2_dob'           => 'sometimes|nullable',
            'dependant_2_relationship'  => 'sometimes|nullable',
            'dependant_2_passport_url'  => 'sometimes|nullable',
            'dependant_3_full_name'     => 'sometimes|nullable',
            'dependant_3_dob'           => 'sometimes|nullable',
            'dependant_3_relationship'  => 'sometimes|nullable',
            'dependant_3_passport_url'  => 'sometimes|nullable',
            'dependant_4_full_name'     => 'sometimes|nullable',
            'dependant_4_dob'           => 'sometimes|nullable',
            'dependant_4_relationship'  => 'sometimes|nullable',
            'dependant_4_passport_url'  => 'sometimes|nullable'
        ];
    }
}
