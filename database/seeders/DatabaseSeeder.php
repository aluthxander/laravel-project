<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name'=>'lutfan Zainul Haq',
        //     'email'=>'lutfan@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=>'Riyan Ariyawan',
        //     'email'=>'riyan@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        
        Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vitae, quae accusamus blanditiis eveniet impedit inventore magnam molestiae officiis nostrum doloribus repellat adipisci, neque id?',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, sapiente quam, optio dignissimos nam reiciendis rerum veniam ducimus, at accusantium ad vitae maxime. Tempore quis quia aliquid repellendus maiores ex voluptas sequi. Odit ducimus repudiandae laudantium culpa nemo assumenda. Omnis, cumque. Eveniet est qui libero. Doloribus nemo qui nobis eius.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas velit deserunt tenetur facilis ad sint aspernatur ipsum? Velit hic ut, voluptatem cupiditate ratione debitis odio delectus, voluptas vel accusamus atque cumque sapiente reiciendis veritatis similique molestiae. Nostrum suscipit quam repellendus obcaecati amet eveniet excepturi hic itaque voluptatibus. Vitae, totam quibusdam!</p>',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vitae, quae accusamus blanditiis eveniet impedit inventore magnam molestiae officiis nostrum doloribus repellat adipisci, neque id?',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, sapiente quam, optio dignissimos nam reiciendis rerum veniam ducimus, at accusantium ad vitae maxime. Tempore quis quia aliquid repellendus maiores ex voluptas sequi. Odit ducimus repudiandae laudantium culpa nemo assumenda. Omnis, cumque. Eveniet est qui libero. Doloribus nemo qui nobis eius.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas velit deserunt tenetur facilis ad sint aspernatur ipsum? Velit hic ut, voluptatem cupiditate ratione debitis odio delectus, voluptas vel accusamus atque cumque sapiente reiciendis veritatis similique molestiae. Nostrum suscipit quam repellendus obcaecati amet eveniet excepturi hic itaque voluptatibus. Vitae, totam quibusdam!</p>',
        //     'category_id'=> 1,
        //     'user_id'=>2
        // ]);

        // Post::create([
        //     'title'=>'Judul ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vitae, quae accusamus blanditiis eveniet impedit inventore magnam molestiae officiis nostrum doloribus repellat adipisci, neque id?',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, sapiente quam, optio dignissimos nam reiciendis rerum veniam ducimus, at accusantium ad vitae maxime. Tempore quis quia aliquid repellendus maiores ex voluptas sequi. Odit ducimus repudiandae laudantium culpa nemo assumenda. Omnis, cumque. Eveniet est qui libero. Doloribus nemo qui nobis eius.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas velit deserunt tenetur facilis ad sint aspernatur ipsum? Velit hic ut, voluptatem cupiditate ratione debitis odio delectus, voluptas vel accusamus atque cumque sapiente reiciendis veritatis similique molestiae. Nostrum suscipit quam repellendus obcaecati amet eveniet excepturi hic itaque voluptatibus. Vitae, totam quibusdam!</p>',
        //     'category_id'=> 2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vitae, quae accusamus blanditiis eveniet impedit inventore magnam molestiae officiis nostrum doloribus repellat adipisci, neque id?',
        //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus, sapiente quam, optio dignissimos nam reiciendis rerum veniam ducimus, at accusantium ad vitae maxime. Tempore quis quia aliquid repellendus maiores ex voluptas sequi. Odit ducimus repudiandae laudantium culpa nemo assumenda. Omnis, cumque. Eveniet est qui libero. Doloribus nemo qui nobis eius.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas velit deserunt tenetur facilis ad sint aspernatur ipsum? Velit hic ut, voluptatem cupiditate ratione debitis odio delectus, voluptas vel accusamus atque cumque sapiente reiciendis veritatis similique molestiae. Nostrum suscipit quam repellendus obcaecati amet eveniet excepturi hic itaque voluptatibus. Vitae, totam quibusdam!</p>',
        //     'category_id'=> 2,
        //     'user_id'=>2
        // ]);
    }
}
