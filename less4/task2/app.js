const App= {
    data() {
        return {
            todo: "",
            array: [],
            deltodo: true
        };
    },
    methods: {
        addtodo() {
            this.array.push(this.todo);
            this.todo = "";
        }
    }
}

Vue.createApp(App).mount('#app')
