const app = new Vue({
    el: '#app',
    data:{
       fichas:[]
    },
    mounted(){
        axios.get('https://jsonplaceholder.typicode.com/users')
        .then((respuesta= T )=>{
            console.log(respuesta.data)
            this.fichas=respuesta.data
        }),
        console.log("Deberia Funcionar :) !!")
    }
})