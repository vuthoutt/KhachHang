<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ChucVuSeeder::class);
        $this->call(PhongBanSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DiemBanSeeder::class);
        $this->call(NhanVienSeeder::class);
        $this->call(KhachHangSeeder::class);
        $this->call(LoaiSanPhamSeeder::class);
        $this->call(NhaCungCapSeeder::class);
    }
}
