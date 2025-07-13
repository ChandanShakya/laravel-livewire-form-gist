<form wire:submit="save">
    <x-input-text name="form.title" wire:model="form.title" />
    <x-input-text name="form.content" wire:model="form.content" />
    <button type="submit">Save</button>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
</form>
