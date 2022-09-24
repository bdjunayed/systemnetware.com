<template>
    <div>
        This is an Example Vue 3 SFC!! {{name}}
    </div>
</template>

<script setup>
    import { onMounted } from 'vue'

    const c = defineProps(['name'])

    onMounted(() => {
        console.log(`Hello`)
    })
</script>