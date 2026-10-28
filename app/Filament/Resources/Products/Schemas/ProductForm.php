<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->label('Kode Barang')
                    ->required()
                    ->maxLength(50)
                    ->unique(ignoreRecord: true),

                TextInput::make('name')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(255),

                TextInput::make('category')
                    ->label('Kategori')
                    ->required()
                    ->maxLength(100),

                TextInput::make('stock')
                    ->label('Jumlah Stok')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->required()
                    ->default(0),

                TextInput::make('minimum_stock')
                    ->label('Stok Minimum')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->required()
                    ->default(5),

                TextInput::make('price')
                    ->label('Harga Satuan')
                    ->numeric()
                    ->minValue(0)
                    ->required()
                    ->default(0)
                    ->prefix('Rp'),

                Textarea::make('description')
                    ->label('Keterangan')
                    ->rows(3)
                    ->columnSpanFull(),
                    
            ]);
    }
}
