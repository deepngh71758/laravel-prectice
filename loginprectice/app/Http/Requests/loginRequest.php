<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=> ['required','string','email'],
            'password'=> ['required','string']
        ];
    }
    public function authenticate()
    {
        $credentials = $this->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            //  return back()->withErrors(['email' => 'Invalid credentials']);
            throw ValidationException::withMessages([
                'failed' => trans('auth.failed'),
            ]);
        } 
    }

}
