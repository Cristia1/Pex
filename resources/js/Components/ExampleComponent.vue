<template>
    <div class="card">
      <div class="card-header">
        Example Component
      </div>
      <div class="card-body">
        <p :class="'text-' + color">I'm an example component.</p>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: {
      color: {
        type: String,
        default: 'muted'
      }
    }
  }
  </script>
