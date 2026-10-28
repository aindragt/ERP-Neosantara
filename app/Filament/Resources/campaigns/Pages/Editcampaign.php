<?php

namespace App\Filament\Resources\campaigns\Pages;

use App\Filament\Resources\campaigns\campaignResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class Editcampaign extends EditRecord
{
    protected static string $resource = campaignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
