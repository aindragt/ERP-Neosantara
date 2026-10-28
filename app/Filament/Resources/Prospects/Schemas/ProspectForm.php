<?php

namespace App\Filament\Resources\Prospects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class ProspectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('company')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Select::make('source')
                    ->options([
                        'Website' => 'Website',
                        'Instagram' => 'Instagram',
                        'Facebook' => 'Facebook',
                        'TikTok' => 'TikTok',
                        'WhatsApp' => 'WhatsApp',
                        'Referral' => 'Referral',
                    ])
                    ->required(),
                Select::make('status')
                    ->options([
                        'New' => 'New',
                        'Contacted' => 'Contacted',
                        'Qualified' => 'Qualified',
                        'Closed' => 'Closed',
                    ])
                    ->default('New')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
