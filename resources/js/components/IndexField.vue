<template>
  <div v-if="actions.length > 0">
    <div v-for="action in actions" class="my-2">
      <inline-action-selector
        class="mr-3"
        :resource="resource"
        :resource-name="resourceName"
        :actions="[{ ...action, class: 'btn btn-primary' }]"
        :endpoint="actionsEndpoint"
        @actionExecuted="$parent.$emit('actionExecuted')"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: ["resourceName", "field"],
  computed: {
    resource() {
      return this.$parent.resource;
    },
    actions() {
      return this.resource.actions;
    },
  },
};
</script>
