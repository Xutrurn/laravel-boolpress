<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;
use App\User;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            $newPost = new Post();
            
            $newPost->title = 'ciao a tutti';
            //$newPost->title = $faker->sentence(3);
            //$newPost->title = $faker->words(3);
            $newPost->content = $faker->text(100);

            // seleziona tutti gli utenti
            //$users = User::all();

            //il risultato è una collection, va convertita in array
            //$users = $users->toArray;

            //contare gli utenti
            //$users = Count($users);

            //soluzione ad una riga
            $userCount = Count(User::all()->toArray());
            $newPost->user_id = rand(1, $userCount);
            
            $slug = Str::slug($newPost->title);
            $slugIniziale = $slug;

            $postPresente = Post::where('slug',$slug)->first();

            $contatore = 1;

            while($postPresente){
                $slug = $slugIniziale . '-' .$contatore;
                $postPresente = Post::where('slug',$slug)->first();
                $contatore++;
            }
            
            $newPost->slug = $slug;

            $newPost->save();
        }
    }
}
