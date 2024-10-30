@props(['type'])

@error($type)
<div class="text-red-500 text-sm">{{ $message }}</div>
@enderror