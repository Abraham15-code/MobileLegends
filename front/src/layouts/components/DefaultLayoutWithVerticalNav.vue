<script setup>
import { useTheme } from 'vuetify'

import VerticalNavLayout from '@layouts/components/VerticalNavLayout.vue'

// Components
import Footer from '@/layouts/components/Footer.vue'
import NavbarThemeSwitcher from '@/layouts/components/NavbarThemeSwitcher.vue'
import UserProfile from '@/layouts/components/UserProfile.vue'
import NavItems from '@/layouts/components/NavItems.vue'

const vuetifyTheme = useTheme()
</script>

<template>
  <VerticalNavLayout>
    <!-- 👉 navbar -->
    <template #navbar="{ toggleVerticalOverlayNavActive }">
      <div class="d-flex h-100 align-center">
        <!-- 👉 Vertical nav toggle in overlay mode -->
        <IconBtn
          class="ms-n3 d-lg-none"
          @click="toggleVerticalOverlayNavActive(true)"
        >
          <VIcon icon="bx-menu" />
        </IconBtn>

        <!-- 👉 GENERAL SEARCH -->
        <div
          class="d-none align-center cursor-pointer"
          style="user-select: none;"
        >
          <!-- 👉 Search Trigger button -->
          <IconBtn>
            <VIcon icon="bx-search" />
          </IconBtn>

          <span class="d-none d-md-flex align-center text-disabled">
            <span class="me-3">Search</span>
            <span class="meta-key">&#8984;K</span>
          </span>
        </div>
        
        <VSpacer />

        <!-- options general to system or user -->
        <slot name="general-right-options">
          <!-- NOTIFICATIONS -->
          <IconBtn class="me-2">
            <VIcon icon="bx-bell" />
          </IconBtn>

          <!-- COLOR THEME -->
          <NavbarThemeSwitcher class="me-2" />

          <!-- CURRENT USER -->
          <UserProfile />
        </slot>
      </div>
    </template>

    <!-- options sidebar -->
    <template #vertical-nav-content>
      <NavItems />
    </template>

    <template #after-vertical-nav-items>
      <!-- 👉 illustration -->
    </template>

    <!-- 👉 Pages -->
    <slot />

    <!-- 👉 Footer -->
    <template #footer>
      <Footer />
    </template>
  </VerticalNavLayout>
</template>

<style lang="scss" scoped>
.meta-key {
  border: thin solid rgba(var(--v-border-color), var(--v-border-opacity));
  border-radius: 6px;
  block-size: 1.5625rem;
  line-height: 1.3125rem;
  padding-block: 0.125rem;
  padding-inline: 0.25rem;
}
</style>
