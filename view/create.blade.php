<div>
    <form wire:submit="add">
        <input type="text" wire:model="name">
        <input type="text" wire:model="description">
        <button type="submit">add</button>
    </form>
 <p>Value: {{ $name }}</p>
</div>
