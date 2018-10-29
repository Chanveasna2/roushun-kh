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
            'desc'=>'រូបមន្តចិញ្ចឹមស្បែកក្បាលនិងធ្វើឲ្យសក់របស់អ្នកស្រស់ស្អាតដែលធ្វើឲ្យវា ស្រស់ស្អាតពីគល់សក់រហូតដល់ចុងសក់ជាមួយនិងសារជាតិចម្រាញ់Keratin និងប្រេងអូលីវរូបមន្ដដែលមានគុណភាពអាចជួសជុលស្បែកក្បាលនៅផ្ទៃសក់ និងផ្ដល់ឲ្យអ្នកនូវសក់ដែលអាចគ្រប់គ្រងបាន និងមានសំណើមដល់ស្បែក និងសក់ក្បាល។',
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
            'desc'=>'បច្ចេកវិទ្យាធ្វើឲ្យសក់រស់រវើកឡើងវិញ។ បច្ចេកទេសរក្សាពណ៌សក់ស្រស់ស្អាត រហូតដល់៨សប្ដាហ៏។ មានរូបមន្ដរួមបញ្ចូលជាមួយ តែបៃតង ផ្កាឈូករ័ត្ន។ ការម៉ាស្សាសក់ក្បាលថ្នមៗដើម្បីជួយបំពេញសំណើមសំខាន់ដល់សក់ និងរក្សាសក់ឲ្យមានសុខភាពល្អ។ ពណ៌សក់របស់លោកអ្នកនឹងមានភាពរស់រវើក និងយូរអង្វែង ខណៈដែលគ្រប់សក់ទាំងអស់ទន់ និងអាចគ្រប់គ្រងបាន។',
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
            'desc'=>'តើអ្នកចង់បានសក់ដែលភ្លឺរលោងត្រង់ និងងាយស្រួលក្នុងការធ្វើម៉ូតសក់ដែរទេ? ប្រើប្រាស់សាប៊ូកក់សក់ដែលបានបង្កើតជាពិសេសដើម្បីឲ្យសក់របស់អ្នកភ្លឺរលោង ស្រស់ស្អាត និងអាចគ្រប់គ្រងបាន។ ផលិតផលសាប៊ូកក់សក់ ROUSHUN KERATINធ្វើឲ្យភ្លឺរលោងជាមួយនិងបច្ចេកវិទ្យាផ្លាស់ប្ដូរសក់របស់អ្នកធ្វើឲ្យវាកាន់ តែរលោងស្រស់ស្អាតជាមួយភាពត្រជាក់ និងងាយស្រួលក្នុងការធ្វើម៉ូតសក់។',
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
            'desc'=>'ផ្សំចេញពីសារធាតុទឹកឃ្មុំធម្មជាតិ។នៅពេលដែលយើងធ្វើការលាងសម្អាត វានឹងធ្វើឲសក់មានសំណើមយ៉ាងឆាប់រហ័ស រួមទាំងបច្ចេកវិទ្យាបង្កាអង្គែស្បែកក្បាល់ និងប្រឆាំងការជ្រុះសក់។ ផ្ដល់នូវអាហាររូបត្ថម្ភជាច្រើនដល់ស្បែកក្បាល និងសក់ ដូចជាពពួកប្រូតេអ៊ីន និងវិតាមីនជាដើម។ វានឹងផ្ដល់មកវិញនូវសុខភាពដ៍ល្អ មិនមាន អង្គែ ដល់ស្បែកក្បាលដែលនាំនូវអារម្មណ៍រីករាយ និងស្រស់ស្រាយដល់អ្នក។',
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
        $sys_static =SysStatic::create([
            'static_name'=>'Logo(400x65)',
            'static_value_first'=>'Company Logo',
            'photo_id'=>'7'
        ]);
        $photos = \App\Photo::create([
            'file' => 'logo_web.png'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Adv (285x30)',
            'static_value_first'=>'Adv banner',
            'photo_id'=>'8'
        ]);
        $photos = \App\Photo::create([
            'file' => 'advertising_web.gif'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Roushun Cambodia',
            'static_value_first'=>'អំពីផលិតផល',
            'static_value_second'=>'អំពីក្រុមហ៊ុន',
            'static_value_third'=>'ដៃគូចែកចាយ'
        ]);

        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 1',
            'desc'=>'1',
            'order'=>'1',
            'user_id'=>'1',
            'photo_id'=>'9',
        ]);
        $photos = \App\Photo::create([
            'file' => 'promotion1.png'
        ]);
        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 2',
            'desc'=>'2',
            'order'=>'2',
            'user_id'=>'1',
            'photo_id'=>'10',
        ]);
        $photos = \App\Photo::create([
            'file' => 'promotion2.png'
        ]);
        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 3',
            'desc'=>'3',
            'order'=>'3',
            'user_id'=>'1',
            'photo_id'=>'11',
        ]);
        $photos = \App\Photo::create([
            'file' => 'promotion3.png'
        ]);
    }
}

