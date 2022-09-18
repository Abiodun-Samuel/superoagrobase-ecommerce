<template>
  <h2>About page</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, veritatis.
    Eligendi repudiandae aut consectetur iure perspiciatis sit? Eligendi, atque
    modi!
  </p>
  <Link href="/about">About</Link> /
  <Link href="/">Home</Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<script>
import DashboardLayout from "../../Layouts/Dashboard/DashboardLayout.vue";
export default {
  layout: DashboardLayout,
};
</script>
