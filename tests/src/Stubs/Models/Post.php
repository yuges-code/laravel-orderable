<?php

namespace Yuges\Orderable\Tests\Stubs\Models;

use Yuges\Package\Models\Model;
use Yuges\Orderable\Traits\HasOrder;
use Yuges\Orderable\Options\OrderOptions;
use Yuges\Orderable\Interfaces\Orderable;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model implements Orderable
{
    use HasOrder;

    protected $table = 'posts';

    protected $guarded = ['id'];

    public function orderable(): OrderOptions
    {
        $options = new OrderOptions;

        $options->query = function (Builder $builder) {
            return $builder;
        };

        return $options;
    }
}
