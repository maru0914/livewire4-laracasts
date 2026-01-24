<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public Post $post;

    public function  mount(): void
    {
        usleep(100 * 1000); // 100ms
    }
};
?>

@placeholder
<flux:skeleton class="min-h-56 rounded-lg" animate="shimmer" />
@endplaceholder

<flux:card class="flex flex-col justify-between p-4 rounded-lg" variant="filled">
    <div>
        <flux:heading size="lg">{{ $post->title }}</flux:heading>
        <flux:text class="mt-1 text-xs text-zinc-500">{{ $post->created_at->format('M d, Y') }}</flux:text>
        <flux:text class="mt-4 line-clamp-3">{{ $post->content }}</flux:text>
    </div>

    <div class="mt-6 flex justify-between">
        <div class="flex items-center">
            @if ($post->status === 'published')
                <flux:badge rounded size="sm" variant="solid">Published</flux:badge>
            @else
                <flux:badge rounded size="sm">Draft</flux:badge>
            @endif
        </div>

        <flux:button.group>
            <flux:dropdown>
                <flux:button size="sm" variant="outline" icon="chevron-down" />

                <flux:menu>
                    <flux:menu.item icon="arrow-up-right" href="/post/edit"></flux:menu.item>
                    <flux:menu.separator />
                    <flux:menu.item variant="danger" icon="trash" href="/post/delete"></flux:menu.item>
                </flux:menu>
            </flux:dropdown>

            <flux:button size="sm" variant="outline"> Edit post </flux:button>
        </flux:button.group>
    </div>


</flux:card>
