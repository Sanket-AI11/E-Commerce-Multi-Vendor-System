<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $settings = array(
            array('id' => '1', 'key' => 'site_name', 'value' => 'ShopX', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '2', 'key' => 'site_email', 'value' => 'shopx@gmail.com', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '3', 'key' => 'site_phone', 'value' => '000000000', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '4', 'key' => 'site_currency', 'value' => 'USD', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '5', 'key' => 'site_currency_icon', 'value' => '$', 'created_at' => '2025-08-06 06:44:32', 'updated_at' => '2025-08-06 06:44:32'),
            array('id' => '6', 'key' => 'paypal_status', 'value' => 'active', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:51:07'),
            array('id' => '7', 'key' => 'paypal_mode', 'value' => 'sandbox', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-06 10:00:41'),
            array('id' => '8', 'key' => 'paypal_currency', 'value' => 'USD', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:52:46'),
            array('id' => '9', 'key' => 'paypal_rate', 'value' => '1', 'created_at' => '2025-08-06 10:00:41', 'updated_at' => '2025-08-07 04:51:14'),

            
            array('id' => '12', 'key' => 'stripe_status', 'value' => 'active', 'created_at' => '2025-08-10 07:48:26', 'updated_at' => '2025-08-10 07:48:26'),
            array('id' => '13', 'key' => 'stripe_mode', 'value' => 'sandbox', 'created_at' => '2025-08-10 07:48:26', 'updated_at' => '2025-08-10 07:48:26'),
            array('id' => '14', 'key' => 'stripe_currency', 'value' => 'USD', 'created_at' => '2025-08-10 07:48:26', 'updated_at' => '2025-08-10 07:48:26'),
            array('id' => '15', 'key' => 'stripe_rate', 'value' => '1', 'created_at' => '2025-08-10 07:48:26', 'updated_at' => '2025-08-10 07:48:26'),

            
            array('id' => '18', 'key' => 'razorpay_status', 'value' => 'active', 'created_at' => '2025-08-11 03:58:59', 'updated_at' => '2025-08-11 03:58:59'),
            array('id' => '19', 'key' => 'razorpay_currency', 'value' => 'INR', 'created_at' => '2025-08-11 03:58:59', 'updated_at' => '2025-08-11 03:58:59'),
            array('id' => '20', 'key' => 'razorpay_rate', 'value' => '87.52', 'created_at' => '2025-08-11 03:58:59', 'updated_at' => '2025-08-11 04:49:24'),

            
            array('id' => '23', 'key' => 'admin_commission', 'value' => '15', 'created_at' => '2025-08-11 09:45:44', 'updated_at' => '2025-08-11 09:45:44'),
            array('id' => '24', 'key' => 'site_short_description', 'value' => 'Awesome eCommerce store website template', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '25', 'key' => 'site_address', 'value' => '233 North Michigan Avenue, Suite 1800, Chicago, IL 60601', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '26', 'key' => 'site_copyright', 'value' => '2025, ShopX - HTML Ecommerce Template', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '27', 'key' => 'site_hours', 'value' => '10:00 - 18:00, Mon - Sat', 'created_at' => '2025-08-27 06:22:09', 'updated_at' => '2025-08-27 06:23:29'),
            array('id' => '28', 'key' => 'site_logo', 'value' => 'uploads/d119cd15-426a-48b8-bac8-1dea557921b3.svg', 'created_at' => '2025-08-27 07:30:25', 'updated_at' => '2025-08-27 07:30:25'),
            array('id' => '29', 'key' => 'site_favicon', 'value' => 'uploads/08f2beba-29a2-4cfe-aaeb-f9c5740f1730.svg', 'created_at' => '2025-08-27 07:30:25', 'updated_at' => '2025-08-27 07:30:25')
        );

        DB::table('settings')->insert($settings);
    }
}
