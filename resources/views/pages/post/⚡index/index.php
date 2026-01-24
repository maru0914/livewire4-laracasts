<?php

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Posts')]class extends Component
{
    public string $sort = 'newest';

    #[Computed]
    public function posts(): Collection
    {
       return Post::query()
           ->tap(fn ($q) => match ($this->sort) {
               'oldest' => $q->orderBy('created_at', 'asc'),
               'popular' => $q->orderBy('views', 'desc'),
               default => $q->latest(),
           })
           ->get();
    }

    public function delete(Post $post): void
    {
        $post->delete();
    }
};
