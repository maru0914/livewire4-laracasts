<div class="max-w-xl">
    <div>
        <flux:heading size="xl">New Post</flux:heading>

        <flux:breadcrumbs class="mt-4">
            <flux:breadcrumbs.item href="/posts">Posts</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>New Post</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </div>
    <form wire:submit="save" class="mt-8 space-y-6">
        <flux:input wire:model="title" label="Title" placeholder="Your post Title" />
        <flux:textarea wire:model="content" label="Content" placeholder="Write your post content"/>

        <flux:radio.group wire:model="status" label="Status" variant="cards" class="max-sm:flex-col">
            <flux:radio value="draft" label="Draft" description="Post will be saved as draft" checked />
            <flux:radio value="published" label="Published" description="Post will be published immediately" />
        </flux:radio.group>
        <div class="flex justify-end has-data-loading:bg-black">
            <button type="submit" class="data-loading:opacity-50 items-center font-medium justify-center gap-2 whitespace-nowrap h-10 text-sm rounded-lg ps-4 pe-4 inline-flex bg-black text-white">
                Create post
                <flux:icon.loading variant="micro" class="not-in-data-loading:hidden"/>
            </button>

        </div>
    </form>
</div>
