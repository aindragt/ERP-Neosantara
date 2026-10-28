<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->visibility('public')
                    ->square(),
                TextColumn::make('name')
                    ->label('Nama Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable(),

                TextColumn::make('stock')
                    ->label('Stok')
                    ->sortable(),

                TextColumn::make('minimum_stock')
                    ->label('Minimum Stok'),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR'),

                TextColumn::make('stock_status')
                    ->label('Status Stok')
                    ->state(fn ($record) =>
                        $record->stock <= $record->minimum_stock
                            ? 'Stok Menipis'
                            : 'Aman'
                    )
                    ->badge()
                    ->color(fn ($state) =>
                        $state === 'Stok Menipis'
                            ? 'danger'
                            : 'success'
                    ),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}