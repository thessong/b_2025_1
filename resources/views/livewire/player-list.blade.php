<x-app-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class= "bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="w-3/4">
                            <livewire:player-manager />
                        </div>
                    </div>


                <h1 class="text-3xl font-bold mb-6">My Players</h1>

                    <div class="bg-white shadow-md rounded-lg p-6">
                        @if (session()->has('message'))
                            <div class="bg-green-500 text-white p-4 rounded mb-4">
                                {{ session('message') }}
                            </div>
                        @endif

                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 border text-gray-700 dark:text-gray-900 font-bold">First Name</th>
                        <th class="py-2 px-4 bg-gray-200 border text-gray-700 dark:text-gray-900 font-bold">Last Name</th>
                        <th class="py-2 px-4 bg-gray-200 border text-gray-700 dark:text-gray-900 font-bold">Status</th>
                        <th class="py-2 px-4 bg-gray-200 border text-gray-700 dark:text-gray-900 font-bold">Grad Year</th>
                        <th class="py-2 px-4 bg-gray-200 border text-gray-700 dark:text-gray-900 font-bold">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td class="py-2 px-4 border dark:text-gray-900 font-bold">{{ $player->first_name }}</td>
                            <td class="py-2 px-4 border dark:text-gray-900 font-bold">{{ $player->last_name }}</td>
                            <td class="py-2 px-4 border dark:text-gray-900 font-bold">{{ $player->status }}</td>
                            <td class="py-2 px-4 border dark:text-gray-900 font-bold">{{ $player->grad_year }}</td>
                            <td class="py-2 px-4 border dark:text-gray-900 font-bold">
                                <a href="{{ route('players.edit', $player->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
