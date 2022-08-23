<template>
  <b-container>
    <b-row class="justify-content-md-center mt-5">
      <b-col col md="5">
        <b-card header="Đăng nhập" header-bg-variant="primary" header-text-variant="white">
          <b-card-text>
            <b-form @submit.prevent="handleSubmitLogin()">
              <b-form-group description="Enter your email" label="Email">
                <b-form-input v-model="form.email" type="email" required></b-form-input>
              </b-form-group>
              <b-form-group description="Enter your password" label="Password">
                <b-form-input v-model="form.password" type="password" required></b-form-input>
              </b-form-group>
              <b-form-group>
                <b-button type="submit" variant="outline-primary">Login</b-button>
              </b-form-group>
            </b-form>
          </b-card-text>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import { UserService } from '@/services'

export default {
  name: "Login",
  data() {
    return {
      form: {
        email: '',
        password: ''
      },
    }
  },
  methods: {
    handleSubmitLogin() {
      UserService.login(this.form).then( response => {
        this.$router.push({ name: 'home'}, () => {})

        this.$store.dispatch('actionSetToken', response.data.access_token)
        this.$store.dispatch('actionSetUser', response.data.user)
      }).catch(errors => {
        // có thể xử lý dc
      })
    }
  },

}
</script>
