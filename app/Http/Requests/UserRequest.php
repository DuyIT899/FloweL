<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required','numeric','max:10'],
            'address' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'email' => ['required'],
            'role_id' => ['required'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        $customErrors = [];

        if ($errors->has('name')) {
            if ($errors->has('name.required')) {
                $customErrors['name'] = 'Tên không được để trống';
            }
            if ($errors->has('name.string')) {
                $customErrors['name'] = 'Tên phải là chuỗi';
            }
        }

        if ($errors->has('phone')) {
            if ($errors->has('phone.required')) {
            $customErrors['phone'] = 'số điện thoại không được để trống';
        }
        if ($errors->has('phone.numeric')) {
            $customErrors['phone'] = 'số điện thoại phải là số';
        }
        if ($errors->has('phone.max')) {
            $customErrors['phone'] = 'số điện thoại không quá 10 số';
        }
    }

        if ($errors->has('username')) {
            $customErrors['username'] = 'username không được để trống';
        }

        if ($errors->has('password')) {
            $customErrors['password'] = 'password không được để trống';
        }

        throw new HttpResponseException(response()->json([
            'errors' => $customErrors,
        ], 422));
    }
}
