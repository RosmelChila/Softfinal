<script setup>
import AuthenticatedLayout from '@/Layouts/Docente/AuthenticatedLayout.vue'
import { Head, Link} from '@inertiajs/vue3';
import PaginationVue from '@/Components/Pagination.vue';

import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

  <template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            Curso: {{ curso.nombre }}
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-end py-4">
                        <Link :href="route('tarea.create')">
                        <PrimaryButton type="button" class="flex" >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mx-2">
                            <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                            </svg>

                          Agregar Tarea
                        </PrimaryButton></Link>
                    </div>   
                    
                       
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre cliente
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descripcion
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nota Maxima
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Numero de intentos
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha de vencimiento
                                    </th>
                                    <th scope="col" class="px-6 py-3 flex  justify-center">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="tarea in curso.tareas" :key="tarea.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ tarea.nombre }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ tarea.descripcion }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ tarea.nota_maxima }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ tarea.num_intentos }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ tarea.fecha_vencimiento }}
                                    </td>
                                    <td class="px-6 py-4 ">
                                    <div class="flex item-center justify-center gap-2">
                                        <!-- <Link :href="route('cliente.edit', cliente.id)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                          <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                          <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                        </Link> 
                                        <Link :href="route('cliente.destroy', { id: cliente.id })" method="delete" as="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                          <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
                                          <path fill-rule="evenodd" d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zm6.133 2.845a.75.75 0 011.06 0l1.72 1.72 1.72-1.72a.75.75 0 111.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 11-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 11-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                        </svg>
                                        </Link>  -->
                                        
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    <PaginationVue class="my-4" :links="curso"/>
                        

                    </div>


                    </div>

            </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
    props: {
        curso: Object
    },
    components: { PrimaryButton }
}
</script>
  