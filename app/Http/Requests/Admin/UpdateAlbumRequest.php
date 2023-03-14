<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            'name' => ['required','string','min:3','max:50','regex:/^[A-Za-z0-9\sàáạảãăắằẳẵặâấầẩẫậèéẹẻẽêếềểễệđìíịỉĩóỏòọõôốồổỗộơớờởỡợùúụủũưứừửữựỳýỵỷỹ]+$/u'],
            'description' => 'required'
        ];
    }
}
