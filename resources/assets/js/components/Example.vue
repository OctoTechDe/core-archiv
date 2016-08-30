<template>
    <div class="panel panel-default">
        <div class="panel-heading">Example Component</div>
        <div class="panel-body">
            Welcome {{ user.name }}!
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                user: null
            }
        },

        ready() {
            this.getUser();
        },

        methods: {
            getUser() {
                this.$http.get('api/user')
                        .then(response => {
                    this.user = response.data;
                });
            }
        }
    }
</script>
