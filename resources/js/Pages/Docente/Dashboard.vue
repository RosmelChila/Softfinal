<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            Dashboard Docente asfjhf
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                You're logged in!
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/Docente/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3';
</script>
