import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

// Przykład rejestracji komponentu Vue
app.component('example-component', require('./components/ExampleComponent.vue').default);

app.mount('#app');