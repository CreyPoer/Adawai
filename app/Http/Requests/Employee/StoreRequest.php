<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'divisi_id' => 'required|exists:divisis,id',
            'name' => 'required|string',
            'nip' => 'required|string|unique:employees,nip',
            'gender' => 'required|in:Male,Female',
            'no_telepon' => 'required|string|unique:employees,no_telepon',
            'email' => 'required|email|unique:employees,email',
            'alamat' => 'required|string',
            'marital_status' => 'required|in:Belum Menikah,Menikah,Janda,Duda',
            'education' => 'required|in:SMA,D3,S1,S2,S3',
            'sallary' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
