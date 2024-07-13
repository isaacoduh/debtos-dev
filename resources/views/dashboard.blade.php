<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-7xl mx-auto p-4">
        <p id="paidDebts"></p>
        <p id="overdueDebts"></p>
        <p id="inProcessDebts"></p>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="card-body">
                        <h5 class="text-lg font-bold mb-2">Paid Debts</h5>
                        <p class="text-gray-700">{{ $paidDebts }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="card-body">
                        <h5 class="text-lg font-bold mb-2">Overdue Debts</h5>
                        <p class="text-gray-700">{{ $overdueDebts }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="card-body">
                        <h5 class="text-lg font-bold mb-2">In Process Debts</h5>
                        <p class="text-gray-700">{{ $inProcessDebts }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        function loadDashboardData() {
            $.ajax({
                url: '{{ route('dashboard.data') }}',
                method: 'GET',
                success: function(data) {
                    $('#paidDebts').text(data.paidDebts);
                    $('#overdueDebts').text(data.overdueDebts);
                    $('#inProcessDebts').text(data.inProcessDebts);
                }
            });
        }

        loadDashboardData();
        setInterval(loadDashboardData, 60000); // Update every minute
    });
</script>
