<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'channel'     => $this->channel,
            'start_date'  => $this->start_date,
            'end_date'    => $this->end_date,
            'budget'      => (float) $this->budget, // Casting untuk kemudahan di mobile
            'status'      => $this->status,
            'description' => $this->description,
            'created_at'  => $this->created_at->toIso8601String(),
            'updated_at'  => $this->updated_at->toIso8601String(),
        ];
    }
}
