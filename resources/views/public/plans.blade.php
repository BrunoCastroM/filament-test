@extends('layouts.guest')

@section('content')
    <div class="max-w-[85rem] mx-auto px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
        <div class="mb-10 lg:mb-14 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Subscription Plans</h2>
            <p class="mt-1 text-gray-600">Choose the plan that better fits your needs.</p>
        </div>

        <!-- Plans grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Card: Monthly -->
            <div class="flex flex-col h-full border-2 border-gray-200 rounded-xl p-8">
                <h4 class="text-lg font-semibold text-gray-800">Monthly</h4>

                <div class="mt-2 flex items-baseline space-x-1">
                    <span class="text-5xl font-bold text-gray-800">$4.99</span>
                    <span class="text-xl text-gray-400">/month</span>
                </div>

                <p class="mt-3 text-sm text-gray-500">Perfect for trying out our service</p>

                <ul class="mt-4 flex-1 text-sm text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Full access to all features
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Priority support
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Regular updates
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Cancel anytime
                    </li>
                </ul>

                <div class="pt-4 mt-auto">
                    <a href="{{ route('checkout', ['plan' => 'premium_monthly']) }}" class="block w-full text-center py-3 px-4 text-sm font-semibold rounded-lg bg-indigo-100 text-indigo-800 hover:bg-indigo-200">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Card: Yearly (Most Popular) -->
            <div class="flex flex-col h-full border-2 border-indigo-600 shadow-xl rounded-xl p-8">
                <div class="flex justify-between">
                    <h4 class="text-lg font-semibold text-gray-800">Yearly</h4>

                    <span class="inline-flex items-center px-2 rounded-lg text-xs uppercase font-semibold bg-indigo-100 text-indigo-800">
                        Most Popular
                    </span>
                </div>

                <div class="mt-2 flex items-baseline space-x-1">
                    <span class="text-5xl font-bold text-gray-800">$34.99</span>
                    <span class="text-xl text-gray-400">/year</span>
                </div>

                <p class="mt-3 text-sm text-gray-500">Save 30% with annual billing</p>

                <ul class="mt-4 flex-1 text-sm text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Everything in Monthly plan
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Custom integrations
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        API access
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Volume discounts
                    </li>
                </ul>

                <div class="pt-4 mt-auto">
                    <a href="{{ route('checkout', ['plan' => 'premium_yearly']) }}" class="block w-full text-center py-3 px-4 text-sm font-semibold rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- Card: Lifetime -->
            <div class="flex flex-col h-full border-2 border-gray-200 rounded-xl p-8">
                <h4 class="text-lg font-semibold text-gray-800">Lifetime</h4>

                <div class="mt-2 flex items-baseline space-x-1">
                    <span class="text-5xl font-bold text-gray-800">$174.99</span>
                    <span class="text-xl text-gray-400">/once</span>
                </div>

                <p class="mt-3 text-sm text-gray-500">Pay once, use forever</p>

                <ul class="mt-4 flex-1 text-sm text-gray-600 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Everything in Yearly plan
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Lifetime updates
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Premium support
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Early access to new features
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293A1 1 0 005.293 10.707l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"/></svg>
                        Exclusive content
                    </li>
                </ul>

                <div class="pt-4 mt-auto">
                    <a href="{{ route('checkout', ['plan' => 'premium_lifetime']) }}" class="block w-full text-center py-3 px-4 text-sm font-semibold rounded-lg bg-indigo-100 text-indigo-800 hover:bg-indigo-200">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
