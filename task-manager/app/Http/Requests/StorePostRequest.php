<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator; 
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Rules\uppercase;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
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
            // 'username'=>['required',new uppercase],
            'username'=>'required',
            'useremail' => 'required|email',
        ];
    }
    protected function prepareForValidation():void
    {
        $this->merge([
            // 'username'=>strtoupper($this->username),
            'username' => Str::slug($this->username), 
        ]);
    }
    protected $stopOnFirstFailure = true;
}
