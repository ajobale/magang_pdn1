<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewerRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required|email',
            'judul' => 'required',
            'review' => 'required',
            'foto' => 'required|mimes:jpg,png'
        ];
    }

    public function messages(): array{
        return [
            'name.reqired' => 'Data Harus diisikan',
            'email.required' => 'Email tidak boleh dikosong',
            'email.email' => 'email harus yang dimasukkan berupa email',
            'judul' => 'Data harus diisikan',
            'review' => 'Data harus diisikan',
            'foto.mimes' => 'Pastikan FOrmat file benar'
        ];
    }
}
