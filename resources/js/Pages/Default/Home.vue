<template lang="">
    <div>Home</div>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
        voluptates sapiente ea labore blanditiis! Eum, nobis fugit! Adipisci,
        facere neque?
    </p>
    <Link href="/about">About</Link> /
    <Link href="/">Home</Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<script>
import DefaultLayout from "../../Layouts/Default/DefaultLayout.vue";
export default {
  layout: DefaultLayout,
};
</script>
