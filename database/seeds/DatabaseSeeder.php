<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ProductionSeeder');

        if( App::environment() === 'development' )
        {
            $this->call('DevelopmentSeeder');
        }

        Model::reguard();
    }
}

class DatabaseSeeder extends Seeder
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
                'department_created_by' => 1,
                'enabled' => 1,
            );
            array(
                'name' => 'kế toán',
                'department_created_by' => 1,
                'enabled' => 1,
            ); 
            array(
                'name' => 'sản xuất',
                'department_created_by' => 1,
                'enabled' => 1,
            ); 
            array(
                'name' => 'giao nhận',
                'department_created_by' => 1,
                'enabled' => 1,
            );
            array(
                'name' => 'marketing-degital',
                'department_created_by' => 1,
                'enabled' => 1,
            );
            array(
                'name' => 'quản lý',
                'department_created_by' => 1,
                'enabled' => 1,
            );    
        ]);

        DB::table('regency')->insert([
            array(
                'name' => 'Trưởng Phòng',
                'enabled' => 1,
            );
            array(
                'name' => 'Nhân viên',
                'enabled' => 1,
            );
        ]);
    }
}

