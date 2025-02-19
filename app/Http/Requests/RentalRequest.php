<?php

namespace App\Http\Requests;

use DateTime;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RentalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // Rule::unique('rental', 'date')->where('id_user', $this->)

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'date' => [
                'required',
                'after_or_equal:' . (new DateTime('tomorrow'))->format('Y-m-d')
            ],
			'start_time' => 'required|before:end_time',
			'end_time' => 'required|after:start_time',
			'id_room' => Rule::exists('rooms', 'id')->where(function ($query){
                return $query->whereNotNull("id");
            }),
			'id_user' => Rule::exists('users', 'id')->where(function ($query){
                return $query->whereNotNull("id");
            })
        ];
    }
}
