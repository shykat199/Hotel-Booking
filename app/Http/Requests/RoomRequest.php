<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'room_category_id'=>['required'],
            'title'=>['required','max:55'],
            'description'=>['required'],
            'beds'=>['required'],
            'baths'=>['required'],
            'room_size'=>['required'],
            'image'=>['required','mimes:jpeg,png,jpg,gif']
        ];
    }
}
