@props(['job'])

<x-panel class="flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 text-center">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-500 ease-in-out">
            <a href="{{ $job->url }}" target="_blank" class="hover:underline">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4"> {{ $job->salary }} </p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size='small'/>
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width='42'/>
    </div>
</x-panel>