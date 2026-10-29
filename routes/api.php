<?php

use App\Http\Controllers\Api\CampaignController;
use Illuminate\Support\Facades\Route;

Route::apiResource('campaigns', CampaignController::class);