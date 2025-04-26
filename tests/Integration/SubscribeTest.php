<?php

namespace Yuges\Orderable\Tests\Integration;

use Yuges\Orderable\Tests\TestCase;
use Yuges\Orderable\Tests\Stubs\Models\Post;

class SubscribeTest extends TestCase
{
    public function testSubscribeUserToChannel()
    {
        $post = Post::query()->create([
            'title' => 'New post',
        ]);
        $column = $post->orderable()->column;

        $this->assertDatabaseHas(Post::getTableName(), [
            'title' => $post->title,
            $column => 1,
        ]);

        $post = Post::query()->create([
            'title' => 'Two post',
        ]);

        $this->assertDatabaseHas(Post::getTableName(), [
            'title' => $post->title,
            $column => 2,
        ]);
    }
}
