<?php

namespace App\Filament\Resources\Prospects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

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
                TextInput::make('source')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('New'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
