<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13/12/16
 * Time: 21:41
 */

namespace App\Policies;


trait HasAdmin
{
    public function before($user, $ability)
    {
        if($this->hasRole('Admin')){return true;}
    }
}