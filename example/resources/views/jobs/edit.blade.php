<x-layout>
    <x-slot:header>
        Edit Job
    </x-slot:header>
    <x-slot:heading>
        <p class="text-2xl font-bold text-gray-800">Edit Job: {{ $job->title }} </p>
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">

            {{-- @if ($errors->any())
            <div class="mt-5 mb-5">
                <ul>
                     @foreach ($errors->all() as $error)
                         <li class="text-red-500 italic hover:underline"> {{ $error }} </li>
                     @endforeach
                 </ul> 
            </div>
            @endif --}}

            <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ $job->title }}"
                    class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Shift Leader"
                    required
                    >
                    </div>
                    @error('title')
                        <p class="mt-2 mb-2 text-red-500 italic text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                </div>

                <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input 
                    type="text" 
                    name="salary" 
                    id="salary" 
                    value="{{ $job->salary }}"
                    class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$50,000 Per year"
                    required
                    >
                    </div>
                    @error('salary')
                        <p class="mt-2 mb-2 text-red-500 italic text-sm font-semibold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <div class="ml-10 flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">
                    Delete
                </button>
            </div>

            <div class="mr-10 space-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>

    <form method="POST" id="delete-form" action="/jobs/{{ $job->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>


</x-layout>