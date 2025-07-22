<script setup lang="ts">
import { useUsers } from '@/pages/Composable/Composables/useUsers';
import UserList from '@/pages/Composable/Partials/UserList.vue';

const {users} = useUsers()
</script>

<template>
    <div class="flex-col">
        <div class="font-semibold">Using Composable</div>
        <UserList :users="users" />
    </div>
</template>
