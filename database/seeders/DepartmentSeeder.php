<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::create([
            'name' => 'PPLG',
            'description' => 'Belajar coding, membuat aplikasi, website, dan gim sederhana.'
        ]);
        Department::create([
            'name' => 'ANIMASI 3D',
            'description' => 'Membuat model dan animasi 3D, mulai dari karakter hingga efek visual.'
        ]);
        Department::create([
            'name' => 'ANIMASI 2D',
            'description' => 'Menggambar dan menghidupkan animasi 2D, seperti kartun dan ilustrasi bergerak.'
        ]);
        Department::create([
            'name' => 'DKV DG',
            'description' => 'Mendesain poster, logo, dan ilustrasi digital untuk promosi visual.'
        ]);
        Department::create([
            'name' => 'DKV TG',
            'description' => 'Fokus pada tata letak desain cetak, seperti majalah, brosur, dan buku.'
        ]);
    }
}
