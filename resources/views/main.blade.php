<x-main.layout>
    <h2 >Разделы форума:</h2>
    @foreach($sections as $section)
        <x-main.elements.section :id="$section->id">
            <h5>{{ $section->name }}</h5>
        </x-main.elements.section>
    @endforeach
</x-main.layout>