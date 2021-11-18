<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('employees')->insert([
            [
                'id' => 1,
                'name' => 'vonhanvien',
                'address' => 'osin popayes',
                'phone' => 0,
                'account_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'vonhanvien2',
                'address' => 'Q8',
                'phone' => 1,
                'account_id' => 2,
            ]
        ]);

        DB::table('accounts')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'customer_id' => 0,
                'username' => 'vohost',
                'password' => Hash::make('123456'),
                'level' => 0,
                'avatar' => null,
            ],
            [
                'id' => 2,
                'employee_id' => 2,
                'customer_id' => 0,
                'username' => 'voadmin',
                'password' => Hash::make('123456'),
                'level' => 1,
                'avatar' => null,
            ],
            [
                'id' => 3,
                'employee_id' => 0,
                'customer_id' => 1,
                'username' => 'vouser',
                'password' => Hash::make('123456'),
                'level' => 2,
                'avatar' => null,
            ]
        ]);

        DB::table('bills')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'employee_id' => 1,
                'bill_details' => 'chi tiết hóa đơn',
            ]
        ]);

        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Áo',
            ]
        ]);

        DB::table('customer-types')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'name' => 'Đồng',
            ]
        ]);
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'vokhachhang',
                'phone' => 0,
                'address' => 'Anh lớn Di Linh',
                'type_id' => 1,
                'account_id' => 1,
            ]
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Áo thun shopee',
                'quantity' => 1,
                'size' => 'M',
                'color' => 'Đen',
                'image' => '1.jpg',
                'price' => 30000,
                'category_id' => 1,
                'employee_id' => 1,
            ]
        ]);

        DB::table('receipts')->insert([
            [
                'id' => 1,
                'supplier_id' => 1,
                'product_id' => 1,
                'receipt_details' => 'chi tiết phiếu nhập',
            ]
        ]);

        DB::table('sales')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'bill_id' => 1,
                'quantity' => 1,
                'product_price' => 30000,
            ]
        ]);

        DB::table('suppliers')->insert([
            [
                'id' => 1,
                'name' => 'Bác Vượng',
                'address' => 'Việt Nam',
                'phone' => 0,
            ]
        ]);
    }
}