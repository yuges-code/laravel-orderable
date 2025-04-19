<?php

namespace Yuges\Orderable\Tests\Feature;

use Yuges\Orderable\Tests\TestCase;
use Yuges\Orderable\Tests\Stubs\Models\User;

class HasTableTest extends TestCase
{
    public function testGettingTableName()
    {
        $this->assertEquals('users', User::getTableName());
    }
}
