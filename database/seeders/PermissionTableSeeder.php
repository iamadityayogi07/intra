<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'category-list',
           'category-create',
           'category-edit',
           'category-delete',
           'subcategory-list',
           'subcategory-create',
           'subcategory-edit',
           'subcategory-delete',
           'brand-list',
           'brand-create',
           'brand-edit',
           'brand-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'setting-edit',
           'product-order-listing',
           'shops-list',
           'shops-create',
           'shops-edit',
           'shops-delete',
           'checkout-index',
           'addToCart',
           'order-list',
           'order-details',
           'driver-order-list',
           'editOrder',
           'assign-driver',
           'delete-cart-item',
           'delete-order-item',
           'pay-shop-due',
           'purchase-item',
           'active-status',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}