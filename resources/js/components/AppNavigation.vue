<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';

const mobileMenuOpen = ref(false);
const isScrolled = ref(false);

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
        class="fixed top-0 left-0 right-0 z-50 px-6 lg:px-12 bg-transparent transition-all duration-300"
        :class="{ 'scrolled': isScrolled || mobileMenuOpen }"
    >
        <div class="max-w-7xl mx-auto flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <Link href="/" class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center">
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                    >
                        <path
                            d="M9 1L16 5V13L9 17L2 13V5L9 1Z"
                            stroke="white"
                            stroke-width="1.5"
                            fill="rgba(255,255,255,0.15)"
                        />
                        <circle cx="9" cy="9" r="2.5" fill="white" />
                    </svg>
                </div>
                <span class="font-bold text-lg tracking-tight text-white brand-text">
                    Insight<span class="text-blue-500">Web</span>
                </span>
            </Link>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex items-center gap-8 text-sm font-semibold">
                <li><a href="#how-it-works" class="nav-link text-white hover:text-blue-500 transition-colors">How It Works</a></li>
                <li><a href="#packages" class="nav-link text-white hover:text-blue-500 transition-colors">Packages</a></li>
                <li><a href="#services" class="nav-link text-white hover:text-blue-500 transition-colors">More Services</a></li>
                <li><a href="#contact" class="nav-link text-white hover:text-blue-500 transition-colors">Contact</a></li>
            </ul>

            <!-- Desktop CTA -->
            <div class="hidden md:flex items-center gap-3">
                <a
                    href="tel:+17754427070"
                    class="btn-outline text-sm px-5 py-2.5 border-2 border-blue-600 text-blue-600 rounded-lg font-bold hover:bg-blue-50 transition-all"
                >
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path
                            d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.63A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.09-1.09a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"
                        />
                    </svg>
                    Call for a Demo
                </a>
                <a
                    href="#contact"
                    class="btn-primary text-sm px-5 py-2.5 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 transition-all"
                >
                    Book a Free Call
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="hamburger"
                @click="toggleMobileMenu"
                class="md:hidden p-2 text-gray-700 hover:text-gray-900"
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
            class="md:hidden flex flex-col gap-3 pb-5 px-2 border-t border-gray-200 pt-4 bg-white/97 backdrop-blur-xl"
        >
            <a href="#how-it-works" @click="closeMobileMenu" class="font-semibold text-gray-700 hover:text-blue-600 py-1 block">How It Works</a>
            <a href="#packages" @click="closeMobileMenu" class="font-semibold text-gray-700 hover:text-blue-600 py-1 block">Packages</a>
            <a href="#services" @click="closeMobileMenu" class="font-semibold text-gray-700 hover:text-blue-600 py-1 block">More Services</a>
            <a href="#contact" @click="closeMobileMenu" class="font-semibold text-gray-700 hover:text-blue-600 py-1 block">Contact</a>
            <div class="flex flex-col gap-3 pt-2">
                <a
                    href="tel:+17754427070"
                    class="btn-outline text-sm px-5 py-3 justify-center border-2 border-blue-600 text-blue-600 rounded-lg font-bold"
                >
                    Call for a Demo
                </a>
                <a
                    href="#contact"
                    class="btn-primary text-sm px-5 py-3 justify-center bg-blue-600 text-white rounded-lg font-bold"
                >
                    Book a Free Call
                </a>
            </div>
        </div>
    </nav>
</template>

<style scoped>
#navbar {
    transition: background 0.3s, box-shadow 0.3s;
}

#navbar.scrolled {
    background: rgba(255, 255, 255, 0.97);
    backdrop-filter: blur(16px);
    box-shadow: 0 1px 0 #e5e7eb, 0 4px 18px rgba(0, 0, 0, 0.05);
}

#navbar .brand-text {
    color: white;
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

#navbar .btn-outline {
    transition: all 0.3s;
}

#navbar.scrolled .btn-outline {
    color: #374151;
    border-color: #d1d5db;
}
</style>
