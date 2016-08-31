<template>
<form class="form-horizontal" v-on:submit.prevent="createUser">

    <alert-success :form="form" message="Success!"></alert-success>
    <alert-errors :form="form"></alert-errors>
    <alert-success :form="form" message="Success!"></alert-success>

    <div class="form-group">
      <label for="name" class="col-md-2 control-label">Name</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name">

         <span class="has-error" v-if="form.errors.has('name')">
            <strong>{{ form.errors.get('name') }}</strong>
        </span>

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
        <button :disabled="form.busy" type="submit" class="btn btn-primary">Create User</button>
      </div>
    </div>

</form>
</template>

<script>
    export default {

        data() {
            return {
                form: this.$form({
                    name: '',
                    email: '',
                    password: ''
                })
            }
        },

        methods: {
            createUser() {
                this.form.post('api/createUser')
                        .then(response => {
                            console.log(response.data);
                });
            }
        }
    }
</script>
