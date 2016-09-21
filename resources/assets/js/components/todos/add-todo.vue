<template>
    <div class="jumbotron">
        <h3 class="text-center">Add new todo</h3>
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-md-6">
                    <input type="text"
                           class="form-control"
                           placeholder="Name"
                           name="name"
                           v-model="todoForm.name"
                    >
                    <span class="text-danger">{{ this.todoForm.errors['name'] }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <textarea class="form-control"
                              placeholder="Description"
                              name="description"
                              v-model="todoForm.description"
                    ></textarea>
                    <span class="text-danger">{{ this.todoForm.errors['description'] }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <button class="btn btn-primary" @click.prevent="addTodo">Add todo</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: 'add-todos',

        data () {
            return {
                todoForm: {
                    name: '',
                    description: '',
                    errors: []
                }
            };
        },

        methods: {
            addTodo() {
                this.$http.post('api/todos', this.todoForm).then(response => {
                    this.todoForm.name = '';
                    this.todoForm.description = '';
                }).catch(response => {
                    this.todoForm.errors = response.data;
                });
            }
        },
    };
</script>
