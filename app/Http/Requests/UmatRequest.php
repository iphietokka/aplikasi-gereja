<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UmatRequest extends FormRequest
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
            'nama' => 'required|string',
            'nik_kk' => 'required|string',
            'nik', 'ttl',
            'usia',
            'pekerjaan',
            'status_kawin',
            'alamat', 'sektor',
            'unit'
        ];
    }
}
