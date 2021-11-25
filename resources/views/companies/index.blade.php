<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <form method="POST" action="{{ route('getReports') }}">
                            @csrf
                            <div class="row">
                                <label for="company_id"> Select Company</label>
                                <div class="flex items-center mt-4">
                                    <select name="company_id" id="company_id">
                                        @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">
                                            {{ $company->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <x-button class="ml-3">
                                        {{ __('Get Reports') }}
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>