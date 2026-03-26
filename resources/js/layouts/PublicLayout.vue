<script setup lang="ts">
import AppNavigation from '@/components/AppNavigation.vue';
import AppFooter from '@/components/AppFooter.vue';
import { Head } from '@inertiajs/vue3';

type Props = {
    title?: string;
};

withDefaults(defineProps<Props>(), {
    title: 'Welcome',
});
</script>

<template>
    <Head :title="title" />
    <div class="min-h-screen flex flex-col bg-white">
        <AppNavigation />
        <main class="flex-1">
            <slot />
        </main>
        <AppFooter />
    </div>
</template>

<style scoped>
html {
    scroll-behavior: smooth;
}
</style>
