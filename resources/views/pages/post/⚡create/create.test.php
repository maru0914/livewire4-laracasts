<?php

use App\Models\Post;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

test('example', function () {
    assertDatabaseMissing(Post::class, [
            'title' => 'Test Title',
            'content' => 'Test Content'
        ]
    );
    visit('/post/create')
        ->type('[wire\:model="title"]', 'Test Title')
        ->type('[wire\:model="content"]', 'Test Content')
        ->press('Save')
        ->assertPathIs('/');

    assertDatabaseHas(Post::class, [
        'title' => 'Test Title',
        'content' => 'Test Content'
    ]);
});
