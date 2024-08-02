<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comments;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        // Création de commentaires fictifs sans utiliser de factory
        Comments::create([
            'title' => 'Premier Commentaire',
            'content' => 'Ceci est le contenu du premier commentaire.',
            'post_id' => 1, // Remplacez par un ID de post valide
            'author_name' => 'Auteur 1',
        ]);

        Comments::create([
            'title' => 'Deuxième Commentaire',
            'content' => 'Ceci est le contenu du deuxième commentaire.',
            'post_id' => 1, // Remplacez par un ID de post valide
            'author_name' => 'Auteur 2',
        ]);

        // Ajoutez autant de commentaires que nécessaire
        Comments::create([
            'title' => 'Troisième Commentaire',
            'content' => 'Ceci est le contenu du troisième commentaire.',
            'post_id' => 2, // Remplacez par un ID de post valide
            'author_name' => 'Auteur 3',
        ]);
    }
}
