@extends('layouts.checkout')

@section('content')
<div class="container mx-auto px-4 py-10 max-w-lg bg-white shadow-md rounded p-6">
    <h1 class="text-3xl font-bold mb-4">Checkout</h1>

    <p class="mb-6">
        You have selected the plan: <strong>{{ $plan }}</strong>
    </p>

    <!-- Checkout form or stripe-->

    <a
        href="#"
        class="inline-block bg-indigo-600 text-white font-semibold px-4 py-2 rounded hover:bg-indigo-700">
        Proceed
    </a>
</div>
@endsection