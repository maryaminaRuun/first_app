<x-layout>
    <h1>{{ $greeting }}</h1>

    <ul>
        @foreach ($rezacreative as $index => $reza)
            <li>
                <x-card href="/rezacreative/{{ $reza['name'] }}" :highlight="true">
                    <h2>{{ $reza['name'] }}</h2>
                    <p>{{ $reza['description'] }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
