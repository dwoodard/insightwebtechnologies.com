<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';

const scrollProgress = ref(0);
const formSubmitted = ref(false);

onMounted(() => {
    window.addEventListener('scroll', () => {
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = window.scrollY;
        scrollProgress.value = scrollHeight > 0 ? (scrolled / scrollHeight) * 100 : 0;
    });

    // Reveal on scroll animation
    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});

const handleFormSubmit = (e: Event) => {
    e.preventDefault();
    formSubmitted.value = true;
    setTimeout(() => {
        formSubmitted.value = false;
    }, 3000);
};
</script>

<template>
    <PublicLayout title="Welcome - Insight Web Technologies">
        <Head>
            <meta name="description" content="Give your business website a 24/7 AI assistant that answers customer questions, books appointments, and follows up on leads automatically." />
        </Head>

        <!-- Scroll Progress Bar -->
        <div
            class="fixed top-0 left-0 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 z-50 transition-all duration-100"
            :style="{ width: scrollProgress + '%' }"
        ></div>

        <!-- HERO -->
        <section class="relative overflow-hidden pt-24 pb-16 lg:pt-32 lg:pb-24" style="background: linear-gradient(135deg, #0D1F4E 0%, #1a3a70 100%);">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div
                    class="absolute w-96 h-96 rounded-full pointer-events-none"
                    style="
                        background: radial-gradient(circle, rgba(59, 130, 246, 0.14) 0%, transparent 70%);
                        top: -150px;
                        right: -100px;
                    "
                ></div>
                <div
                    class="absolute w-80 h-80 rounded-full pointer-events-none"
                    style="
                        background: radial-gradient(circle, rgba(8, 145, 178, 0.09) 0%, transparent 70%);
                        bottom: -100px;
                        left: -50px;
                    "
                ></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-8">
                <!-- Live Badge -->
                <div class="mb-8 reveal">
                    <div class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-5 py-2">
                        <span class="flex items-center gap-2 text-white text-sm font-semibold">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                            Live demos available
                        </span>
                        <span class="text-white/30">|</span>
                        <a href="tel:+17754427070" class="text-white/80 hover:text-white text-sm font-semibold transition-colors flex items-center gap-1.5">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                />
                            </svg>
                            +1 (775) 442-7070
                        </a>
                    </div>
                </div>

                <!-- Hero Content -->
                <div class="grid lg:grid-cols-2 gap-14 items-center">
                    <div>
                        <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-5 reveal">AI Chat Assistant for Local Businesses</div>
                        <h1 class="text-white text-4xl lg:text-5xl xl:text-6xl leading-[1.1] mb-6 font-bold reveal">
                            Your website,<br />
                            <span class="text-blue-400">always working</span><br />
                            for you.
                        </h1>
                        <p class="text-white/75 text-lg leading-relaxed max-w-lg mb-8 reveal">
                            Add an AI assistant to your website that answers customer questions, books appointments, and captures leads — around the clock, without any extra effort from you.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 mb-10 reveal">
                            <a href="#contact" class="inline-flex items-center justify-center gap-2 bg-white text-blue-900 px-7 py-3.5 text-base font-bold rounded-lg hover:bg-gray-100 transition-colors">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                                Book a Free Strategy Call
                            </a>
                            <a
                                href="tel:+17754427070"
                                class="inline-flex items-center justify-center gap-2 border-2 border-white/40 text-white px-7 py-3.5 text-base font-bold rounded-lg hover:bg-white/10 transition-colors"
                            >
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                    />
                                </svg>
                                Hear a Live Demo
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-5 reveal">
                            <div class="flex items-center gap-2 text-white/60 text-sm">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#10B981">
                                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                </svg>
                                5-star rated
                            </div>
                            <span class="text-white/20 hidden sm:block">|</span>
                            <div class="flex items-center gap-2 text-white/60 text-sm">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#60A5FA" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                Active 24/7
                            </div>
                            <span class="text-white/20 hidden sm:block">|</span>
                            <div class="flex items-center gap-2 text-white/60 text-sm">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#60A5FA" stroke-width="2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                </svg>
                                No long-term contracts
                            </div>
                        </div>
                    </div>

                    <!-- Chat Card Preview -->
                    <div class="hidden lg:block reveal">
                        <div class="relative max-w-sm ml-auto">
                            <div class="bg-white rounded-2xl p-6 relative shadow-2xl">
                                <div class="flex items-center gap-3 mb-4 pb-4 border-b border-gray-200">
                                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center shrink-0">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-blue-900 text-sm">Insight Assistant</div>
                                        <div class="flex items-center gap-1.5 mt-0.5">
                                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                                            <span class="text-xs text-gray-500">Online · answers in seconds</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-3 mb-4">
                                    <div class="bg-blue-100 rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-gray-700 max-w-[88%]">Hi! 👋 What can I help you with today?</div>
                                    <div class="bg-blue-900 rounded-2xl rounded-tr-sm px-4 py-3 text-sm text-white max-w-[88%] ml-auto">Do you have any openings this week?</div>
                                    <div class="bg-blue-100 rounded-2xl rounded-tl-sm px-4 py-3 text-sm text-gray-700 max-w-[88%]">Yes! I can book you in. What day works best — Wednesday or Thursday?</div>
                                    <div class="flex gap-1 px-3 py-2.5 bg-gray-100 rounded-2xl max-w-14">
                                        <div class="w-1.5 h-1.5 rounded-full bg-gray-400 animate-bounce" style="animation-delay: 0s"></div>
                                        <div class="w-1.5 h-1.5 rounded-full bg-gray-400 animate-bounce" style="animation-delay: 0.15s"></div>
                                        <div class="w-1.5 h-1.5 rounded-full bg-gray-400 animate-bounce" style="animation-delay: 0.3s"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 pt-4 border-t border-gray-200">
                                    <div class="text-center">
                                        <div class="font-extrabold text-blue-600 text-lg">24/7</div>
                                        <div class="text-xs text-gray-500">Available</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="font-extrabold text-blue-600 text-lg">&lt;5s</div>
                                        <div class="text-xs text-gray-500">Response</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="font-extrabold text-blue-600 text-lg">∞</div>
                                        <div class="text-xs text-gray-500">Chats at once</div>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 bg-green-500 text-white rounded-xl px-3 py-2 text-xs font-bold shadow-lg">Never miss a lead</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TICKER -->
        <div class="overflow-hidden border-b border-gray-200 bg-white py-4">
            <div class="flex animate-scroll gap-10 px-8">
                <div class="flex items-center gap-10 text-xs font-bold text-gray-500 tracking-widest uppercase shrink-0">
                    <span class="text-blue-600">✦</span><span>AI Chat Assistant</span>
                    <span class="text-blue-600">✦</span><span>Appointment Booking</span>
                    <span class="text-blue-600">✦</span><span>Lead Capture</span>
                    <span class="text-blue-600">✦</span><span>SMS Follow-Up</span>
                    <span class="text-blue-600">✦</span><span>Missed Call Text-Back</span>
                    <span class="text-blue-600">✦</span><span>CRM Contact Creation</span>
                    <span class="text-blue-600">✦</span><span>Review Requests</span>
                    <span class="text-blue-600">✦</span><span>FAQ Automation</span>
                    <span class="text-blue-600">✦</span><span>Web Design</span>
                    <span class="text-blue-600">✦</span><span>Monthly Monitoring</span>
                </div>
                <div class="flex items-center gap-10 text-xs font-bold text-gray-500 tracking-widest uppercase shrink-0" aria-hidden="true">
                    <span class="text-blue-600">✦</span><span>AI Chat Assistant</span>
                    <span class="text-blue-600">✦</span><span>Appointment Booking</span>
                    <span class="text-blue-600">✦</span><span>Lead Capture</span>
                    <span class="text-blue-600">✦</span><span>SMS Follow-Up</span>
                    <span class="text-blue-600">✦</span><span>Missed Call Text-Back</span>
                    <span class="text-blue-600">✦</span><span>CRM Contact Creation</span>
                    <span class="text-blue-600">✦</span><span>Review Requests</span>
                    <span class="text-blue-600">✦</span><span>FAQ Automation</span>
                    <span class="text-blue-600">✦</span><span>Web Design</span>
                    <span class="text-blue-600">✦</span><span>Monthly Monitoring</span>
                </div>
            </div>
        </div>

        <!-- VALUE PROPOSITION -->
        <section class="py-24 px-6 lg:px-12 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="reveal">
                        <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-5">Sound familiar?</div>
                        <h2 class="text-3xl lg:text-4xl text-blue-900 leading-tight mb-5 font-bold">
                            Your website gets visitors.<br />
                            <span class="text-blue-600">But are you capturing them?</span>
                        </h2>
                        <p class="text-gray-700 text-lg leading-relaxed mb-5">
                            Most small business websites are passive — visitors come, look around, and leave without ever connecting. And when someone calls after hours? It often goes straight to voicemail.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            We set up an AI chat assistant on your website that's ready to answer questions, book appointments, and collect contact info — even at 11pm on a Sunday.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 reveal">
                        <div class="border border-gray-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-lg transition-all">
                            <div class="text-3xl font-extrabold text-blue-600 mb-2">78%</div>
                            <div class="text-sm text-gray-700 leading-snug">of customers choose the <strong>first business that responds</strong></div>
                        </div>
                        <div class="border border-gray-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-lg transition-all mt-6">
                            <div class="text-3xl font-extrabold text-blue-600 mb-2">60%</div>
                            <div class="text-sm text-gray-700 leading-snug">of calls happen <strong>outside business hours</strong> — and go unanswered</div>
                        </div>
                        <div class="border border-gray-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-lg transition-all">
                            <div class="text-3xl font-extrabold text-blue-600 mb-2">3×</div>
                            <div class="text-sm text-gray-700 leading-snug">more bookings with <strong>automated follow-up</strong> after first contact</div>
                        </div>
                        <div class="border border-gray-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-lg transition-all mt-6">
                            <div class="text-3xl font-extrabold text-blue-600 mb-2">24/7</div>
                            <div class="text-sm text-gray-700 leading-snug">your AI assistant is always on, <strong>ready to help any visitor</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW IT WORKS -->
        <section id="how-it-works" class="py-24 px-6 lg:px-12 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-xl mx-auto mb-16 reveal">
                    <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-4">Simple Setup</div>
                    <h2 class="text-3xl lg:text-4xl text-blue-900 leading-tight mb-4 font-bold">
                        From sign-up to live chatbot<br />
                        in just a few steps
                    </h2>
                    <p class="text-gray-600 text-lg">We handle the setup — you just show up for a quick call and we take care of the rest.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center reveal">
                        <div class="text-4xl font-black text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-200 mb-4 stroke-2">01</div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 border border-blue-300 flex items-center justify-center mx-auto mb-4">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-blue-900 text-base mb-2">Book a Free Call</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">We'll learn about your business, your most common questions, and what you want the chatbot to handle.</p>
                    </div>
                    <div class="text-center reveal">
                        <div class="text-4xl font-black text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-200 mb-4">02</div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 border border-blue-300 flex items-center justify-center mx-auto mb-4">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                <path d="M12 20h9" />
                                <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-blue-900 text-base mb-2">We Build & Train It</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">We set up your AI assistant, train it on your FAQs, connect your calendar, and configure it to match your business.</p>
                    </div>
                    <div class="text-center reveal">
                        <div class="text-4xl font-black text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-200 mb-4">03</div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 border border-blue-300 flex items-center justify-center mx-auto mb-4">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-blue-900 text-base mb-2">You Go Live</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">We add the chatbot to your website and run a test together. Once you're happy, it's on — ready to help your customers.</p>
                    </div>
                    <div class="text-center reveal">
                        <div class="text-4xl font-black text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-200 mb-4">04</div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 border border-blue-300 flex items-center justify-center mx-auto mb-4">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                <path d="M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-blue-900 text-base mb-2">We Keep It Running</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Every month we check in, monitor performance, and make updates so your assistant stays accurate and useful.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGES -->
        <section id="packages" class="py-24 px-6 lg:px-12 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-xl mx-auto mb-16 reveal">
                    <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-4">Simple, Honest Pricing</div>
                    <h2 class="text-3xl lg:text-4xl text-blue-900 leading-tight mb-4 font-bold">Choose the plan that fits<br />where your business is today</h2>
                    <p class="text-gray-600 text-lg">Monthly subscriptions. No contracts. Cancel anytime.</p>
                </div>

                <div class="grid lg:grid-cols-3 gap-6 items-start">
                    <!-- Starter Plan -->
                    <div class="border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-all reveal">
                        <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-4">Starter</div>
                        <div class="flex items-end gap-2 mb-2">
                            <span class="font-extrabold text-4xl text-blue-900">$297</span>
                            <span class="text-gray-600 pb-1.5">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1 font-semibold">Best for:</p>
                        <p class="text-sm text-gray-700 mb-6 leading-relaxed">Small businesses that want to capture website leads and reduce time spent answering common questions.</p>
                        <div class="border-t border-gray-200 mb-6"></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">AI chat assistant on your website</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Answers common customer questions</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Appointment booking assistance</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Basic FAQ knowledge base setup</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Lead capture from website chats</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">CRM contact creation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Basic reporting dashboard</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Monthly AI monitoring</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full border-2 border-blue-600 text-blue-600 py-3 px-4 rounded-xl font-bold text-center hover:bg-blue-50 transition-colors">Get Started</a>
                    </div>

                    <!-- Growth Plan (Featured) -->
                    <div class="border-2 border-blue-600 rounded-2xl p-8 relative reveal" style="background: linear-gradient(135deg, #0D1F4E 0%, #1a3a70 100%);">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white rounded-full px-5 py-1.5 text-xs font-bold shadow-lg">Most Popular</div>
                        <div class="inline-block bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 mt-2">Growth</div>
                        <div class="flex items-end gap-2 mb-2">
                            <span class="font-extrabold text-4xl text-white">$597</span>
                            <span class="text-white/60 pb-1.5">/month</span>
                        </div>
                        <p class="text-sm text-white/60 mb-1 font-semibold">Best for:</p>
                        <p class="text-sm text-white/80 mb-6 leading-relaxed">Businesses that receive frequent calls or texts and want AI to handle lead conversations automatically.</p>
                        <div class="border-t border-white/20 mb-6"></div>
                        <ul class="mb-8 space-y-3 text-white/80">
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Everything in Starter</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">AI SMS conversation responses</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Automated lead follow-up sequences</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Missed call text-back automation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Pipeline tracking for leads & appointments</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Review request automation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Expanded reporting dashboard</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-400 font-bold mt-0.5">✓</span>
                                <span class="text-sm">Monthly monitoring & optimization</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full bg-white text-blue-900 py-3 px-4 rounded-xl font-bold text-center hover:bg-gray-100 transition-colors">Get Started</a>
                    </div>

                    <!-- Pro Plan -->
                    <div class="border border-gray-200 rounded-2xl p-8 hover:shadow-lg transition-all reveal">
                        <div class="inline-block bg-cyan-100 text-cyan-600 text-xs font-bold px-3 py-1 rounded-full mb-4">Pro</div>
                        <div class="flex items-end gap-2 mb-2">
                            <span class="font-extrabold text-4xl text-blue-900">$1,197</span>
                            <span class="text-gray-600 pb-1.5">/month</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-1 font-semibold">Best for:</p>
                        <p class="text-sm text-gray-700 mb-6 leading-relaxed">High-volume businesses that want a fully automated system to capture leads, schedule appointments, and follow up with customers.</p>
                        <div class="border-t border-gray-200 mb-6"></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Everything in Growth</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Full AI receptionist conversation handling</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Advanced workflow automations</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Multi-step lead nurturing campaigns</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">AI knowledge base expansion</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Advanced reporting & performance insights</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Priority monitoring & support</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-green-600 font-bold mt-0.5">✓</span>
                                <span class="text-gray-700 text-sm">Automation optimization & updates</span>
                            </li>
                        </ul>
                        <a href="#contact" class="block w-full bg-blue-900 text-white py-3 px-4 rounded-xl font-bold text-center hover:bg-blue-800 transition-colors">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="py-24 px-6 lg:px-12 bg-gray-50">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 reveal">
                    <div class="inline-block bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full mb-4">Get Started</div>
                    <h2 class="text-3xl lg:text-4xl text-blue-900 leading-tight mb-4 font-bold">Ready to capture more leads?</h2>
                    <p class="text-gray-600 text-lg">Let's set up your AI assistant and get you answers and bookings, 24/7.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-10">
                    <!-- Contact Info -->
                    <div class="space-y-6 reveal">
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-xl bg-blue-100 border border-blue-300 flex items-center justify-center shrink-0">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                    <path
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 font-bold uppercase tracking-wide mb-0.5">Phone</div>
                                <a href="tel:+17754427070" class="font-bold text-blue-900 hover:text-blue-600 transition-colors">+1 (775) 442-7070</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-xl bg-blue-100 border border-blue-300 flex items-center justify-center shrink-0">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 font-bold uppercase tracking-wide mb-0.5">Email</div>
                                <a href="mailto:hello@insightwebtechnologies.com" class="font-bold text-blue-900 hover:text-blue-600 transition-colors">hello@insightwebtechnologies.com</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-xl bg-blue-100 border border-blue-300 flex items-center justify-center shrink-0">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.8">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 font-bold uppercase tracking-wide mb-0.5">Schedule</div>
                                <a href="#" class="font-bold text-blue-900 hover:text-blue-600 transition-colors">Book a free strategy call →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="border border-gray-200 rounded-2xl p-8 reveal">
                        <form v-if="!formSubmitted" @submit="handleFormSubmit" class="space-y-5">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">First Name</label>
                                    <input type="text" placeholder="John" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" required />
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">Last Name</label>
                                    <input type="text" placeholder="Smith" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" required />
                                </div>
                            </div>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">Business Email</label>
                                <input type="email" placeholder="john@yourbusiness.com" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" required />
                            </div>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">Phone Number</label>
                                <input type="tel" placeholder="+1 (775) 000-0000" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" />
                            </div>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">I'm interested in…</label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option>Starter Plan — AI Chat Assistant ($297/mo)</option>
                                    <option>Growth Plan — AI + SMS Automation ($597/mo)</option>
                                    <option>Pro Plan — Full Automation System ($1,197/mo)</option>
                                    <option>Web Design</option>
                                    <option>Brand Design</option>
                                    <option>AI Consulting</option>
                                    <option>Not sure — help me decide</option>
                                </select>
                            </div>
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wide mb-2 block">Tell us about your business</label>
                                <textarea rows="4" placeholder="What kind of business do you run? What questions do your customers ask most?" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none transition-all resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl text-sm font-bold hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <line x1="22" y1="2" x2="11" y2="13" />
                                    <polygon points="22 2 15 22 11 13 2 9 22 2" />
                                </svg>
                                Send Message
                            </button>
                        </form>

                        <!-- Success Message -->
                        <div v-else class="text-center py-8">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 bg-green-100 border-2 border-green-300">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-blue-900 text-xl mb-2">Message Sent!</h3>
                            <p class="text-gray-600 text-sm">We'll be in touch within one business day. You can also <a href="tel:+17754427070" class="text-blue-600 font-semibold hover:underline">call us</a> for a same-day demo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>

<style scoped>
.reveal {
    opacity: 0;
    transform: translateY(22px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-scroll {
    animation: scroll 28s linear infinite;
}
</style>
