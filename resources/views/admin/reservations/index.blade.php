<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Dashboard')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservation.create') }}"
                   class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-lg">
                    New Reservation
                </a>
            </div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Table
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Guests
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{$reservation->first_name}} {{$reservation->last_name}}
                        </td>
                        <td class="py-4 px-6">
                            {{$reservation->email}}
                        </td>
                        <td class="py-4 px-6">
                            {{$reservation->res_date}}
                        </td>
                        <td class="py-4 px-6">
                            {{$reservation->table->name}}
                        </td>
                        <td class="py-4 px-6">
                            {{$reservation->guest_number}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>

