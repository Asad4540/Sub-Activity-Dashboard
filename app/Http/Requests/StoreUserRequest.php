<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreUserRequest extends FormRequest
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
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,sales,delivery',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username is required.',
            'username.string' => 'Username must be a string.',
            'username.max' => 'Username cannot exceed 255 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already taken.',
            'firstname.required' => 'First name is required.',
            'firstname.string' => 'First name must be a string.',
            'firstname.max' => 'First name cannot exceed 255 characters.',
            'lastname.required' => 'Last name is required.',
            'lastname.string' => 'Last name must be a string.',
            'lastname.max' => 'Last name cannot exceed 255 characters.',
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 8 characters.',
            'role.required' => 'Role is required.',
            'role.in' => 'Role must be one of the following: admin, sales, delivery.',
        ];
    }
    public function attributes()
    {
        return [
            'username' => 'user name',
            'email' => 'user email',
            'firstname' => 'first name',
            'lastname' => 'last name',
            'password' => 'user password',
            'role' => 'user role',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'status' => 'error',
            'message' => 'Validation failed.',
            'desc' => 'Please correct the highlighted fields.',
            'data' => $validator->errors()
        ], 422);

        throw new HttpResponseException($response);
    }
}
