<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuote extends FormRequest
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
            'name'          => ['required', 'string', 'min:3', 'max:190'],
            'email'         => ['required', 'string', 'email:rfc,dns', 'max:190'],
            'phone_no'      => ['required', 'numeric'],
            'service'       => ['required', 'array'],
            'message'       => ['required', 'string', 'min:3', 'max:100000'],
            'files'         => ['sometimes', 'nullable', 'array'],
            'files.*'       => ['sometimes', 'nullable', 'max:30000', 'mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip']
        ];
    }
}
