<?php

namespace Yuges\Orderable\Tests\Stubs\Models;

use Yuges\Package\Models\Model;
use Yuges\Orderable\Traits\HasOrder;
use Yuges\Orderable\Interfaces\Orderable;

class Post extends Model implements Orderable
{
    use HasOrder;

    protected $table = 'posts';

    protected $guarded = ['id'];
}
