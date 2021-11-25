<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <h5>Weekly Reports</h5>
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Mon</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Tue</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Thus</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fri</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            </tbody>
                            <th class="px-6 py-3 bg-gray-50">
                                <span
                                    class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</span>
                            </th>
                        </table>
                    </div>
                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <h5>Hourly Reports</h5>
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">1-2
                                            pm</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">2-3
                                            pm</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">4-5
                                            pm</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">6-7
                                            pm</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">8-9
                                            pm</span>
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50">
                                        <span
                                            class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">

                            </tbody>
                            <th class="px-6 py-3 bg-gray-50">
                                <span
                                    class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</span>
                            </th>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>