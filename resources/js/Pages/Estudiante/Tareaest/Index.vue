<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            Tareas
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="bg-slate-100 rounded-lg  p-4 my-3">
                    <span>Tareas Pendientes</span>
                    <div class="bg-white rounded-lg p-4 flex">
                        <div class="w-full">
                            <span>hola</span>
                        </div>
                        <PrimaryButton>Subir</PrimaryButton>
                    </div>
                </div>
                <div class="bg-slate-100 rounded-lg  p-4 my-3">
                    <span>Tareas Por Corregir</span>
                    <div class="bg-white rounded-lg p-4 flex">
                        <div class="w-full">
                            <span>hola</span>
                        </div>
                        <PrimaryButton>Corregir</PrimaryButton>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/Estudiante/AuthenticatedLayout.vue'
import { Head } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

</script>