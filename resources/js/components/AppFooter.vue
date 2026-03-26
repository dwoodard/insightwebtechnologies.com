<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="border-t border-gray-200 bg-white px-6 py-12 lg:px-12">
        <div class="mx-auto max-w-7xl">
            <div class="mb-10 grid gap-10 md:grid-cols-4">
                <!-- Brand -->
                <div class="md:col-span-2">
                    <Link href="/" class="mb-4 flex w-fit items-center gap-3">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-600"
                        >
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
                        <span class="text-lg font-extrabold text-slate-900">
                            Insight<span class="text-blue-600">Web</span>
                            Technologies
                        </span>
                    </Link>
                    <p
                        class="mb-5 max-w-xs text-sm leading-relaxed text-gray-500"
                    >
                        AI chat assistants and automation tools that help local
                        businesses capture more leads and spend less time
                        answering the same questions over and over.
                    </p>
                    <div class="flex gap-3">
                        <a
                            href="#"
                            target="_blank"
                            rel="noopener"
                            class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 transition-all hover:border-blue-400 hover:text-blue-600"
                        >
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 transition-all hover:border-blue-400 hover:text-blue-600"
                        >
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-500 transition-all hover:border-blue-400 hover:text-blue-600"
                        >
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Plans -->
                <div>
                    <div
                        class="mb-4 text-xs font-bold tracking-widest text-blue-600 uppercase"
                    >
                        Plans
                    </div>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li>
                            <a
                                href="#packages"
                                class="transition-colors hover:text-slate-900"
                                >Starter — $297/mo</a
                            >
                        </li>
                        <li>
                            <a
                                href="#packages"
                                class="transition-colors hover:text-slate-900"
                                >Growth — $597/mo</a
                            >
                        </li>
                        <li>
                            <a
                                href="#packages"
                                class="transition-colors hover:text-slate-900"
                                >Pro — $1,197/mo</a
                            >
                        </li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <div
                        class="mb-4 text-xs font-bold tracking-widest text-blue-600 uppercase"
                    >
                        Company
                    </div>
                    <ul class="space-y-2 text-sm text-gray-500">
                        <li>
                            <a
                                href="#how-it-works"
                                class="transition-colors hover:text-slate-900"
                                >How It Works</a
                            >
                        </li>
                        <li>
                            <a
                                href="#services"
                                class="transition-colors hover:text-slate-900"
                                >Web & Brand Design</a
                            >
                        </li>
                        <li>
                            <a
                                href="#contact"
                                class="transition-colors hover:text-slate-900"
                                >Contact Us</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener"
                                class="transition-colors hover:text-slate-900"
                                >Book a Free Call</a
                            >
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="mb-6 border-t border-gray-200"></div>

            <!-- Bottom -->
            <div
                class="flex flex-col items-center justify-between gap-3 sm:flex-row"
            >
                <p class="text-xs text-gray-500">
                    © 2025 Insight Web Technologies. All rights reserved.
                </p>
                <div class="flex gap-5 text-xs text-gray-500">
                    <a href="#" class="transition-colors hover:text-blue-600"
                        >Privacy Policy</a
                    >
                    <a
                        href="/terms"
                        class="transition-colors hover:text-blue-600"
                        >Terms of Service</a
                    >
                </div>
            </div>
        </div>
    </footer>
</template>
