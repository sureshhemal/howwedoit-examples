import { onMounted, ref } from 'vue';
import { User } from '@/types';

export function useUsers() {
    const users = ref<User[]>([])

    const fetchUsers = async () => {
        const { data } = await $http.get('users');

        users.value = data as User[];
    }

    onMounted(() => {
        fetchUsers()
    })

    return {
        users,
    }
}
