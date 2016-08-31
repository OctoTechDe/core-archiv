<template>
<form class="form-horizontal">

    <div class="form-group">
      <label for="name" class="col-md-2 control-label">Name</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name">
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="email" placeholder="Email" v-model="form.email">
      </div>
    </div>

    <div class="form-group">
      <label for="password" class="col-md-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="password" placeholder="Password" v-model="form.password">
    </div>

    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" @click.prevent="createUser">Submit</button>
      </div>
    </div>

</form>
</template>

<script>
    export default {

        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: ''
                }
            }
        },

        methods: {
            createUser() {
                this.$http.post('api/users', this.form)
                        .then(response => {
                            console.log(response.data);
                });
            }
        }
    }
</script>
