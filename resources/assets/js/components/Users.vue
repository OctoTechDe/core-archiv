<template>
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {

        data() {
            return {
                users: []
            }
        },

        ready() {
            this.getUsers();
        },

        methods: {
            getUsers() {
                this.$http.get('api/getUsers')
                        .then(response => {
                            this.users = response.data;
                });
            }
        }
    }
</script>
