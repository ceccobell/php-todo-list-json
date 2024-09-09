const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            url: "server.php",
            newTodo: "",
        }
    },
    methods: {
        getTodoList() {
            axios.get(this.url).then((resp) => {
                console.log(resp.data)
                this.todoList = resp.data
            })
        },
        addToDo() {
            if (this.newTodo.trim() != "") {
                this.todoList.push({
                    id: this.todoList.length + 1,
                    done: false,
                    name: this.newTodo.trim(),
                })
                this.newTodo = null
            }
        },
    },
    mounted() {
        this.getTodoList()
    },
}).mount("#app")
