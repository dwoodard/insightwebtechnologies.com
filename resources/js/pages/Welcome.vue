<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import PublicLayout from '@/layouts/PublicLayout.vue';

const scrollProgress = ref(0);
const formSubmitted = ref(false);

onMounted(() => {
    window.addEventListener('scroll', () => {
        const scrollHeight =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        const scrolled = window.scrollY;
        scrollProgress.value =
            scrollHeight > 0 ? (scrolled / scrollHeight) * 100 : 0;
    });

    // Reveal on scroll animation
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -40px 0px' },
    );
    document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
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
            <meta
                name="description"
                content="Give your business website a 24/7 AI assistant that answers customer questions, books appointments, and follows up on leads automatically."
            />
        </Head>

        <!-- Scroll Progress Bar -->
        <div
            class="fixed top-0 left-0 z-50 h-1 bg-gradient-to-r from-blue-600 to-cyan-600 transition-all duration-100"
            :style="{ width: scrollProgress + '%' }"
        ></div>

        <!-- HERO -->
        <section
            class="relative overflow-hidden pt-24 pb-16 lg:pt-32 lg:pb-24"
            style="
                background: linear-gradient(135deg, #0d1f4e 0%, #1a3a70 100%);
            "
        >
            <div class="pointer-events-none absolute inset-0 overflow-hidden">
                <div
                    class="pointer-events-none absolute h-96 w-96 rounded-full"
                    style="
                        background: radial-gradient(
                            circle,
                            rgba(59, 130, 246, 0.14) 0%,
                            transparent 70%
                        );
                        top: -150px;
                        right: -100px;
                    "
                ></div>
                <div
                    class="pointer-events-none absolute h-80 w-80 rounded-full"
                    style="
                        background: radial-gradient(
                            circle,
                            rgba(8, 145, 178, 0.09) 0%,
                            transparent 70%
                        );
                        bottom: -100px;
                        left: -50px;
                    "
                ></div>
            </div>

            <div class="relative z-10 mx-auto max-w-7xl px-6 py-8 lg:px-12">
                <!-- Live Badge -->
                <div class="reveal mb-8">
                    <div
                        class="inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-5 py-2 backdrop-blur-sm"
                    >
                        <span
                            class="flex items-center gap-2 text-sm font-semibold text-white"
                        >
                            <span
                                class="h-2 w-2 animate-pulse rounded-full bg-green-500"
                            ></span>
                            Live demos available
                        </span>
                        <span class="text-white/30">|</span>
                        <a
                            href="tel:+17754427070"
                            class="flex items-center gap-1.5 text-sm font-semibold text-white/80 transition-colors hover:text-white"
                        >
                            <svg
                                width="12"
                                height="12"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                />
                            </svg>
                            +1 (775) 442-7070
                        </a>
                    </div>
                </div>

                <!-- Hero Content -->
                <div class="grid items-center gap-14 lg:grid-cols-2">
                    <div>
                        <div
                            class="reveal mb-5 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                        >
                            AI Chat Assistant for Local Businesses
                        </div>
                        <h1
                            class="reveal mb-6 text-4xl leading-[1.1] font-bold text-white lg:text-5xl xl:text-6xl"
                        >
                            Your website,<br />
                            <span class="text-blue-400">always working</span
                            ><br />
                            for you.
                        </h1>
                        <p
                            class="reveal mb-8 max-w-lg text-lg leading-relaxed text-white/75"
                        >
                            Add an AI assistant to your website that answers
                            customer questions, books appointments, and captures
                            leads — around the clock, without any extra effort
                            from you.
                        </p>
                        <div
                            class="reveal mb-10 flex flex-col gap-3 sm:flex-row"
                        >
                            <a
                                href="#contact"
                                class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-7 py-3.5 text-base font-bold text-blue-900 transition-colors hover:bg-gray-100"
                            >
                                <svg
                                    width="15"
                                    height="15"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                >
                                    <rect
                                        x="3"
                                        y="4"
                                        width="18"
                                        height="18"
                                        rx="2"
                                    />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                                Book a Free Strategy Call
                            </a>
                            <a
                                href="tel:+17754427070"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/40 px-7 py-3.5 text-base font-bold text-white transition-colors hover:bg-white/10"
                            >
                                <svg
                                    width="15"
                                    height="15"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                >
                                    <path
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                    />
                                </svg>
                                Hear a Live Demo
                            </a>
                        </div>
                        <div class="reveal flex flex-wrap gap-5">
                            <div
                                class="flex items-center gap-2 text-sm text-white/60"
                            >
                                <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="#10B981"
                                >
                                    <path
                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                    />
                                </svg>
                                5-star rated
                            </div>
                            <span class="hidden text-white/20 sm:block">|</span>
                            <div
                                class="flex items-center gap-2 text-sm text-white/60"
                            >
                                <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#60A5FA"
                                    stroke-width="2"
                                >
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                Active 24/7
                            </div>
                            <span class="hidden text-white/20 sm:block">|</span>
                            <div
                                class="flex items-center gap-2 text-sm text-white/60"
                            >
                                <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#60A5FA"
                                    stroke-width="2"
                                >
                                    <path
                                        d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"
                                    />
                                </svg>
                                No long-term contracts
                            </div>
                        </div>
                    </div>

                    <!-- Chat Card Preview -->
                    <div class="reveal hidden lg:block">
                        <div class="relative ml-auto max-w-sm">
                            <div
                                class="relative rounded-2xl bg-white p-6 shadow-2xl"
                            >
                                <div
                                    class="mb-4 flex items-center gap-3 border-b border-gray-200 pb-4"
                                >
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-600"
                                    >
                                        <svg
                                            width="17"
                                            height="17"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="white"
                                            stroke-width="2.5"
                                        >
                                            <path
                                                d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"
                                            />
                                        </svg>
                                    </div>
                                    <div>
                                        <div
                                            class="text-sm font-bold text-blue-900"
                                        >
                                            Insight Assistant
                                        </div>
                                        <div
                                            class="mt-0.5 flex items-center gap-1.5"
                                        >
                                            <div
                                                class="h-2 w-2 animate-pulse rounded-full bg-green-500"
                                            ></div>
                                            <span class="text-xs text-gray-500"
                                                >Online · answers in
                                                seconds</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 space-y-3">
                                    <div
                                        class="max-w-[88%] rounded-2xl rounded-tl-sm bg-blue-100 px-4 py-3 text-sm text-gray-700"
                                    >
                                        Hi! 👋 What can I help you with today?
                                    </div>
                                    <div
                                        class="ml-auto max-w-[88%] rounded-2xl rounded-tr-sm bg-blue-900 px-4 py-3 text-sm text-white"
                                    >
                                        Do you have any openings this week?
                                    </div>
                                    <div
                                        class="max-w-[88%] rounded-2xl rounded-tl-sm bg-blue-100 px-4 py-3 text-sm text-gray-700"
                                    >
                                        Yes! I can book you in. What day works
                                        best — Wednesday or Thursday?
                                    </div>
                                    <div
                                        class="flex max-w-14 gap-1 rounded-2xl bg-gray-100 px-3 py-2.5"
                                    >
                                        <div
                                            class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400"
                                            style="animation-delay: 0s"
                                        ></div>
                                        <div
                                            class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400"
                                            style="animation-delay: 0.15s"
                                        ></div>
                                        <div
                                            class="h-1.5 w-1.5 animate-bounce rounded-full bg-gray-400"
                                            style="animation-delay: 0.3s"
                                        ></div>
                                    </div>
                                </div>
                                <div
                                    class="grid grid-cols-3 gap-2 border-t border-gray-200 pt-4"
                                >
                                    <div class="text-center">
                                        <div
                                            class="text-lg font-extrabold text-blue-600"
                                        >
                                            24/7
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            Available
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="text-lg font-extrabold text-blue-600"
                                        >
                                            &lt;5s
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            Response
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="text-lg font-extrabold text-blue-600"
                                        >
                                            ∞
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            Chats at once
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -top-4 -right-4 rounded-xl bg-green-500 px-3 py-2 text-xs font-bold text-white shadow-lg"
                            >
                                Never miss a lead
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TICKER -->
        <div class="overflow-hidden border-b border-gray-200 bg-white py-4">
            <div class="animate-scroll flex gap-10 px-8">
                <div
                    class="flex shrink-0 items-center gap-10 text-xs font-bold tracking-widest text-gray-500 uppercase"
                >
                    <span class="text-blue-600">✦</span
                    ><span>AI Chat Assistant</span>
                    <span class="text-blue-600">✦</span
                    ><span>Appointment Booking</span>
                    <span class="text-blue-600">✦</span
                    ><span>Lead Capture</span>
                    <span class="text-blue-600">✦</span
                    ><span>SMS Follow-Up</span>
                    <span class="text-blue-600">✦</span
                    ><span>Missed Call Text-Back</span>
                    <span class="text-blue-600">✦</span
                    ><span>CRM Contact Creation</span>
                    <span class="text-blue-600">✦</span
                    ><span>Review Requests</span>
                    <span class="text-blue-600">✦</span
                    ><span>FAQ Automation</span>
                    <span class="text-blue-600">✦</span><span>Web Design</span>
                    <span class="text-blue-600">✦</span
                    ><span>Monthly Monitoring</span>
                </div>
                <div
                    class="flex shrink-0 items-center gap-10 text-xs font-bold tracking-widest text-gray-500 uppercase"
                    aria-hidden="true"
                >
                    <span class="text-blue-600">✦</span
                    ><span>AI Chat Assistant</span>
                    <span class="text-blue-600">✦</span
                    ><span>Appointment Booking</span>
                    <span class="text-blue-600">✦</span
                    ><span>Lead Capture</span>
                    <span class="text-blue-600">✦</span
                    ><span>SMS Follow-Up</span>
                    <span class="text-blue-600">✦</span
                    ><span>Missed Call Text-Back</span>
                    <span class="text-blue-600">✦</span
                    ><span>CRM Contact Creation</span>
                    <span class="text-blue-600">✦</span
                    ><span>Review Requests</span>
                    <span class="text-blue-600">✦</span
                    ><span>FAQ Automation</span>
                    <span class="text-blue-600">✦</span><span>Web Design</span>
                    <span class="text-blue-600">✦</span
                    ><span>Monthly Monitoring</span>
                </div>
            </div>
        </div>

        <!-- VALUE PROPOSITION -->
        <section class="bg-white px-6 py-24 lg:px-12">
            <div class="mx-auto max-w-7xl">
                <div class="grid items-center gap-16 lg:grid-cols-2">
                    <div class="reveal">
                        <div
                            class="mb-5 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                        >
                            Sound familiar?
                        </div>
                        <h2
                            class="mb-5 text-3xl leading-tight font-bold text-blue-900 lg:text-4xl"
                        >
                            Your website gets visitors.<br />
                            <span class="text-blue-600"
                                >But are you capturing them?</span
                            >
                        </h2>
                        <p class="mb-5 text-lg leading-relaxed text-gray-700">
                            Most small business websites are passive — visitors
                            come, look around, and leave without ever
                            connecting. And when someone calls after hours? It
                            often goes straight to voicemail.
                        </p>
                        <p class="leading-relaxed text-gray-600">
                            We set up an AI chat assistant on your website
                            that's ready to answer questions, book appointments,
                            and collect contact info — even at 11pm on a Sunday.
                        </p>
                    </div>
                    <div class="reveal grid grid-cols-2 gap-4">
                        <div
                            class="rounded-2xl border border-gray-200 p-6 transition-all hover:border-blue-400 hover:shadow-lg"
                        >
                            <div
                                class="mb-2 text-3xl font-extrabold text-blue-600"
                            >
                                78%
                            </div>
                            <div class="text-sm leading-snug text-gray-700">
                                of customers choose the
                                <strong>first business that responds</strong>
                            </div>
                        </div>
                        <div
                            class="mt-6 rounded-2xl border border-gray-200 p-6 transition-all hover:border-blue-400 hover:shadow-lg"
                        >
                            <div
                                class="mb-2 text-3xl font-extrabold text-blue-600"
                            >
                                60%
                            </div>
                            <div class="text-sm leading-snug text-gray-700">
                                of calls happen
                                <strong>outside business hours</strong> — and go
                                unanswered
                            </div>
                        </div>
                        <div
                            class="rounded-2xl border border-gray-200 p-6 transition-all hover:border-blue-400 hover:shadow-lg"
                        >
                            <div
                                class="mb-2 text-3xl font-extrabold text-blue-600"
                            >
                                3×
                            </div>
                            <div class="text-sm leading-snug text-gray-700">
                                more bookings with
                                <strong>automated follow-up</strong> after first
                                contact
                            </div>
                        </div>
                        <div
                            class="mt-6 rounded-2xl border border-gray-200 p-6 transition-all hover:border-blue-400 hover:shadow-lg"
                        >
                            <div
                                class="mb-2 text-3xl font-extrabold text-blue-600"
                            >
                                24/7
                            </div>
                            <div class="text-sm leading-snug text-gray-700">
                                your AI assistant is always on,
                                <strong>ready to help any visitor</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW IT WORKS -->
        <section id="how-it-works" class="bg-gray-50 px-6 py-24 lg:px-12">
            <div class="mx-auto max-w-7xl">
                <div class="reveal mx-auto mb-16 max-w-xl text-center">
                    <div
                        class="mb-4 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                    >
                        Simple Setup
                    </div>
                    <h2
                        class="mb-4 text-3xl leading-tight font-bold text-blue-900 lg:text-4xl"
                    >
                        From sign-up to live chatbot<br />
                        in just a few steps
                    </h2>
                    <p class="text-lg text-gray-600">
                        We handle the setup — you just show up for a quick call
                        and we take care of the rest.
                    </p>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <div class="reveal text-center">
                        <div
                            class="mb-4 bg-linear-to-r from-blue-400 to-blue-200 bg-clip-text stroke-2 text-4xl font-black text-transparent"
                        >
                            01
                        </div>
                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl border border-blue-300 bg-blue-100"
                        >
                            <svg
                                width="22"
                                height="22"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#2563EB"
                                stroke-width="1.8"
                            >
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="18"
                                    rx="2"
                                />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-blue-900">
                            Book a Free Call
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-600">
                            We'll learn about your business, your most common
                            questions, and what you want the chatbot to handle.
                        </p>
                    </div>
                    <div class="reveal text-center">
                        <div
                            class="mb-4 bg-linear-to-r from-blue-400 to-blue-200 bg-clip-text text-4xl font-black text-transparent"
                        >
                            02
                        </div>
                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl border border-blue-300 bg-blue-100"
                        >
                            <svg
                                width="22"
                                height="22"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#2563EB"
                                stroke-width="1.8"
                            >
                                <path d="M12 20h9" />
                                <path
                                    d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"
                                />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-blue-900">
                            We Build & Train It
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-600">
                            We set up your AI assistant, train it on your FAQs,
                            connect your calendar, and configure it to match
                            your business.
                        </p>
                    </div>
                    <div class="reveal text-center">
                        <div
                            class="mb-4 bg-linear-to-r from-blue-400 to-blue-200 bg-clip-text text-4xl font-black text-transparent"
                        >
                            03
                        </div>
                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl border border-blue-300 bg-blue-100"
                        >
                            <svg
                                width="22"
                                height="22"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#2563EB"
                                stroke-width="1.8"
                            >
                                <polyline
                                    points="22 12 18 12 15 21 9 3 6 12 2 12"
                                />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-blue-900">
                            You Go Live
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-600">
                            We add the chatbot to your website and run a test
                            together. Once you're happy, it's on — ready to help
                            your customers.
                        </p>
                    </div>
                    <div class="reveal text-center">
                        <div
                            class="mb-4 bg-linear-to-r from-blue-400 to-blue-200 bg-clip-text text-4xl font-black text-transparent"
                        >
                            04
                        </div>
                        <div
                            class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl border border-blue-300 bg-blue-100"
                        >
                            <svg
                                width="22"
                                height="22"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#2563EB"
                                stroke-width="1.8"
                            >
                                <path
                                    d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"
                                />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                <path d="M16 3.13a4 4 0 010 7.75" />
                            </svg>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-blue-900">
                            We Keep It Running
                        </h3>
                        <p class="text-sm leading-relaxed text-gray-600">
                            Every month we check in, monitor performance, and
                            make updates so your assistant stays accurate and
                            useful.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGES -->
        <section id="packages" class="bg-white px-6 py-24 lg:px-12">
            <div class="mx-auto max-w-7xl">
                <div class="reveal mx-auto mb-16 max-w-xl text-center">
                    <div
                        class="mb-4 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                    >
                        Simple, Honest Pricing
                    </div>
                    <h2
                        class="mb-4 text-3xl leading-tight font-bold text-blue-900 lg:text-4xl"
                    >
                        Choose the plan that fits<br />where your business is
                        today
                    </h2>
                    <p class="text-lg text-gray-600">
                        Monthly subscriptions. No contracts. Cancel anytime.
                    </p>
                </div>

                <div class="grid items-start gap-6 lg:grid-cols-3">
                    <!-- Starter Plan -->
                    <div
                        class="reveal rounded-2xl border border-gray-200 p-8 transition-all hover:shadow-lg"
                    >
                        <div
                            class="mb-4 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                        >
                            Starter
                        </div>
                        <div class="mb-2 flex items-end gap-2">
                            <span class="text-4xl font-extrabold text-blue-900"
                                >$297</span
                            >
                            <span class="pb-1.5 text-gray-600">/month</span>
                        </div>
                        <p class="mb-1 text-sm font-semibold text-gray-600">
                            Best for:
                        </p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-700">
                            Small businesses that want to capture website leads
                            and reduce time spent answering common questions.
                        </p>
                        <div class="mb-6 border-t border-gray-200"></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >AI chat assistant on your website</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Answers common customer questions</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Appointment booking assistance</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Basic FAQ knowledge base setup</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Lead capture from website chats</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >CRM contact creation</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Basic reporting dashboard</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Monthly AI monitoring</span
                                >
                            </li>
                        </ul>
                        <a
                            href="https://buy.stripe.com/fZu14g0kVfr4dbHdDkaEE00"
                            class="block w-full rounded-xl border-2 border-blue-600 px-4 py-3 text-center font-bold text-blue-600 transition-colors hover:bg-blue-50"
                            >Get Started</a
                        >
                    </div>

                    <!-- Growth Plan (Featured) -->
                    <div
                        class="reveal relative rounded-2xl border-2 border-blue-600 p-8"
                        style="
                            background: linear-gradient(
                                135deg,
                                #0d1f4e 0%,
                                #1a3a70 100%
                            );
                        "
                    >
                        <div
                            class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-blue-600 px-5 py-1.5 text-xs font-bold text-white shadow-lg"
                        >
                            Most Popular
                        </div>
                        <div
                            class="mt-2 mb-4 inline-block rounded-full bg-white/20 px-3 py-1 text-xs font-bold text-white"
                        >
                            Growth
                        </div>
                        <div class="mb-2 flex items-end gap-2">
                            <span class="text-4xl font-extrabold text-white"
                                >$597</span
                            >
                            <span class="pb-1.5 text-white/60">/month</span>
                        </div>
                        <p class="mb-1 text-sm font-semibold text-white/60">
                            Best for:
                        </p>
                        <p class="mb-6 text-sm leading-relaxed text-white/80">
                            Businesses that receive frequent calls or texts and
                            want AI to handle lead conversations automatically.
                        </p>
                        <div class="mb-6 border-t border-white/20"></div>
                        <ul class="mb-8 space-y-3 text-white/80">
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Everything in Starter</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >AI SMS conversation responses</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Automated lead follow-up sequences</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Missed call text-back automation</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Pipeline tracking for leads &
                                    appointments</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Review request automation</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Expanded reporting dashboard</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-blue-400"
                                    >✓</span
                                >
                                <span class="text-sm"
                                    >Monthly monitoring & optimization</span
                                >
                            </li>
                        </ul>
                        <a
                            href="https://buy.stripe.com/3cIfZa1oZgv89Zv56OaEE01"
                            class="block w-full rounded-xl bg-white px-4 py-3 text-center font-bold text-blue-900 transition-colors hover:bg-gray-100"
                            >Get Started</a
                        >
                    </div>

                    <!-- Pro Plan -->
                    <div
                        class="reveal rounded-2xl border border-gray-200 p-8 transition-all hover:shadow-lg"
                    >
                        <div
                            class="mb-4 inline-block rounded-full bg-cyan-100 px-3 py-1 text-xs font-bold text-cyan-600"
                        >
                            Pro
                        </div>
                        <div class="mb-2 flex items-end gap-2">
                            <span class="text-4xl font-extrabold text-blue-900"
                                >$1,197</span
                            >
                            <span class="pb-1.5 text-gray-600">/month</span>
                        </div>
                        <p class="mb-1 text-sm font-semibold text-gray-600">
                            Best for:
                        </p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-700">
                            High-volume businesses that want a fully automated
                            system to capture leads, schedule appointments, and
                            follow up with customers.
                        </p>
                        <div class="mb-6 border-t border-gray-200"></div>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Everything in Growth</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Full AI receptionist conversation
                                    handling</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Advanced workflow automations</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Multi-step lead nurturing campaigns</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >AI knowledge base expansion</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Advanced reporting & performance
                                    insights</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Priority monitoring & support</span
                                >
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 font-bold text-green-600"
                                    >✓</span
                                >
                                <span class="text-sm text-gray-700"
                                    >Automation optimization & updates</span
                                >
                            </li>
                        </ul>
                        <a
                            href="https://buy.stripe.com/dRm14g4Bb4Mq9Zv2YGaEE02"
                            class="block w-full rounded-xl bg-blue-900 px-4 py-3 text-center font-bold text-white transition-colors hover:bg-blue-800"
                            >Get Started</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="bg-gray-50 px-6 py-24 lg:px-12">
            <div class="mx-auto max-w-4xl">
                <div class="reveal mb-12 text-center">
                    <div
                        class="mb-4 inline-block rounded-full bg-blue-100 px-3 py-1 text-xs font-bold text-blue-600"
                    >
                        Get Started
                    </div>
                    <h2
                        class="mb-4 text-3xl leading-tight font-bold text-blue-900 lg:text-4xl"
                    >
                        Ready to capture more leads?
                    </h2>
                    <p class="text-lg text-gray-600">
                        Let's set up your AI assistant and get you answers and
                        bookings, 24/7.
                    </p>
                </div>

                <div class="grid gap-10 md:grid-cols-2">
                    <!-- Contact Info -->
                    <div class="reveal space-y-6">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-blue-300 bg-blue-100"
                            >
                                <svg
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#2563EB"
                                    stroke-width="1.8"
                                >
                                    <path
                                        d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                                    />
                                </svg>
                            </div>
                            <div>
                                <div
                                    class="mb-0.5 text-xs font-bold tracking-wide text-gray-500 uppercase"
                                >
                                    Phone
                                </div>
                                <a
                                    href="tel:+17754427070"
                                    class="font-bold text-blue-900 transition-colors hover:text-blue-600"
                                    >+1 (775) 442-7070</a
                                >
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-blue-300 bg-blue-100"
                            >
                                <svg
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#2563EB"
                                    stroke-width="1.8"
                                >
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                    />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <div
                                    class="mb-0.5 text-xs font-bold tracking-wide text-gray-500 uppercase"
                                >
                                    Email
                                </div>
                                <a
                                    href="mailto:hello@insightwebtechnologies.com"
                                    class="font-bold text-blue-900 transition-colors hover:text-blue-600"
                                    >hello@insightwebtechnologies.com</a
                                >
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-blue-300 bg-blue-100"
                            >
                                <svg
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#2563EB"
                                    stroke-width="1.8"
                                >
                                    <rect
                                        x="3"
                                        y="4"
                                        width="18"
                                        height="18"
                                        rx="2"
                                    />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </div>
                            <div>
                                <div
                                    class="mb-0.5 text-xs font-bold tracking-wide text-gray-500 uppercase"
                                >
                                    Schedule
                                </div>
                                <a
                                    href="#"
                                    class="font-bold text-blue-900 transition-colors hover:text-blue-600"
                                    >Book a free strategy call →</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="reveal rounded-2xl border border-gray-200 p-8">
                        <form
                            v-if="!formSubmitted"
                            @submit="handleFormSubmit"
                            class="space-y-5"
                        >
                            <div class="grid gap-5 sm:grid-cols-2">
                                <div>
                                    <label
                                        class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                        >First Name</label
                                    >
                                    <input
                                        type="text"
                                        placeholder="John"
                                        class="w-full rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                        >Last Name</label
                                    >
                                    <input
                                        type="text"
                                        placeholder="Smith"
                                        class="w-full rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                        required
                                    />
                                </div>
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                    >Business Email</label
                                >
                                <input
                                    type="email"
                                    placeholder="john@yourbusiness.com"
                                    class="w-full rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                    required
                                />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                    >Phone Number</label
                                >
                                <input
                                    type="tel"
                                    placeholder="+1 (775) 000-0000"
                                    class="w-full rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                    >I'm interested in…</label
                                >
                                <select
                                    class="w-full rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                    required
                                >
                                    <option value="" disabled selected>
                                        Select an option
                                    </option>
                                    <option>
                                        Starter Plan — AI Chat Assistant
                                        ($297/mo)
                                    </option>
                                    <option>
                                        Growth Plan — AI + SMS Automation
                                        ($597/mo)
                                    </option>
                                    <option>
                                        Pro Plan — Full Automation System
                                        ($1,197/mo)
                                    </option>
                                    <option>Web Design</option>
                                    <option>Brand Design</option>
                                    <option>AI Consulting</option>
                                    <option>Not sure — help me decide</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-xs font-bold tracking-wide text-gray-500 uppercase"
                                    >Tell us about your business</label
                                >
                                <textarea
                                    rows="4"
                                    placeholder="What kind of business do you run? What questions do your customers ask most?"
                                    class="w-full resize-none rounded-lg border border-gray-200 px-4 py-3 transition-all outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-100"
                                ></textarea>
                            </div>
                            <button
                                type="submit"
                                class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 py-4 text-sm font-bold text-white transition-colors hover:bg-blue-700"
                            >
                                <svg
                                    width="14"
                                    height="14"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2.5"
                                >
                                    <line x1="22" y1="2" x2="11" y2="13" />
                                    <polygon
                                        points="22 2 15 22 11 13 2 9 22 2"
                                    />
                                </svg>
                                Send Message
                            </button>
                        </form>

                        <!-- Success Message -->
                        <div v-else class="py-8 text-center">
                            <div
                                class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full border-2 border-green-300 bg-green-100"
                            >
                                <svg
                                    width="26"
                                    height="26"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#10B981"
                                    stroke-width="2.5"
                                >
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </div>
                            <h3 class="mb-2 text-xl font-bold text-blue-900">
                                Message Sent!
                            </h3>
                            <p class="text-sm text-gray-600">
                                We'll be in touch within one business day. You
                                can also
                                <a
                                    href="tel:+17754427070"
                                    class="font-semibold text-blue-600 hover:underline"
                                    >call us</a
                                >
                                for a same-day demo.
                            </p>
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
    transition:
        opacity 0.6s ease,
        transform 0.6s ease;
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
