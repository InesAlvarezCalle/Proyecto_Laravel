@props([
    'title',
    'image' => 'assets/images/image.jpg'
    ])
<div class="card">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    <img src="{{ asset($image) }}" alt="Logo de servicio" width="200" height="200">
    <div>
        <p>{{ $slot }}</p>
    </div>
</div>