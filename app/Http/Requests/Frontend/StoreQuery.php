<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuery extends FormRequest
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
            'name'          => ['required', 'min:3', 'max:190', 'string'],
            'email'         => ['required', 'min:3', 'max:190', 'string', 'email'],
            'phone_no'      => ['required', 'min:3', 'max:190', 'string'],
            'message'       => ['required', 'min:3', 'max:3000', 'string'],
            'files'         => ['sometimes', 'nullable', 'array'],
            'files.*'       => ['sometimes', 'nullable', 'max:30000', 'mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip']
        ];
    }
}
