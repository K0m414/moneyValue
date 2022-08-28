<script>
import axios from "axios";
export default {
  name: "Login",
  data() {
    return {
      loginData: {
        email: "",
        password: "",
      },
      errors: {},
    };
  },
  methods: {
    login(){
        axios.post('http://127.0.0.1:8000/api/login', this.loginData).then((response) => {
            localStorage.setItem('token', response.data.message)
            console.log(response.data.message)
            this.$router.push('/Admin')
        }).catch((errors) => {
            this.errors = errors.response.data.errors
        })
    },
  },
};
</script>

<template>
  <section>
    
      <h3 class="title">Login</h3>
      <form class="form-horizontal" method="post" @submit.prevent="login">

        <div class="form-group">
          <input v-model="loginData.email" name="email" type="email" class="form-control" placeholder="E-mail" />
        </div>
        <div class="form-group">

          <input v-model="loginData.password" name="password" type="password" class="form-control" placeholder="Password"/>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>

  </section>
</template>

<style scoped>

</style>
