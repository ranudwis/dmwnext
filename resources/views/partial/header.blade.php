<div class="hero {{ $class }}">
    {{ $header ?? null }}

    <div class="hero-body">
        {{ $slot }}
    </div>

    {{ $footer ?? null }}
</div>
