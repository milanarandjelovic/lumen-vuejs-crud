<template>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="todo in todos">
                <td>{{ todo.id }}</td>
                <td>{{ todo.name }}</td>
                <td>{{ todo.description }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {

  name: 'todos',

  data () {
    return {
        todos: []
    };
  },

  ready () {
    this.getAllTodos ();
  },

  methods: {
    getAllTodos () {
      this.$http.get('api/todos').then(response => {
        console.log(response.data);
        this.todos = response.data;
      }).catch(error => {
        console.log(err);
      }).bind(this);
    }
  }

};
</script>

<style lang="css" scoped>
</style>
