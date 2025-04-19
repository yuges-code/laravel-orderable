<?php

namespace Yuges\Orderable\Tests\Stubs\Models;

use Yuges\Package\Models\Model;

class User extends Model
{
    protected $table = 'users';

    protected $guarded = ['id'];
}
