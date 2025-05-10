<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'              => ['required', 'string', 'min:3', 'max:190'],
            'email'             => ['required', 'string', 'email:rfc,dns', 'max:190'],
            'phone_no'          => ['required', 'numeric'],
            'country'           => ['required', 'string', 'min:1', 'max:190'],
            'date'              => ['required', 'string', 'min:3', 'max:100000'],
            'slot'              => ['required', 'string', 'min:3', 'max:100000'],
            'mode_of_meeting'   => ['required', 'string', 'min:3', 'max:100000'],
            'details'           => ['required', 'string', 'min:3', 'max:100000'],
            'art_works'         => ['sometimes', 'nullable', 'array'],
            'art_works.*'       => ['sometimes', 'nullable', 'max:30000', 'mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip']
        ];
    }
}
