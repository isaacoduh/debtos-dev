<x-app-layout>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <h2>Agents</h2>
                <ul class="list-group">
                    @foreach($agents as $agent)
                        <li class="list-group-item">{{ $agent->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Clients</h2>
                <ul class="list-group">
                    @foreach($clients as $client)
                        <li class="list-group-item">{{ $client->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Debts</h2>
                <ul class="list-group">
                    @foreach($debts as $debt)
                        <li class="list-group-item">{{ $debt->amount }} - {{ $debt->status }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>