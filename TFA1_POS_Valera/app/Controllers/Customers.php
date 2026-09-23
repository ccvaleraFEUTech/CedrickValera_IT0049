<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Cedrick Nicolas Valera', 'email' => 'cedrickvalera0305@gmail.com', 'phone' => '09199832828'],
            ['full_name' => 'Lucio Shimada', 'email' => 'lucio.shimada@email.com', 'phone' => '09293547057'],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro.reyes@email.com', 'phone' => '09193456789'],
            ['full_name' => 'Ana Lopez', 'email' => 'ana.lopez@email.com', 'phone' => '09204567890'],
            ['full_name' => 'Jose Garcia', 'email' => 'jose.garcia@email.com', 'phone' => '09215678901'],
        ];

        $data['customers'] = $customers;

        return view('customers/index', $data);
    }
}