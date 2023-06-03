<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated class="top">
      <q-toolbar>
        <q-toolbar-title class="site-title">
          g2
        </q-toolbar-title>
      </q-toolbar>
    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent } from 'vue'


export default defineComponent({
  name: 'MainLayout',
})
</script>

<style lang="scss">
.site-title {
  font-size: 42px;
  font-weight: bold;
  text-align: center;
}
</style>
