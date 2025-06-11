<template>
  <form @submit.prevent="submit">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="first_name" class="form-label">Imię</label>
        <input v-model="form.first_name" type="text" class="form-control" required />
      </div>
      <div class="col-md-6 mb-3">
        <label for="last_name" class="form-label">Nazwisko</label>
        <input v-model="form.last_name" type="text" class="form-control" required />
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input v-model="form.email" type="email" class="form-control" required />
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Numer telefonu (opcjonalnie)</label>
      <input v-model="form.phone" type="tel" class="form-control" maxlength="9" pattern="[0-9]{9}" />
    </div>

    <div class="mb-3">
      <label for="birthdate" class="form-label">Data urodzenia</label>
      <input v-model="form.birthdate" type="date" class="form-control" required />
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Hasło</label>
      <input v-model="form.password" type="password" class="form-control" required />
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Powtórz hasło</label>
      <input v-model="form.password_confirmation" type="password" class="form-control" required />
      <div v-if="passwordMismatch" class="text-danger mt-1">Hasła nie są takie same.</div>
    </div>

    <div class="d-grid">
      <button type="submit" class="btn btn-primary btn-lg">Zarejestruj się</button>
    </div>
  </form>
</template>

<script setup>
import { ref, computed } from 'vue'
import axios from 'axios'

const form = ref({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  birthdate: '',
  password: '',
  password_confirmation: '',
})

const passwordMismatch = computed(() => form.value.password !== form.value.password_confirmation)

const submit = async () => {
  if (passwordMismatch.value) return

  try {
    await axios.post('/register', form.value)
    window.location.href = '/login'
  } catch (err) {
    console.error(err)
    alert('Błąd rejestracji: sprawdź poprawność danych.')
  }
}
</script>
