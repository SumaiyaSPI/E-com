var singleVue = new Vue({
    el:"#singleProduct",
    data:{
        qty:1
    },
    methods:{
        increase(){
            this.qty = this.qty+1;
        },
        decrease(){
            if(this.qty > 0){
                this.qty = this.qty-1;
            }
            
        }
    }
});