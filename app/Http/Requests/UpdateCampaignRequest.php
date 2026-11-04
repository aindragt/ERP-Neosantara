<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Ubah menjadi logika otorisasi Anda jika diperlukan (misal: mengecek ownership)
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'        => 'sometimes|required|string|max:255',
            'channel'     => 'sometimes|required|string|max:255',
            'start_date'  => 'sometimes|required|date',
            'end_date'    => 'sometimes|required|date|after_or_equal:start_date',
            'budget'      => 'sometimes|required|numeric|min:0',
            'status'      => 'sometimes|required|in:Draft,Active,Finished',
            'description' => 'nullable|string',
        ];
    }
}
