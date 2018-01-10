<?php

namespace App\Http\Requests;

/**
 * @property resource|string content
 */
class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
