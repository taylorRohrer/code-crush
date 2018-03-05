var app = new Vue({
    el: '#app',
    data: {
        zipCode: '68175',
        petList: ""
    },
    methods: {
        getPets: function() {
            axios.get("http://local.learnvue.com/get-pets.php?location=" + this.zipCode)
                .then((response) => {
                    this.petList = response.data.petfinder.pets.pet;
                    console.log(this.petList)

                })
                .catch((error) => {
                    console.log(error)
                });
        }
    },
    mounted: function() {

    }
})