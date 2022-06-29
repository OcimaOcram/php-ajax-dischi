new Vue ({
    el: "app",
    data: {
        cd: []
    },

    created() {
        axios.get('http://localhost/Esercizio-45/php-ajax-dischi/api.php')
        .then(response => this.cd = response.data)

    }


})