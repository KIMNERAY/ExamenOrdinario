<script setup>
import { ref } from 'vue'
const count = ref(0)
</script>

<template>
  <h1>Contador: {{ count }}</h1>

  <div class="Button">
    <button type="button" @click="count++"> Incremento </button>
  </div>

  <div class="Button">
    <button type="button" @click="count--">Decremento</button>
  </div>

</template>

<style scoped>
.Button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>