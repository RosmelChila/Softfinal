<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            Mis cursos
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 border-b border-gray-200">
                <div>
                <div v-for="curso in cursos" :key="curso.id" class="bg-slate-100 rounded-lg flex p-4 my-3">
                <div class="w-full">
                    <span class="w-full uppercase">{{ curso.nombre }}</span>
                    <br>
                    <span class="w-full uppercase">{{ curso.descripcion }}</span>
                </div>                
                <!-- <p>{{ curso.descripcion }}</p> -->
                <!-- El botón navega a la ruta /cursos/{curso.id} cuando se hace clic -->
                <PrimaryButton @click="verEstudiantes(curso.id)">Ver</PrimaryButton>
                </div>
            </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/Docente/AuthenticatedLayout.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head } from '@inertiajs/vue3';
</script>

  <script>
  export default {
     props: {
    cursos: Array,
  },
  methods: {
    verEstudiantes(cursoId) {
      this.$inertia.get(`/cursos/${cursoId}`);
    }
  },
  }
  </script>
  