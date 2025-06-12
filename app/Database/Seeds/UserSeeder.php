<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
            'username' => 'nailb',
			'useremail' => 'fadil123@gmail.com',
			'userpassword' => password_hash('nabil123', PASSWORD_DEFAULT),
        ]);
    }
}