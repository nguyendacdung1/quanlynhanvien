<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        // 

        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'Nguyen Dung',
                'email' => 'nguyendungmk9@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
            [
                'id' => 2,
                'username' => 'Quy Vu',
                'email' => 'quyvumk9@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
            [
                'id' => 3,
                'username' => 'Huy Hoang',
                'email' => 'hoanghuymk9@gmail.com',
                'password' => Hash::make('123456'),
                
                'role' => 'nhanvien',
            ],
            [
                'id' => 4,
                'username' => 'Nguyen Tuyen',
                'email_cn' => 'nguyentuyenmk9@gmail.com',
                'password' => Hash::make('123456'),
                
                'role' => 'nhanvien',
            ],
            [
                'id' => 5,
                'username' => 'Nguyen Long',
                'email' => 'nguyenlongmk9@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
            [
                'id' => 6,
                'username' => 'Nguyen Duy',
                'email' => 'nguyenduymk9@gmail.com',
                'password' => Hash::make('123456'),
                
                'role' => 'nhanvien',
            ],
            [
                'id' => 7,
                'username' => 'Ngoc Anh',
                'email' => 'ngocanhmk9@gmail.com',
                'password' => Hash::make('123456'),
                
                'role' => 'nhanvien',
            ],
            [
                'id' => 8,
                'username' => 'Trung Quan',
                'email' => 'nguyentrungquanmk9@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
            [
                'id' => 9,
                'username' => 'Thu Trang',
                'email' => 'trangthumk9@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
            [
                'id' => 10,
                'username' => 'Tran Duy Hung',
                'email' => 'tranduyhung@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'nhanvien',
            ],
        ]);

        DB::table('departments')->insert([
            [
                'id' => 1,
                'department_name' => 'Developer',
            ],
            [
                'id' => 2,
                'department_name' => 'Tester',
            ],
            [
                'id' => 3,
                'department_name' => 'Designer',
            ],
            [
                'id' => 4,
                'department_name' => 'Hành chính - Nhân sự',
            ],
            [
                'id' => 5,
                'department_name' => 'Admin',
            ]
            
        ]);

        DB::table('employees')->insert([
            [
                'name' => 'Nguyễn Đắc Dũng',
                'address' => 'Van Diem - Thuong Tin - Ha Noi',
                'phone' => '0585009531',
                'hire-date' => '2023-02-14',
            ],
            [
                'name' => 'Vũ Viết Quý',
                'address' => 'Thuy dung - Thai Binh',
                'phone' => '09999999999',
                'hire-date' => '2023-02-14',
            ], [
                'name' => 'Võ Huy Hoàng',
                'address' => 'Dong Tao - Khoai Chau - Hung Yen',
                'phone' => '05134235342',
                'hire-date' => '2023-02-14',
            ], [
                'name' => 'Nguyễn Thị Tuyến',
                'address' => 'Thanh Xuan - Ha Noi',
                'phone' => '0585003456',
                'hire-date' => '2023-02-14',
            ], [
                'name' => 'Nguyễn Đức Long',
                'address' => 'Van Diem - Thuong Tin - Ha Noi',
                'phone' => '0585009531',
                'hire-date' => '2023-02-14',
            ], [
                'name' => 'Nguyễn Đức Duy',
                'address' => 'VThanh Xuan - Ha Noi',
                'phone' => '0585005678',
                'hire-date' => '2023-02-10',
            ], [
                'name' => 'Nguyễn Ngọc Ánh',
                'address' => 'Dong Tao - Khoai Chau - Hung Yen',
                'phone' => '0585009533',
                'hire-date' => '2023-02-10',
            ], [
                'name' => 'Nguyễn Trung Quân',
                'address' => 'Dong Da - Ha Noi',
                'phone' => '0585003533',
                'hire-date' => '2023-02-10',
            ], [
                'name' => 'Đỗ Thu Trang',
                'address' => 'Tan Dan - Hung Yen - Ha Noi',
                'phone' => '05850090909',
                'hire-date' => '2023-02-13',
            ], [
                'name' => 'Trần Duy Hưng',
                'address' => '',
                'phone' => '09999999999',
                'hire-date' => '2018-02-13',
            ],
        ]);

        DB::table('department-employees')->insert([
            [
                'department_id' => 1,
                'employee_id' => 1,
            ],
            [
                'department_id' => 1,
                'employee_id' => 2,
            ],
            [
                'department_id' => 1,
                'employee_id' => 3,
            ],
            [
                'department_id' => 1,
                'employee_id' => 4,
            ],
            [
                'department_id' => 1,
                'employee_id' => 5,
            ],
            [
                'department_id' => 2,
                'employee_id' => 6,
            ],
            [
                'department_id' => 2,
                'employee_id' => 7,
            ],
            [
                'department_id' => 3,
                'employee_id' => 8,
            ],
            [
                'department_id' => 4,
                'employee_id' => 9,
            ],
            [
                'department_id' => 5,
                'employee_id' => 10,
            ],
            [
                'department_id' => 5,
                'employee_id' => 1,
            ],
        ]);

       
    }
}
