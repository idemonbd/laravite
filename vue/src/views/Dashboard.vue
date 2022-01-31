<template>
  <PageComponent title="Dashboard">
    <div v-if="loading" class="flex justify-center">Loading...</div>
    <div v-else>
      <h1>Main Content will goes here</h1>
    </div>
  </PageComponent>
</template>

<script setup>
import PageComponent from "../components/PageComponent.vue"
import { computed } from "vue"
import { useStore } from "vuex"

const store = useStore()

const loading = computed(() => store.state.dashboard.loading)

store.dispatch("getDashboardData")
</script>

<style scoped></style>
