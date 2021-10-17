<?php

namespace App\Http\Requests\Api\Player;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'best_date' => 'required',
            'first_score' => 'required',
            'best_score' => 'required',
            'last_score' => 'required',
        ];
    }
}
