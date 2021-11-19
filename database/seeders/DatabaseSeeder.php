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

        //############### khách hàng #######################
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'vouser',
                'phone' => '0909',
                'address' => 'Anh lớn Di Linh',
                'account_id' => 3,
            ],
            [
                'id' => 2,
                'name' => 'vodeptrai',
                'phone' => '0908',
                'address' => 'Di Linh Lâm Đồng',
                'account_id' => 4,
            ],
        ]);
        //##################### nhân viên ########################3
        DB::table('employees')->insert([
            [
                'id' => 1,
                'name' => 'vonhanvien',
                'address' => 'osin popayes',
                'phone' => '0906',
                'account_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'vonhanvien2',
                'address' => 'Q8',
                'phone' => '0905',
                'account_id' => 2,
            ]
        ]);
//################### account########################3
        DB::table('accounts')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'customer_id' => null,
                'username' => 'vohost',
                'password' => Hash::make('123456'),
                'level' => 0,
            ],
            [
                'id' => 2,
                'employee_id' => 2,
                'customer_id' => null,
                'username' => 'voadmin',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
            [
                'id' => 3,
                'employee_id' => null,
                'customer_id' => 1,
                'username' => 'vouser',
                'password' => Hash::make('123456'),
                'level' => 2,
            ],
            [
                'id' => 4,
                'employee_id' => null,
                'customer_id' => 2,
                'username' => 'vodeptrai',
                'password' => Hash::make('123456'),
                'level' => 2,
            ]
        ]);
        //############### bill###################
        DB::table('bills')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'employee_id' => 1,
                'bill_details' => 'chi tiết hóa đơn',
            ]
        ]);
        //############### Loại hàng ########################
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Áo',
            ],
            [
                'id' => 2,
                'name' => 'quần',
            ],
            [
                'id' => 3,
                'name' => 'Bộ',
            ]
        ]);
        // ################# loại khách hàng #####################
        DB::table('customer-types')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'name' => 'Đồng',
            ]
        ]);
       
       //##########################sản phẩm ##################################
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Ao-under-armour-den-600x600',
                'quantity' => 3,
                'size' => 'M',
                'color' => 'Đen',
                'image' => 'Ao-under-armour-den-600x600.jpg',
                'price' => 30000,
                'category_id' => 1,
                'employee_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Áo thể thao 2MIN',
                'quantity' => 2,
                'size' => 'M',
                'color' => 'Đen',
                'image' => 'Ao-The-Thao-2-min.jpg',
                'price' => 30000,
                'category_id' => 1,
                'employee_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Quần short thể thao nữ phối viền',
                'quantity' => 3,
                'size' => 'xl',
                'color' => 'Đen',
                'image' => 'quanshortthethaonuphoivien.jpg',
                'price' => 150000,
                'category_id' => 2,
                'employee_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Bộ Quần Áo Thể Thao Nam Đa Năng BAZAS BZ052',
                'quantity' => 3,
                'size' => 'xl',
                'color' => 'Đen',
                'image' => 'boquanaothethaoBAZASBZ052.jpg',
                'price' => 350000,
                'category_id' => 3,
                'employee_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'SET QUẦN ÁO THỂ THAO NAM MẬP 2019 BS1524',
                'quantity' => 5,
                'size' => 'xl',
                'color' => 'Đen',
                'image' => 'BS1524.jpg',
                'price' => 250000,
                'category_id' => 3,
                'employee_id' => 2,
            ],
            [
                'id' => 6,
                'name' => 'SET QUẦN ÁO THỂ THAO NAM MẬP VMANLY',
                'quantity' => 5,
                'size' => 'xl',
                'color' => 'Đen',
                'image' => 'VMANLY.jpg',
                'price' => 250000,
                'category_id' => 3,
                'employee_id' => 2,
            ],
            [
                'id' => 7,
                'name' => 'bộ quần áo thể thao nữ SKOT',
                'quantity' => 4,
                'size' => 'S',
                'color' => 'Xanh',
                'image' => 'SKOT.jpg',
                'price' => 40000,
                'category_id' => 3,
                'employee_id' => 2,
            ],
            [
                'id' => 8,
                'name' => 'Quần thể thao nữ',
                'quantity' => 4,
                'size' => 'S',
                'color' => 'Xanh, Xám, Trắng',
                'image' => 'quanduinu.jpg',
                'price' => 100000,
                'category_id' => 2,
                'employee_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Quần thể thao đường phố',
                'quantity' => 4,
                'size' => 'S',
                'color' => 'Xanh, Xám, Trắng',
                'image' => 'quannuthethaoduongpho.jpg',
                'price' => 100000,
                'category_id' => 2,
                'employee_id' => 2,
            ],
            [
                'id' => 10,
                'name' => 'Áo thể thao nữ Benplay SID15065',
                'quantity' => 4,
                'size' => 'S',
                'color' => 'Xanh, Xám, Trắng',
                'image' => 'ao_the_thao_nu_benplay_8b8c.jpg',
                'price' => 100000,
                'category_id' => 1,
                'employee_id' => 2,
            ],

        ]);
            // ############### phiếu nhập #######################3333
        DB::table('receipts')->insert([
            [
                'id' => 1,
                'supplier_id' => 1,
                'product_id' => 1,
                'receipt_details' => 'chi tiết phiếu nhập',
            ]
        ]);
//################# bán ############################3
        DB::table('sales')->insert([
            [
                'id' => 1,
                'product_id' => 1,
                'bill_id' => 1,
                'quantity' => 1,
                'product_price' => 30000,
            ]
        ]);
 // ################### nhà cung cấp ########################
        DB::table('suppliers')->insert([
            [
                'id' => 1,
                'name' => 'Bác Vượng',
                'address' => 'Việt Nam',
                'phone' => '0904',
            ]
        ]);
    }
}
