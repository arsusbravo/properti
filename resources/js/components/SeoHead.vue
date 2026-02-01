<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = withDefaults(
    defineProps<{
        title: string;
        description: string;
        keywords?: string;
        url?: string;
        image?: string;
        type?: string;
        jsonLd?: Record<string, unknown> | Record<string, unknown>[];
    }>(),
    {
        type: 'website',
    },
);

const canonicalUrl = computed(() => {
    if (props.url) return props.url;
    if (typeof window !== 'undefined') return window.location.href;
    return undefined;
});

const jsonLdScript = computed(() => {
    if (!props.jsonLd) return undefined;
    return JSON.stringify(props.jsonLd);
});
</script>

<template>
    <Head :title="title">
        <meta head-key="description" name="description" :content="description" />
        <meta v-if="keywords" head-key="keywords" name="keywords" :content="keywords" />
        <link v-if="canonicalUrl" head-key="canonical" rel="canonical" :href="canonicalUrl" />

        <!-- Open Graph -->
        <meta head-key="og:title" property="og:title" :content="title + ' - Toto Prime Realty'" />
        <meta head-key="og:description" property="og:description" :content="description" />
        <meta head-key="og:type" property="og:type" :content="type" />
        <meta v-if="canonicalUrl" head-key="og:url" property="og:url" :content="canonicalUrl" />
        <meta v-if="image" head-key="og:image" property="og:image" :content="image" />
        <meta head-key="og:locale" property="og:locale" content="id_ID" />
        <meta head-key="og:site_name" property="og:site_name" content="Toto Prime Realty" />

        <!-- Twitter Card -->
        <meta head-key="twitter:card" name="twitter:card" :content="image ? 'summary_large_image' : 'summary'" />
        <meta head-key="twitter:title" name="twitter:title" :content="title + ' - Toto Prime Realty'" />
        <meta head-key="twitter:description" name="twitter:description" :content="description" />
        <meta v-if="image" head-key="twitter:image" name="twitter:image" :content="image" />

        <!-- JSON-LD Structured Data -->
        <component v-if="jsonLdScript" :is="'script'" type="application/ld+json" v-text="jsonLdScript" />
    </Head>
</template>
