<x-app-layout>
<div class="container">
    <h1>Record Payment</h1>
    <form method="POST" action="{{ route('payments.store') }}">
        @csrf
        <div class="form-group">
            <label for="debt_id">Debt</label>
            <select name="debt_id" id="debt_id" class="form-control">
                @foreach($debts as $debt)
                    <option value="{{ $debt->id }}">{{ $debt->amount }} - {{ $debt->status }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" id="payment_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Record Payment</button>
    </form>
</div>
</x-app-layout>

