<x-app-layout>
    <div class="container">
    <h1>Client Dashboard</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>My Debts</h2>
            <ul class="list-group">
                @foreach($debts as $debt)
                    <li class="list-group-item">{{ $debt->amount }} - {{ $debt->status }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h2>My Payments</h2>
            <ul class="list-group">
                @foreach($payments as $payment)
                    <li class="list-group-item">{{ $payment->amount }} - {{ $payment->payment_date }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</x-app-layout>