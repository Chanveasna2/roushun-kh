<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Category;
use App\SysStatic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $role = Role::create([
            'name'=>'Admin'
        ]);
        $role = Role::create([
            'name'=>'Editor'
        ]);

        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'admin@roushun-kh.com',
            'password'=>bcrypt('123123')
        ]);
        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'soklimkheng@roushun-kh.com',
            'password'=>bcrypt('123123')
        ]);

        $category = Category::create([
           'category_name'=>'Shampoo',
        ]);
        $category = Category::create([
            'category_name'=>'Body Wash'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'អំពីក្រុមហ៊ុន',
            'static_value_first'=>'Rouhun Cambodia. គឺជាក្រុមហ៊ុនផលិតក្នុងស្រុករបស់កម្ពុជា ដែលផ្តល់ជូនផលិតផលប្រើប្រាស់ផ្ទាល់ខ្លួន និងផលិតផលសម្រាប់ប្រើប្រាស់នៅក្នុងផ្ទះដែលមានគុណភាពខ្ពស់។ ពីកម្មវិធីឯកជនរហូតដល់ការប្រើប្រាស់លក្ខណៈពាណិជ្ជកម្ម យើងមានគោលបំណងធ្វើឱ្យផលិតផលរបស់យើង ជាផ្នែកមួយនៃការប្រើប្រាស់ក្នុងជីវិតប្រចំាថ្ងៃ របស់ប្រជាជននៅក្នុងប្រទេសកម្ពុជា',
            'photo_id'=>'1'
        ]);
        $photos = \App\Photo::create([
            'file' => 'logogold.png'
        ]);
        $sys_static =SysStatic::create([
            'static_name'=>'ចក្ខុវិស័យ',
            'static_value_first'=>'យើងនឹងត្រូវបានទទួលស្គាល់ថាជាក្រុមហ៊ុនម៉ាកក្នុងស្រុករបស់ប្រទេសកម្ពុជា នាំមុខគេលើផលិតផលក្នុងផ្ទះ និងផលិតផលថែរក្សាសុខភាពក្នុងកំឡុងពេល ៣ ឆ្នាំខាងមុខ, ផ្តល់ជូនអតិថិជនរបស់យើងជាមួយនឹងផលិតផលដែលមានគុណភាពខ្ពស់ មានភាពសក្ដិសមនៃការជឿទុកចិត្តរបស់ពួកគេ។ ការប្តេជ្ញាចិត្តរបស់យើងគឺដើម្បីផ្តល់នូវកម្រិតខ្ពស់បំផុតនៃសេវាកម្ម និងការយកចិត្តទុកដាក់ដល់អតិថិជនរបស់យើង ខណៈពេលដែលការសម្រេចបាននូវកំណើន ប្រកបដោយនិរន្តរភាពនិងស្ថេរភាពសម្រាប់ក្រុមហ៊ុន។',
            'photo_id'=>'2'
        ]);
        $photos = \App\Photo::create([
            'file' => 'aboutcom.png'
        ]);
        $sys_static =SysStatic::create([
            'static_name'=>'បេសកកម្ម',
            'static_value_first'=>'បេសកកម្មរបស់យើង គឺដើម្បីបង្កើតអាជីវកម្មប្រកបដោយនិរន្តរភាពនិងការទទួលខុសត្រូវ ស្របជាមួយនឹងកម្រិតស្តង់ដា រអន្តរជាតិនៃអភិបាលកិច្ចល្អ។ យើងបានបញ្ចូលគ្នានូវសីលធម៍ការងាររបស់ក្រុមហ៊ុនយ៉ាងខ្លាំងក្លា និងពាណិជ្ជកម្មរយៈពេលវែងជាយុទ្ធសាស្រ្ត ជាមួយនឹងការប្តេជ្ញាចិត្តយ៉ាងខ្លាំងដើម្បី កែលម្អសហគមន៍របស់យើងក្នុងគោលបំណង ដើម្បីក្លាយជាឈ្មោះផលិតផល ប្រើប្រាស់ប្រចាំថ្ងៃនៅក្នុងប្រទេសកម្ពុជា។',
        ]);
        $sys_static =SysStatic::create([
            'static_name'=>'ទំនាក់ទំនង',
            'static_value_first'=>'Roushun Cambodia',
            'static_value_second'=>'អាសយដ្ឋាន៖ សង្កាត់ គីឡូម៉ែត្រលេខ៦ ខណ្ឌ ឬស្សីកែវ រាជធានីភ្នំពេញ',
            'static_value_third'=>'លេខទូរស័ព្ទ: 010 463 463​ / 016 475 799',

        ]);
        $sys_static =SysStatic::create([
            'static_name'=>'Footer Right',
            'static_value_first'=>'អាសយដ្ឋាន៖',
            'static_value_second'=>'អាសយដ្ឋាន៖ សង្កាត់ គីឡូម៉ែត្រលេខ៦ ខណ្ឌ ឬស្សីកែវ រាជធានីភ្នំពេញ',
            'static_value_third'=>'លេខទូរស័ព្ទ: 010 463 463​ / 016 475 799',
        ]);

        $pro=\App\Product::create([
            'pro_name'=>'Roushun Black',
            'user_id'=>1,
            'category_id'=>1,
            'pro_code'=>'001',
            'prices'=>5,
            'isPop'=>1,
            'photo_id'=>'3'
        ]);
        $photos = \App\Photo::create([
            'file' => 'roushunb.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'Roushun White',
            'user_id'=>1,
            'category_id'=>1,
            'pro_code'=>'002',
            'prices'=>5,
            'isPop'=>1,
            'photo_id'=>'4'
        ]);
        $photos = \App\Photo::create([
            'file' => 'roushunw.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'Roushun Red',
            'user_id'=>1,
            'category_id'=>1,
            'pro_code'=>'003',
            'prices'=>5,
            'isPop'=>1,
            'photo_id'=>'5'
        ]);
        $photos = \App\Photo::create([
            'file' => 'roushunr.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'Roushun Honey',
            'user_id'=>1,
            'category_id'=>2,
            'pro_code'=>'004',
            'prices'=>6,
            'isPop'=>1,
            'photo_id'=>'6'
        ]);
        $photos = \App\Photo::create([
            'file' => 'honey.png'
        ]);

        $user = \App\User::create([
            'name'=>'Dom',
            'role_id'=>'2',
            'isActive'=>'1',
            'email'=>'director@roushun-kh.com',
            'password'=>bcrypt('123123'),
            'photo_id'=>'4'
        ]);
        $user = \App\User::create([
            'name'=>'Jimmy',
            'role_id'=>'2',
            'isActive'=>'1',
            'email'=>'manager@roushun-kh.com',
            'password'=>bcrypt('123123'),
            'photo_id'=>'3'
        ]);
    }
}

