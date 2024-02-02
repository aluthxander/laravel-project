<?php

namespace App\Models;


class Post
{
    private static $blog_posts= [
            [
            "title"=> "judul Post Pertama",
            "slug"=> "judul-Post-Pertama",
            "author"=> "Lutfan Zainul Haq",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quisquam consectetur numquam minima earum incidunt, itaque maiores facilis praesentium quidem exercitationem est, quod animi soluta"
        ],
        [
            "title"=> "judul Post Kedua",
            "slug"=> "judul-Post-Kedua",
            "author"=> "Dody",
            "body"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro natus, tempore officia quo at animi nostrum numquam ipsa voluptatum. Obcaecati quia iure quaerat sed deleniti nostrum omnis autem illum! Voluptatum quis repellendus consequuntur commodi beatae iure, deleniti repudiandae explicabo sequi perspiciatis error doloremque magnam sapiente soluta, sint quia odio natus. Labore non amet ratione perferendis numquam iste quam natus dolor delectus reiciendis, esse, rem fugiat consectetur quos eaque magnam fuga architecto rerum recusandae suscipit molestiae ut voluptate aut! Atque adipisci blanditiis animi consectetur incidunt amet sint voluptatibus odit voluptates! Hic quidem nihil deserunt quos saepe aspernatur veritatis ipsum dignissimos assumenda."
        ]
    ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
    
}
