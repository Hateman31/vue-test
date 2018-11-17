new Vue({
    el:"#app",
    data:{
        survey:[],
        isAnswering: false,
        current: 0,
        question: {},
        answers: []
    },
    mounted(){
        let app = this
        fetch('utils.php').then(function(response) {
            return response.json();
        })
        .then(function(myJson) {
            app.survey = myJson;
        })
        .catch((err)=>{console.log(err)});
    },
    methods:{
        startTest(){
            this.isAnswering = !this.isAnswering;
            if(this.current == 0)
                this.question = this.survey[this.current]
        },
        next(){
            // console.log(this.answers);
            this.current++
            if(!this.isFinished) 
                this.question = this.survey[this.current]
        },
        saveAnswer(qid,aid){
            this.answers.push({question:qid,answer:aid})
        }
    },
    computed:{
        isFinished(){
            return this.survey.length == this.current 
        }
    }
});