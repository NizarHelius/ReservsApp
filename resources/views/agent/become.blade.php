@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Select Your Business Type</h2>

    <form method="POST" action="{{ route('agent.become.store') }}">
        @csrf
        <div class="mb-3">
            <label for="business_type" class="form-label">Choose a category:</label>
            <select class="form-select" id="category" name="category" required>
                <option value="">-- Select --</option>
                @foreach($categories as $category)
                <option value="{{ $category }}">{{ ucfirst(str_replace('_', ' ', $category)) }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
@endsection