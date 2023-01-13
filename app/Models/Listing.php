<?php
namespace App\Models;

class Listing {
    public static function all(){
        return [
            'heading' => 'Latest Listings in Laravel Gigs',
            'listings' => [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit amet. Qui sunt voluptatem in officiis animi aut dolores dicta aut laudantium tempore eum iste assumenda? Nam eligendi saepe rem dolore perferendis eos tenetur nihil qui aspernatur facere rem architecto iste et ipsum culpa sed omnis laboriosam. Quo aperiam veritatis est quod quasi et totam odit sit animi provident.
        '
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    'description' => 'Listing two Lorem ipsum dolor sit amet. Qui sunt voluptatem in officiis animi aut dolores dicta aut laudantium tempore eum iste assumenda? Nam eligendi saepe rem dolore perferendis eos tenetur nihil qui aspernatur facere rem architecto iste et ipsum culpa sed omnis laboriosam. Quo aperiam veritatis est quod quasi et totam odit sit animi provident.
        '
                ]
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
