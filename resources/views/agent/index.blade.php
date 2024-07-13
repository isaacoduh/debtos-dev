<x-app-layout>
    <div class="container">
    <h1>Agent Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>My Clients</h2>
            <ul class="list-group">
                @foreach($clients as $client)
                    <li class="list-group-item">{{ $client->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>My Debts</h2>
            <ul class="list-group">
                @foreach($debts as $debt)
                    <li class="list-group-item">{{ $debt->amount }} - {{ $debt->status }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</x-app-layout>