<?php

namespace Database\Seeders;

use App\Models\Prospect;
use Illuminate\Database\Seeder;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prospects = [
            [
                'name' => 'Budi Santoso',
                'company' => 'PT Maju Bersama',
                'phone' => '081234567890',
                'email' => 'budi@majubersama.co.id',
                'source' => 'Website',
                'status' => 'New',
                'notes' => 'Mengisi formulir kontak melalui website.',
            ],
            [
                'name' => 'Siti Rahma',
                'company' => 'CV Nusantara Jaya',
                'phone' => '081345678901',
                'email' => 'siti@nusantarajaya.id',
                'source' => 'Instagram',
                'status' => 'Contacted',
                'notes' => 'Sudah dihubungi melalui WhatsApp.',
            ],
            [
                'name' => 'Andi Saputra',
                'company' => 'PT Sumber Makmur',
                'phone' => '082112223333',
                'email' => 'andi@sumbermakmur.com',
                'source' => 'Facebook',
                'status' => 'Qualified',
                'notes' => 'Tertarik membeli produk dalam jumlah besar.',
            ],
            [
                'name' => 'Rina Marlina',
                'company' => 'PT Bintang Timur',
                'phone' => '082233344455',
                'email' => 'rina@bintangtimur.co.id',
                'source' => 'TikTok',
                'status' => 'New',
                'notes' => 'Meminta informasi katalog produk.',
            ],
            [
                'name' => 'Dedi Kurniawan',
                'company' => 'CV Berkah Abadi',
                'phone' => '081298765432',
                'email' => 'dedi@berkahabadi.com',
                'source' => 'Referral',
                'status' => 'Closed',
                'notes' => 'Berhasil menjadi pelanggan.',
            ],
            [
                'name' => 'Maya Putri',
                'company' => 'PT Pelita Mandiri',
                'phone' => '081377788899',
                'email' => 'maya@pelitamandiri.co.id',
                'source' => 'Website',
                'status' => 'Qualified',
                'notes' => 'Menunggu penawaran harga.',
            ],
            [
                'name' => 'Agus Pratama',
                'company' => 'CV Prima Teknik',
                'phone' => '081399988877',
                'email' => 'agus@primateknik.id',
                'source' => 'WhatsApp',
                'status' => 'Contacted',
                'notes' => 'Menjadwalkan presentasi produk.',
            ],
            [
                'name' => 'Lina Handayani',
                'company' => 'PT Global Sentosa',
                'phone' => '081322233344',
                'email' => 'lina@globalsentosa.co.id',
                'source' => 'Instagram',
                'status' => 'New',
                'notes' => 'Menghubungi melalui DM Instagram.',
            ],
        ];

        foreach ($prospects as $prospect) {
            Prospect::create($prospect);
        }
    }
}