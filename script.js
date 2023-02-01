const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            todoList: [],
            newTodo: '',
            url: './server.php',
        }
    },
    methods: {
        //prendiamo la lista dei todo
        getTodoList() {
            axios.get(this.url).then((response) => {
                this.todoList = response.data;
            })
        },
        //metodo per aggiungere un todo
        addTodo() {
            const data = {
                newTodo: this.newTodo,
            }
            axios.post(this.url, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                this.getTodoList();
                this.newTodo = '';
            })
        },
        //metodo per rimuovere un todo
        removeTodo(index) {
            const data = {
                deleteTodo: index
            }
            axios.post(this.apiURL, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                console.log(response.data)
                this.getTodoList()
            })

        },
        //metodo per spuntare un todo
        checkTodo(index) {
            const data = {
                checkTodo: index
            }
            axios.post(this.apiURL, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                this.getTodoList()
            })
        },
    },
    mounted() {
        this.getTodoList();
    },
}).mount('#app');