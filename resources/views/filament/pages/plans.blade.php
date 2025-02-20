<x-filament::page>
    <div id="plans">
        <div class="plans-header">
            <h2>Subscription Plans</h2>
            <p>Choose the plan that better fits your needs.</p>
        </div>

        <!-- Plans grid -->
        <div class="plans-grid">
            {{-- Card: Monthly --}}
            <div class="plan-card plan-monthly">
                <h4>Monthly</h4>

                <div class="plan-price">
                    <span class="plan-price-value">$4.99</span>
                    <span class="plan-price-unit">/month</span>
                </div>

                <p class="plan-description">
                    Perfect for trying out our service
                </p>

                <ul class="plan-features">
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Full access to all features
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Priority support
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Regular updates
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Cancel anytime
                    </li>
                </ul>

                <div class="plan-action">
                    <a href="{{ route('checkout', ['plan' => 'premium_monthly']) }}" class="plan-button">
                        Get Started
                    </a>
                </div>
            </div>

            {{-- Card: Yearly --}}
            <div class="plan-card plan-yearly">
                <div class="plan-card-header">
                    <h4>Yearly</h4>
                    <span class="plan-badge">Most popular</span>
                </div>

                <div class="plan-price">
                    <span class="plan-price-value">$34.99</span>
                    <span class="plan-price-unit">/year</span>
                </div>

                <p class="plan-description">
                    Save 30% with annual billing
                </p>

                <ul class="plan-features">
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Everything in Monthly plan
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Advanced analytics
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Custom integrations
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        API access
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Volume discounts
                    </li>
                </ul>

                <div class="plan-action">
                    <a href="{{ route('checkout', ['plan' => 'premium_yearly']) }}" class="plan-button">
                        Get Started
                    </a>
                </div>
            </div>

            {{-- Card: Lifetime --}}
            <div class="plan-card plan-lifetime">
                <h4>Lifetime</h4>

                <div class="plan-price">
                    <span class="plan-price-value">$174.99</span>
                    <span class="plan-price-unit">/once</span>
                </div>

                <p class="plan-description">
                    Pay once, use forever
                </p>

                <ul class="plan-features">
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Everything in Yearly plan
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Lifetime updates
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Premium support
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Early access to new features
                    </li>
                    <li>
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path d="M16.707 5.293a1 1 0 00-1.414 0L9 
                                     11.586 6.707 9.293A1 1 0 005.293 
                                     10.707l3 3a1 1 0 001.414 0l7-7a1 
                                     1 0 000-1.414z" />
                        </svg>
                        Exclusive content
                    </li>
                </ul>

                <div class="plan-action">
                    <a href="{{ route('checkout', ['plan' => 'premium_lifetime']) }}" class="plan-button">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-filament::page>