import { createInertiaApp } from '@inertiajs/vue3';
import { initializeTheme } from '@/composables/useAppearance';
import AppLayout from '@/layouts/AppLayout.vue';
import AuthLayout from '@/layouts/AuthLayout.vue';
import SettingsLayout from '@/layouts/settings/Layout.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Load external scripts
const loadExternalScript = (src: string, attributes: Record<string, string> = {}) => {
    const script = document.createElement('script');
    script.src = src;
    Object.entries(attributes).forEach(([key, value]) => {
        script.setAttribute(key, value);
    });
    document.head.appendChild(script);
};

// Load Lead Connector widget
loadExternalScript('https://widgets.leadconnectorhq.com/loader.js', {
    'data-resources-url': 'https://widgets.leadconnectorhq.com/chat-widget/loader.js',
    'data-widget-id': '69b30fdb4ed9d7630a7f34e8',
});

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    layout: (name) => {
        switch (true) {
            case name === 'Welcome':
                return null;
            case name.startsWith('auth/'):
                return AuthLayout;
            case name.startsWith('settings/'):
                return [AppLayout, SettingsLayout];
            default:
                return AppLayout;
        }
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();
