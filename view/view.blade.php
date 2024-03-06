
    <! --live loading  -->
<div wire:poll.keep-alive>
    @foreach ($items as $item)
        <div>{{ $item->name }}</div>
        <div>{{ $item->description }}</div>
    @endforeach
</div>
