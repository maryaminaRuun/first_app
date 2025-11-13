@props(['hlighlight' => false])

<div @class(['highlight' => $hlighlight, 'card'])>
    {{ $slot }}
    <a {{$attributes }} class="btn">View Details</a>
</div>