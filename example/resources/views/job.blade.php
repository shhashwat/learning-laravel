<x-layout>
    <x-slot:header>
        Job
    </x-slot:header>
    <x-slot:heading>
        <p class="text-2xl font-bold text-gray-800">Job Page</p>
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year
    </p>
</x-layout>