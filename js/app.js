const $http = axios.create({
    baseURL: 'https://quarentenados-f4227.firebaseio.com/',
    timeout: 10000,
});
const insta_url = 'https://www.instagram.com/luizalbertobm/?__a=1'
var app = new Vue({
    el: '#app',
    data: {
        // TODO: tem que alterar esse link antes de publicar: 
        base_url:'file:///home/rafael/Projetos/quarentenados',
        covid: {},
        user:{},
        news: [],
        stores: [],
    },
    methods: {
        getStores() {
            $http.get('stores-fortaleza.json')
                .then(res => {
                    console.log(res.data)
                    this.stores = res.data
                })
        },
        getNews() {
            $http.get('news-fortaleza.json')
                .then(res => {
                    console.log(res.data)
                    this.news = res.data
                })
        },
        saveUser(){
            $http.post('users.json', this.user)
            .then(res => {
                $('#jobsModal').modal('hide')
                this.user = {}
                window.alert("Dados gravados com sucesso. Obrigado!")
            })
        }
    },
    mounted() {
        this.getStores()
        this.getNews()
    },
    filters: {
        numberFormat: function (value) {
            return new Intl.NumberFormat('de-DE', {
                style: 'decimal'
            }).format(value)
        }
    },
    created() {
        axios.get('https://coronavirus-19-api.herokuapp.com/countries/brazil')
            .then(res => {
                console.log(res)
                this.covid = res.data
            })
    },
})


$('.navbar-collapse a').click(function () {
    $(".navbar-collapse").collapse('hide');
});