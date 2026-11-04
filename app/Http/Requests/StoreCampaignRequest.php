<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ubah jika ada otorisasi user tertentu
    }

    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:255',
            'channel'     => 'required|string|max:255',
            'start_date'  => 'required|date',
            'end_date'    => 'required|date|after_or_equal:start_date',
            'budget'      => 'required|numeric|min:0',
            'status'      => 'required|in:Draft,Active,Finished',
            'description' => 'nullable|string',
        ];
    }
}
