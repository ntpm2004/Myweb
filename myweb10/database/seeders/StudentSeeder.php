<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentModel; // ✅ import đúng model bạn tạo

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        StudentModel::create(['name' => 'Ninh Mai', 'age' => 20, 'class' => 'CNTT_1']);
        StudentModel::create(['name' => 'Hong Duong', 'age' => 21, 'class' => 'CNTT_5']);
        StudentModel::create(['name' => 'Dang Nhung', 'age' => 20, 'class' => 'CNTT_2']);
    }
}
