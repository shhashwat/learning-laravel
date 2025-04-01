<x-layout>
    <x-slot:header>
        Jobs Page
    </x-slot:header>
    <x-slot:heading>
        <p class="text-2xl font-bold text-gray-800">Jobs Page</p>
    </x-slot:heading>
    <p  class="text-2xl font-medium flex justify-center items-center">Hello from the jobs page</p>

    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li> <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per year </li>
            </a>
        @endforeach
    </ul>
</x-layout>