<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'firstname' => 'Abdulazizbek',
            'lastname' => 'Mirzanematov',
            'year' => '2005',
            'month' => '01',
            'day' => '08',
            'job' => 'Backend Developer',
            'level' => 'Junior',
            'email' => 'abdulazizbek.coder@gmail.com',
            'password' => \Hash::make('11111111'),
        ]);
    }
}
