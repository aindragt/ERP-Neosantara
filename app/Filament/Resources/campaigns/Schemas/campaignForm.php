<?php

namespace App\Filament\Resources\campaigns\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class campaignForm
{
    public static function configure($schema)
    {
        return $schema
            ->components([
                Section::make('Detail Kampanye')
                    ->description('Masukkan informasi dasar dan pengaturan jadwal kampanye.')
                    ->icon('heroicon-o-megaphone')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Kampanye')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Misal: Promo Akhir Tahun')
                                    ->columnSpan(1),

                                Select::make('channel')
                                    ->label('Channel')
                                    ->options([
                                        'Instagram' => 'Instagram',
                                        'TikTok' => 'TikTok',
                                        'Website' => 'Website',
                                        'Facebook' => 'Facebook',
                                        'Youtube' => 'YouTube',
                                    ])
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->columnSpan(1)
                                    ->createOptionForm([
                                        TextInput::make('custom_channel')
                                            ->label('Nama Channel Baru')
                                            ->placeholder('Contoh: Baliho, Radio, dll.')
                                            ->required()
                                            ->maxLength(255),
                                    ])
                                    ->createOptionUsing(function (array $data): string {
                                        // Mengambil teks yang baru diketik dan mengembalikannya ke kolom 'channel'
                                        return $data['custom_channel'];
                                    }),

                                DatePicker::make('start_date')
                                    ->label('Tanggal Mulai')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d M Y'),

                                DatePicker::make('end_date')
                                    ->label('Tanggal Selesai')
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d M Y')
                                    ->afterOrEqual('start_date'), // Validasi otomatis agar tidak mundur dari tanggal mulai

                                TextInput::make('budget')
                                    ->label('Anggaran')
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->minValue(0)
                                    ->required()
                                    ->columnSpan(1),

                                Select::make('status')
                                    ->label('Status')
                                    ->options([
                                        'Draft' => 'Draft',
                                        'Active' => 'Aktif',
                                        'Finished' => 'Selesai',
                                    ])
                                    ->default('pending')
                                    ->required()
                                    ->native(false)
                                    ->columnSpan(1),
                            ]),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Jelaskan target dan tujuan kampanye ini...')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
