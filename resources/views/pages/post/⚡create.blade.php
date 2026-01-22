<?php

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts.app', ['title' => 'Create Post'])]
class extends Component {
    public string $title = '';
    public string $content = '';

    public function save(): void
    {
        Post::create($this->validate([
            'title' => 'required|min:3',
            'content' => 'required'
        ]));

        $this->redirect('/');
    }
};
?>

<div>
    <form wire:submit="save" class="w-96 space-y-6">
        <flux:input wire:model="title" label="Title" />
        <flux:textarea wire:model="content" label="Content" />
        <flux:button type="submit" variant="primary">Save</flux:button>
    </form>
</div>
