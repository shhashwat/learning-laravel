<x-layout>
    <x-slot:header>
        Jobs Page
    </x-slot:header>
    <x-slot:heading>
        <p class="text-2xl font-bold text-gray-800">Jobs Page</p>
    </x-slot:heading>
    <p  class="text-2xl font-medium flex justify-center items-center">Hello from the jobs page</p>
    <br>

    <div class="space-y-2">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}</strong>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>