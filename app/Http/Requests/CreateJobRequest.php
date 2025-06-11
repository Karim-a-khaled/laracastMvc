<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'employer_id' => 'required|integer|exists:employers,id',
            'salary' => 'required|numeric|min:0',
            'description' => 'required|string',
        ];
    }
}
