<script setup lang="ts">
import { User } from '@/types';

defineProps({
    users: {
        type: Array as () => User[],
        required: true,
    }
})
</script>

<template>
    <div v-for="user in users" :key="user.email">
        {{user.name}} - {{user.email}}
    </div>
</template>
