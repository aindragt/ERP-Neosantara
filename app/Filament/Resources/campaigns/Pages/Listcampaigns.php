<?php

namespace App\Filament\Resources\campaigns\Pages;

use App\Filament\Resources\campaigns\campaignResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listcampaigns extends ListRecords
{
    protected static string $resource = campaignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
