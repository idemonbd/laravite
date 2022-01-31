<template>
  <router-view :key="$route.path"></router-view>
</template>

<script setup>

import { computed } from 'vue'
import { useRouter } from 'vue-router'
import { useStore } from 'vuex'

const store = useStore()
const router = useRouter()
const user = computed(() => store.state.user.data)

function logout() {
  store.dispatch("logout").then(() => {
    router.push({
      name: "Login",
    })
  })
}
store.dispatch("getUser")
</script>