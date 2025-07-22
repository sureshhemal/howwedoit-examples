<script lang="ts">
import { defineComponent } from 'vue';
import { User } from '@/types';
import UserList from '@/pages/Composable/Partials/UserList.vue';

export default defineComponent({
    name: 'OptionsApi',
    components: { UserList },

    data() {
        return {
            users: [] as User[],
        };
    },

    mounted() {
        this.fetchUsers()
    },

    methods: {
        async fetchUsers(): Promise<void> {
            const {data}  = await $http.get('users')
            this.users = data
        },
    },
});
</script>

<template>
    <div class="flex-col">
        <div class="font-semibold">Options API</div>
        <UserList :users="users" />
    </div>
</template>
