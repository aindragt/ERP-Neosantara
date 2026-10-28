<?php

namespace App\Filament\Resources\campaigns;

use App\Filament\Resources\campaigns\Pages\Createcampaign;
use App\Filament\Resources\campaigns\Pages\Editcampaign;
use App\Filament\Resources\campaigns\Pages\Listcampaigns;
use App\Filament\Resources\campaigns\Schemas\campaignForm;
use App\Filament\Resources\campaigns\Tables\campaignsTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use campaign;

class campaignResource extends Resource
{
    protected static ?string $model = campaign::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return campaignForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return campaignsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Listcampaigns::route('/'),
            'create' => Createcampaign::route('/create'),
            'edit' => Editcampaign::route('/{record}/edit'),
        ];
    }
}
