Nova.booting((Vue, router, store) => {
  Vue.component('index-action-buttons', require('./components/IndexField'))
  Vue.component('detail-action-buttons', require('./components/DetailField'))
  Vue.component('form-action-buttons', require('./components/FormField'))
})
