const App = {
    data() {
        return {
            color: "blue",
            color1: "yellow",
            counter: 0,
            maximum: 5,
            txt: "  Ще не вмерла України, ні слава, ні воля,\n" +
                "            Ще нам, браття молодії, усміхнеться доля!\n" +
                "            Згинуть наші воріженьки, як роса на сонці,\n" +
                "            Запануєм і ми, браття, у своїй сторонці!\n" +
                "            Душу й тіло ми положим за нашу свободу\n" +
                "            І — покажем, що ми, браття, козацького роду!\n" +
                "            Душу й тіло ми положим за нашу свободу\n" +
                "            І — покажем, що ми, браття, козацького роду!",
            msg: "Досить бавитись!"
        }
    },
    methods:{
        select(){
            this.color=this.color==="blue"?"yellow":"blue"
            this.color1=this.color1==="yellow"?"blue":"yellow"
        }
    }
}

Vue.createApp(App).mount('#app')
