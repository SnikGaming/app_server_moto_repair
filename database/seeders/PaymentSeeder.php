<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $lsData = [
            [
                'name' => 'Thanh toán khi nhận hàng',
                'image' => 'donation.png'
            ],
            [
                'name' => 'Stripe',
                'image' => 'stripe.png'
            ],
            [
                'name' => 'Ví của tôi',
                'image' => 'donation.png'
            ],
        ];
        foreach ($lsData as $data) {
            Payment::create($data);
        }
    }
}
