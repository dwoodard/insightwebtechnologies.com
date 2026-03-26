<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';

onMounted(() => {
    const script = document.createElement('script');
    script.src = 'https://link.msgsndr.com/js/form_embed.js';
    script.type = 'text/javascript';
    document.body.appendChild(script);
});
</script>

<template>
    <Head title="Schedule" />

    <div class="h-screen w-screen">
        <iframe
            src="https://api.leadconnectorhq.com/widget/booking/ASdGBIhv9QApXkA1Nmi0"
            style="width: 100%; border: none; overflow: hidden;"
            scrolling="no"
            id="ASdGBIhv9QApXkA1Nmi0_1774542301565"
        />
    </div>
</template>
