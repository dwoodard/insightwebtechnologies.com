<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AppFooter from '@/components/AppFooter.vue';
import AppNavigation from '@/components/AppNavigation.vue';

type Props = {
    title?: string;
};

withDefaults(defineProps<Props>(), {
    title: 'Welcome',
});
</script>

<template>
    <Head :title="title" />
    <div class="flex min-h-screen flex-col bg-white">
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
