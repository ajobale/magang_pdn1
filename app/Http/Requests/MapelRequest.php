<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapelRequest extends FormRequest
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
            'nama_mapel' => 'required',
            'nama_dosen' => 'required',
            'kuota' => 'required:max:2',
            'kelas' => 'required'
        ];

        
    }
    public function messages(): array{
        return [
            'nama_mapel.reqired' => 'Nama Mata Pelajar Harus diisikan',
            'nama_dosen.required' => 'Nama Dosen harus diisikan',
            'kuota.required' => 'Kuota hanya boleh dibawah 100 peserta',
            'kelas.required' => 'Detail Kelas Harus diisikan'
        ];
    }

}
