<?php

use Hol_bwlist_user as Hol_User;

class Hol_bwlist_mapper
{
    public static function MapUser($user)
    {
        $user = (array) $user;
        return new Hol_User(
            $user['username'],
            $user['user_rank'],
            $user['positive_rating'],
            $user['negative_rating'],
            $user['total_rating'],
            $user['id']
        );
    }
}
