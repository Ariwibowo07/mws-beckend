<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmotionalCheckinRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'role' => 'required|string|max:50',
            'mood' => 'required|string|max:50',
            'intensity' => 'required|integer|min:1|max:10',
            'note' => 'nullable|string|max:500',
            'checked_in_at' => 'required|date',
        ];
    }
}
