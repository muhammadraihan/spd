@extends('layouts.page')

@section('title', 'Dashboard')

@section('content')
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='fal fa-info-circle'></i> Introduction
            <small>
                A brief introduction to this {{ env('APP_NAME') }}
            </small>
        </h1>
    </div>
    <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
        <h3 class="mb-g">
            Hi {{ Auth::user()->name }},
        </h3>
        <div>
            <h3>Welcome to the heart of your website's operation, where you, our fearless Admin Officer, wield the power to
                shape online experiences! 🌐 </h3>

            <p>🌟 Unleash Your Superpowers: With the Admin Dashboard, you're not just managing a website; you're sculpting
                its destiny. From user profiles to content creation, every aspect is at your fingertips.</p>

            <p>📈 Real-Time Insights: Keep your finger on the pulse of your site's performance. Our dashboard provides you
                with real-time analytics, empowering you to make data-driven decisions and see the impact of your actions.
            </p>

            <p>🛠️ Effortless Content Control: Updating content has never been this breezy! Whether it's adding a new blog
                post or tweaking product listings, you'll do it all with ease, ensuring your site stays fresh and engaging.
            </p>

            <p>💡 Stay Secure & Vigilant: Our top-notch security tools ensure your site remains a fortress against digital
                threats. You're the guardian of the online realm, and we've got your back!</p>

            <p>Ready to dive in? Your Admin Dashboard is not just a tool; it's your gateway to website excellence. Start
                exploring and let your creativity flow as you maintain, optimize, and elevate your website to new heights!
                🌟🚀💻</p>
        </div>
        <p>
            Sincerely,<br>
            {{ env('APP_DEVELOPER') }} Team<br>
        </p>
    </div>
@endsection
