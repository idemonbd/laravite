<template>
  <div>
    <form class="mt-8 space-y-6" @submit="register">register form</form>
  </div>
</template>

<script setup>
import { ref } from "vue"
import store from "../store"
import { useRouter } from "vue-router"
const router = useRouter()
const user = {
  name: "",
  email: "",
  password: "",
}
const loading = ref(false)
const errors = ref({})

function register(ev) {
  ev.preventDefault()
  loading.value = true
  store
    .dispatch("register", user)
    .then(() => {
      loading.value = false
      router.push({
        name: "Dashboard",
      })
    })
    .catch((error) => {
      loading.value = false
      if (error.response.status === 422) {
        errors.value = error.response.data.errors
      }
    })
}
</script>
