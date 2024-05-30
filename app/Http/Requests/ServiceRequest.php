<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'nama_service' => 'required',
            'jenis_service' => 'required',
            'pelayan_service' => 'required',
            'contact_service' => 'required',
            'foto_service' => 'required:mimes:jpg,png',



        ];
    }

    public function messages(): array{
        return [
            'nama_service' => 'Data Harus diisikan',
            'jenis_service' => 'Data Harus diisikan',
            'pelayan_service' => 'Data Harus diisikan',
            'contact_service' => 'Data Harus diisikan',
            'foto_service.mimes' => 'Data Harus diisikan'
        ];
    }

}
