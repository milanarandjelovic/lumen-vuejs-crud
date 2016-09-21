<template>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="todo in todos[0]">
            <td>{{ todo.id }}</td>
            <td>{{ todo.name }}</td>
            <td>{{ todo.description }}</td>
            <td>{{ todo.created_at }}</td>
            <td>{{ todo.updated_at }}</td>
            <td>
                <button @click.prevent="deleteTodo(todo)"
                        class="btn btn-danger"
                >
                    <i class="fa fa-trash"></i>
                </button>
            </td>
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
            this.getAllTodos();
        },

        methods: {
            getAllTodos () {
                this.$http.get('api/todos').then(response => {
                    console.log(response.data);
                    this.todos.push(response.data);
                }).catch(error => {
                    console.log(error);
                }).bind(this);
            },
            deleteTodo(todo) {
                this.$http.delete('api/todos/' + todo.id).then(function () {
                    this.todos.$remove(todo);
                    setTimeout(this.getUpdate, 1000);
                });
            }
        }
    };
</script>
