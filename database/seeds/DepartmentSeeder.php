<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('department')->insert([
            array(
                'name' => 'kinh doanh',
                'department_created_by' => true,
                'enabled' => true
            );
            array(
                'name' => 'kế toán',
                'department_created_by' => true,
                'enabled' => true
            ); 
            array(
                'name' => 'sản xuất',
                'department_created_by' => true,
                'enabled' => true
            ); 
            array(
                'name' => 'giao nhận',
                'department_created_by' => true,
                'enabled' => true
            );
            array(
                'name' => 'marketing-degital',
                'department_created_by' => true,
                'enabled' => true
            );
            array(
                'name' => 'quản lý',
                'department_created_by' => true,
                'enabled' => true
            );    
        ]);

        DB::table('regency')->insert([
            array(
                'name' => 'Trưởng Phòng',
                'enabled' => true,
            );
            array(
                'name' => 'Nhân viên',
                'enabled' => true
            );
        ]);
    }
}
