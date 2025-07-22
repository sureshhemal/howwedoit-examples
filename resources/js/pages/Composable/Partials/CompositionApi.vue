<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { User } from '@/types';
import UserList from '@/pages/Composable/Partials/UserList.vue';

const users = ref<User[]>([])

async function fetchUsers(): Promise<void> {
    const {data} = await $http.get('users')
    users.value = data
}

onMounted(() => {
    fetchUsers()
})

</script>

<template>
    <div class="flex-col">
        <div class="font-semibold">Composition API</div>
        <UserList :users="users" />
    </div>
</template>
