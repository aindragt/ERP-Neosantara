<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Http\Resources\CampaignResource;

class CampaignController extends Controller
{
    public function index()
    {
        // Menggunakan pagination agar aplikasi mobile tidak kelebihan beban data
        $campaigns = Campaign::latest()->paginate(15);
        return CampaignResource::collection($campaigns);
    }

    public function store(StoreCampaignRequest $request)
    {
        $campaign = Campaign::create($request->validated());
        
        return (new CampaignResource($campaign))
            ->response()
            ->setStatusCode(201);
    }

    public function show(Campaign $campaign)
    {
        return new CampaignResource($campaign);
    }

    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        $campaign->update($request->validated());
        
        return new CampaignResource($campaign);
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        
        return response()->json([
            'message' => 'Campaign berhasil dihapus'
        ], 200);
    }
}
