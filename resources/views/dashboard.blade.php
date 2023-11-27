<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-full">
                    @if ($objects->isNotEmpty())
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead
                                    class="text-xs
                                text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Lp.
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nazwa
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Wartość
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($objects as $object)
                                        <tr class="bg-white border-b">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $loop->index + 1 }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $object->name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $object->value }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>
                            <span>Brak obiektów do wyświetlenia</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
