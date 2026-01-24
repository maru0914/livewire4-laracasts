<?php

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Create Post')]
class extends Component {
    public string $title = '';
    public string $content = '';
    public string $status = 'draft';

    public function save(): void
    {
        sleep(1);
        Post::create($this->validate([
            'title' => 'required|min:3',
            'content' => 'required',
            'status' => 'required|in:draft,published',
        ]));

        $this->redirect('/post', navigate: true);
    }
};
