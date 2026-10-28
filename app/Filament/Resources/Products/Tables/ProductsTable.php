<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
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
                TextColumn::make('code')
                    ->label('Kode Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable(),

                TextColumn::make('stock')
                    ->label('Stok')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('minimum_stock')
                    ->label('Stok Minimum')
                    ->numeric(),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id'),

                TextColumn::make('stock_status')
                    ->label('Status Stok')
                    ->badge()
                    ->color(fn (Product $record): string =>
                        $record->stock <= $record->minimum_stock
                            ? 'danger'
                            : 'success'
                    ),
            ])
            ->filters([
                Filter::make('low_stock')
                    ->label('Stok Menipis')
                    ->query(fn (Builder $query): Builder =>
                        $query->whereColumn(
                            'stock',
                            '<=',
                            'minimum_stock'
                        )
                    ),

                SelectFilter::make('category')
                    ->label('Kategori')
                    ->options(fn (): array =>
                        Product::query()
                            ->whereNotNull('category')
                            ->distinct()
                            ->orderBy('category')
                            ->pluck('category', 'category')
                            ->all()
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
            ])
            ->defaultSort('name');
    }
}
