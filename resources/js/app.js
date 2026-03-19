import './bootstrap';

import { createApp } from 'vue';

import Counter from './components/Counter.vue';
import StockWidget from './components/StockWidget.vue';

const app = createApp({});

app.component('counter-widget', Counter);
app.component('product-widget', StockWidget);

app.mount('#app')
