Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        cards: []
    },
    created() {
        axios
            .get('api/server.php')
            .then((res) => {
                console.log(res.data);
                this.cards = res.data;
            })
    }
})