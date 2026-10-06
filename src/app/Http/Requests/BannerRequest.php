<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo_banner' => 'required|string|max:255',
            'status_banner' => 'required|in:ATIVO,INATIVO',
            'imagem_banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }
}