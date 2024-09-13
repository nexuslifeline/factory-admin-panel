<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('employees.index') }}" class="mb-4">
                        <div class="flex items-center">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ __('Search...') }}" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <button type="submit" class="ml-2 px-4 py-2 border border-gray-500 rounded-md font-semibold text-gray-500 hover:bg-gray-100">
                                {{ __('Search') }}
                            </button>
                        </div>
                    </form>

                    <!-- Create Employee Button -->
                    <div class="mb-4">
                        <a href="{{ route('employees.create') }}" class="inline-flex items-center px-4 py-2 bg-purple-500 border border-transparent rounded-md font-semibold text-white hover:bg-purple-600">
                            {{ __('Create Employee') }}
                        </a>
                    </div>

                    <!-- Employees Table -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('First Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Last Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Factory') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Email') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Phone') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($employees as $employee)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $employee->firstname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $employee->lastname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $employee->factory->factory_name ?? 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $employee->email ?? 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $employee->phone ?? 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium border-b border-gray-300 w-24 text-center">
                                        <div x-data="{ open: false }" class="relative inline-block text-left">
                                            <button @click="open = !open" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                                                <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="6" r="1.5"/>
                                                    <circle cx="12" cy="12" r="1.5"/>
                                                    <circle cx="12" cy="18" r="1.5"/>
                                                </svg>
                                            </button>
                                            <div x-show="open" @click.outside="open = false" class="absolute z-10 right-0 mt-2 w-48 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                                <div class="p-1">
                                                    <a href="{{ route('employees.show', $employee->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('View') }}</a>
                                                    <a href="{{ route('employees.edit', $employee->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('Edit') }}</a>
                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="block w-full px-4 py-2 text-sm text-red-700 text-left hover:bg-gray-100">{{ __('Delete') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                                        {{ __('No employees found.') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Employees Pagination Links -->
                    <div class="mt-4">
                        {{ $employees->appends(['search' => request('search')])->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
