<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref, onMounted, computed } from 'vue';

type Variant = 'welcome' | 'default';

const props = withDefaults(
    defineProps<{
        variant?: Variant;
    }>(),
    {
        variant: 'default',
    },
);

const mobileMenuOpen = ref(false);
const isScrolled = ref(false);

// Variant-based styles
const isWelcome = computed(() => props.variant === 'welcome');
const navbarClasses = computed(() => ({
    'bg-transparent': isWelcome.value,
    'bg-white border-b border-gray-200': !isWelcome.value,
}));
const brandTextClasses = computed(() =>
    isWelcome.value ? 'text-white' : 'text-gray-900',
);
const navLinkClasses = computed(() =>
    isWelcome.value ? 'text-white' : 'text-gray-700',
);
const hamburgerClasses = computed(() => {
    if (!isWelcome.value) {
        return 'text-gray-700 hover:text-gray-900';
    }

    // For welcome variant, switch color when scrolled
    if (isScrolled.value) {
        return 'text-gray-800 hover:text-gray-900';
    }

    return 'text-white hover:text-gray-100';
});
const mobileMenuClasses = computed(() => ({
    'border-t border-gray-200 bg-white/97': true,
}));
const mobileMenuLinkClasses = computed(() => 'text-gray-700');

const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
};

const closeMobileMenu = () => {
    mobileMenuOpen.value = false;
};

onMounted(() => {
    window.addEventListener('scroll', () => {
        isScrolled.value = window.scrollY > 30;
    });
});
</script>

<template>
    <nav
        id="navbar"
        class="&>scrolled:bg-white/95 &>scrolled:backdrop-blur-xl &>scrolled:shadow-lg fixed top-0 right-0 left-0 z-50 px-6 transition-all duration-300 lg:px-12"
        :class="[navbarClasses, { scrolled: isScrolled || mobileMenuOpen }]"
    >
        <div
            class="mx-auto flex h-16 max-w-7xl items-center justify-between lg:h-20"
        >
            <!-- Logo -->
            <Link href="/" class="flex items-center gap-3">
                <div
                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-600"
                >
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path
                            d="M9 1L16 5V13L9 17L2 13V5L9 1Z"
                            stroke="white"
                            stroke-width="1.5"
                            fill="rgba(255,255,255,0.15)"
                        />
                        <circle cx="9" cy="9" r="2.5" fill="white" />
                    </svg>
                </div>
                <span
                    class="brand-text text-lg font-bold tracking-tight"
                    :class="brandTextClasses"
                >
                    Insight<span class="text-blue-500">Web</span>
                </span>
            </Link>

            <!-- Desktop Menu -->
            <ul class="hidden items-center gap-8 text-sm font-semibold md:flex">
                <li>
                    <a
                        href="#how-it-works"
                        class="nav-link transition-colors hover:text-blue-500"
                        :class="navLinkClasses"
                        >How It Works</a
                    >
                </li>
                <li>
                    <a
                        href="#packages"
                        class="nav-link transition-colors hover:text-blue-500"
                        :class="
                            variant === 'welcome'
                                ? 'text-white'
                                : 'text-gray-700'
                        "
                        >Packages</a
                    >
                </li>
                <li>
                    <a
                        href="#services"
                        class="nav-link transition-colors hover:text-blue-500"
                        :class="
                            variant === 'welcome'
                                ? 'text-white'
                                : 'text-gray-700'
                        "
                        >More Services</a
                    >
                </li>
                <li>
                    <a
                        href="#contact"
                        class="nav-link transition-colors hover:text-blue-500"
                        :class="
                            variant === 'welcome'
                                ? 'text-white'
                                : 'text-gray-700'
                        "
                        >Contact</a
                    >
                </li>
            </ul>

            <!-- Desktop CTA -->
            <div class="hidden items-center gap-3 md:flex">
                <a href="tel:+17754427070" class="btn-outline rounded-lg border-2 border-blue-600 px-5 py-2.5 text-sm font-bold text-blue-600 transition-all hover:bg-blue-50 flex items-center gap-2" >
                    <svg
                        width="13"
                        height="13"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                        />
                    </svg>
                    Call for a Demo
                </a>
                <a
                    href="/schedule"
                    class="btn-primary rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-bold text-white transition-all hover:bg-blue-700"
                >
                    Book a Free Call
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="hamburger"
                @click="toggleMobileMenu"
                class="p-2 md:hidden"
                :class="hamburgerClasses"
                aria-label="Toggle menu"
            >
                <svg
                    v-if="!mobileMenuOpen"
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
                <svg
                    v-else
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div
            v-if="mobileMenuOpen"
            class="flex flex-col gap-3 px-2 pt-4 pb-5 shadow-lg backdrop-blur-xl md:hidden"
            :class="mobileMenuClasses"
        >
            <a
                href="#how-it-works"
                @click="closeMobileMenu"
                class="block py-1 font-semibold hover:text-blue-600"
                :class="mobileMenuLinkClasses"
                >How It Works</a
            >
            <a
                href="#packages"
                @click="closeMobileMenu"
                class="block py-1 font-semibold text-gray-700 hover:text-blue-600"
                >Packages</a
            >
            <a
                href="#services"
                @click="closeMobileMenu"
                class="block py-1 font-semibold text-gray-700 hover:text-blue-600"
                >More Services</a
            >
            <a
                href="#contact"
                @click="closeMobileMenu"
                class="block py-1 font-semibold text-gray-700 hover:text-blue-600"
                >Contact</a
            >
            <div class="flex flex-col gap-3 pt-2">
                <a
                    href="tel:+17754427070"
                    class="btn-outline justify-center rounded-lg border-2 border-blue-600 px-5 py-3 text-sm font-bold text-blue-600"
                >
                    Call for a Demo
                </a>
                <a
                    href="#contact"
                    class="btn-primary justify-center rounded-lg bg-blue-600 px-5 py-3 text-sm font-bold text-white"
                >
                    Book a Free Call
                </a>
            </div>
        </div>
    </nav>
</template>

<style scoped>
#navbar {
    transition:
        background 0.3s,
        box-shadow 0.3s;
}

#navbar.scrolled {
    background: rgba(255, 255, 255, 0.97);
    backdrop-filter: blur(16px);
    box-shadow:
        0 1px 0 #e5e7eb,
        0 4px 18px rgba(0, 0, 0, 0.05);
}

#navbar .brand-text {
    transition: color 0.3s;
}

#navbar.scrolled .brand-text {
    color: #001f3f;
}

#navbar .nav-link {
    transition: color 0.3s;
}

#navbar.scrolled .nav-link {
    color: #374151;
}

#navbar #hamburger {
    transition: all 0.3s;
}

#navbar.scrolled #hamburger {
    background-color: rgba(229, 231, 235, 0.7);
    border-radius: 0.5rem;
}

#navbar .btn-outline {
    transition: all 0.3s;
}

#navbar.scrolled .btn-outline {
    color: #374151;
    border-color: #d1d5db;
}
</style>
