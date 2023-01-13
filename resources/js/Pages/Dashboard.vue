<script setup>
import DashboardButton from '../Components/DashboardButton.vue'
</script>
<template>
    <div class="grid grid-cols-5 min-h-screen bg-gradient-to-r from-cyan-500/40 to-blue-500/50">
        <div class="col-start-2 col-span-3">
            <div class="h-full grid content-center space-y-16 justify-center">
                <div class="flex flex-col items-center justify-center space-y-4">
                    <img src="https://avatars.githubusercontent.com/katalam" alt=""
                         class="w-32 h-32 rounded-full border border-4 border-white select-none">
                    <span class="font-bold text-white text-5xl select-none">Katalam</span>
                </div>
                <div class="grid grid-cols-3 lg:grid-cols-6 justify-items-center gap-6">
                    <DashboardButton link="https://twitter.com/brunogoerss">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter"
                             width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"/>
                        </svg>
                    </DashboardButton>
                    <DashboardButton link="https://github.com/Katalam">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github"
                             width="30"
                             height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"/>
                        </svg>
                    </DashboardButton>
                    <DashboardButton link="https://instagram.com/bruno.goerss">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                             width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="4" y="4" width="16" height="16" rx="4"/>
                            <circle cx="12" cy="12" r="3"/>
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"/>
                        </svg>
                    </DashboardButton>
                    <DashboardButton link="https://steamcommunity.com/id/katalam">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-steam"
                             width="30"
                             height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path
                                d="M16.5 5a4.5 4.5 0 1 1 -.653 8.953l-4.347 3.009l0 .038a3 3 0 0 1 -2.824 2.995l-.176 .005a3 3 0 0 1 -2.94 -2.402l-2.56 -1.098v-3.5l3.51 1.755a2.989 2.989 0 0 1 2.834 -.635l2.727 -3.818a4.5 4.5 0 0 1 4.429 -5.302z"/>
                            <circle fill="currentColor" cx="16.5" cy="9.5" r="1"/>
                        </svg>
                    </DashboardButton>
                    <DashboardButton link="mailto:info@katalam.com">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="30"
                             height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="12" r="4"/>
                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"/>
                        </svg>
                    </DashboardButton>
                    <DashboardButton>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key" width="30"
                             height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="8" cy="15" r="4"/>
                            <line x1="10.85" y1="12.15" x2="19" y2="4"/>
                            <line x1="18" y1="5" x2="20" y2="7"/>
                            <line x1="15" y1="8" x2="17" y2="10"/>
                        </svg>
                    </DashboardButton>
                </div>
            </div>
        </div>
    </div>
</template>
