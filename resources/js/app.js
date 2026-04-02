import './bootstrap';

import { createApp } from 'vue';

import Counter from './components/Counter.vue';
import StockWidget from './components/StockWidget.vue';
import ProductInfo from './components/ProductInfo.vue';

const app = createApp({});

app.component('counter-widget', Counter);
app.component('product-widget', StockWidget);
app.component('productinfo-widget', ProductInfo);
app.mount('#app')
