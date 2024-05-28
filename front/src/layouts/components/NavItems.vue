<script setup>
import { useTheme } from "vuetify"
import VerticalNavSectionTitle from "@/@layouts/components/VerticalNavSectionTitle.vue"
import VerticalNavLayout from "@layouts/components/VerticalNavLayout.vue"
import VerticalNavLink from "@layouts/components/VerticalNavLink.vue"
</script>

<template>
  <!-- options sidebar -->
  <VerticalNavLink
    :item="{
      title: 'Dashboard',
      icon: 'bx-home',
      to: '/dashboard',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'places',
      icon: 'bx-trip',
      to: '/places',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'roles',
      icon: 'bx-user',
      to: '/roles',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'powers',
      icon: 'bx-brightness',
      to: '/powers',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'items',
      icon: 'bx-sitemap',
      to: '/items',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'heroes',
      icon: 'bx-group',
      to: '/heroes',
    }"
  />
  <VerticalNavLink 
    :item="{
      title: 'users',
      icon: 'bx-user-circle',
      to: '/users',
    }"
  />
</template>