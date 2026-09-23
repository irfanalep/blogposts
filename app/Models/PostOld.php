<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_posts = [[
        "title" => "Neon Genesis Evangelion",
        "slug" => "neon-genesis-evangelion",
        "author" => "Shinji Ikari",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quasi iusto amet provident soluta, ipsum non magnam vero perspiciatis minus rem tenetur asperiores quidem ipsa fuga deleniti? Doloribus, ipsam fugiat culpa iusto natus commodi veritatis reprehenderit, sequi eius consequuntur vero maiores labore libero quidem voluptatem aspernatur harum ipsum perspiciatis odit! Similique pariatur sequi est veniam laborum id rem voluptate accusantium placeat eveniet tenetur ea facilis tempora, aspernatur eligendi mollitia consequuntur."
    ], [
        "title" => "Welcome To The NHK",
        "slug" => "welcome-to-the-nhk",
        "author" => "Tatsuhiro Satou",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias enim quasi eligendi voluptatem tenetur quis aliquid veniam facere est assumenda nesciunt ex rerum ullam labore, sunt natus nulla voluptates deleniti laborum vel molestias animi odio. Asperiores, impedit. Alias commodi temporibus ducimus tempore, sed earum optio iste eveniet illum inventore laborum error officia quia, atque, aut architecto porro cumque quo iusto! Eveniet animi consequatur corporis tempore, veniam voluptate laudantium, blanditiis expedita repellat quia aperiam error. Ut iste, consequuntur perspiciatis similique id fuga tenetur nesciunt, nulla corrupti sapiente porro, sunt aliquid esse?"
    ],];

    public static function show()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::show();
        return $posts->firstWhere('slug', $slug);
    }
}
