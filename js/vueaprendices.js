
const app = new Vue({
    el: '#app',
    data:{
       aprendices:[]
    },
    mounted(){
        axios.get('https://jsonplaceholder.typicode.com/comments')
        .then((respuesta= T )=>{
            console.log(respuesta.data)
            this.aprendices=respuesta.data
        }),
        console.log("Deberia Funcionar :) !!")
    }
})