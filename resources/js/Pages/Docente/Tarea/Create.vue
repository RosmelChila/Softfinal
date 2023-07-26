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
            Agregar Tarea: 
        </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                    <div class="flex justify-end py-4">
                        


                    </div>

            </div>
            </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
   
}
</script>
  