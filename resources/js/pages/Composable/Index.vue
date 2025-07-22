<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import OptionsApi from '@/pages/Composable/Partials/OptionsApi.vue';
import CompositionApi from '@/pages/Composable/Partials/CompositionApi.vue';
import UsingComposables from '@/pages/Composable/Partials/UsingComposables.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Composable',
        href: '/composable',
    },
];
</script>

<template>
    <Head title="VueJs API Comparison" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-6">
                <OptionsApi />
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-6">
                <CompositionApi />
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-6">
                <UsingComposables />
            </div>
        </div>
    </AppLayout>
</template>
