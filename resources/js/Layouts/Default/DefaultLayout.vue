<template>
  <Head>
    <meta name="description" content="This is my about page description" />
  </Head>
  <main>
    <h1>Default layout</h1>
    <header>
      <Link href="/">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/contact">Contact</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script setup>
import Head from "../Head.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>
