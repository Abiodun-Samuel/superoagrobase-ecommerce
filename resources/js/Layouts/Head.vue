<template>
  <Head
    :title="
      title ? `${title} | SuperoAgrobase Ltd` : 'Home | SuperoAgrobase Ltd'
    "
  >
    <slot />
  </Head>
</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
defineProps(["title"]);
</script>