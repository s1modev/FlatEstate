<template>
    <div>
        <div class="">
            <label for="" class="m-0">Media <strong class="text-danger">*</strong></label>
            <div class='gallery w-100' :class="error?'border-danger':''" >
                <div class="p-3">

                    <!--UPLOAD BUTTON-->
                    <div class="button-container mx-1">
                        <label for="images-upload" class="images-upload text-center">
                            <i class=" fas fa-plus-circle fa-3x custum-icon " style="transform: translateY(+31%);"></i>
                        </label>     
                        <input @change="fileChange" id="images-upload" type="file" name="images" multiple hidden>
                    </div> 

                    <!--IMAGES PREVIEW-->
                    <div v-for="(image, index) in media" :key="index" class="image-container mx-1">
                        <img :src="image.url" alt=""  class="images-preview mt-2">
                        <button @click="remove(index)" class="close-btn" type="button"> <i class="fas  fa-2x fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div v-if='error'>
                <p class='text-danger'>{{error}}</p>
            </div>
            <div v-for="(image, index) in media" :key="index" class="mt-1">
                <input type="text" name="media[]" :value="image.name" hidden>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                media:[],
                
            }
        },
        methods:{
            fileChange(event){
                console.log(event.target.files)
                let files = event.target.files
                for(var i=0; i < files.length; i++){
                    let formData = new FormData
                    let url = URL.createObjectURL(files[i])
                    formData.set('image', files[i])
                    axios.post('/api/image/upload', formData)
                        .then(response=>{
                            this.media.push({url:url, name:response.data.name});
                        })
                }
                console.log(this.media)
            },
            remove(index){
                this.media.splice(index,1)
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
        props:{
            error:'',
        },
    }
</script>

<style scoped>
.image-wraper{
    min-height: 200px;
}

.gallery{
    background-color: #fbfbfb;
    border-radius: 5px;
    border-style: solid;
    border: 1px solid #bbbbbb;
    height: 85px;
    line-height: 1;
    box-sizing: border-box;
    height: auto;
}
input[type="file"] {
    display: none;
}
.images-upload {
    background-color: #ffffff;
    border-radius: 5px;
    border: 1px dashed #ccc;
    display: inline-block;
    padding: 3px;
    cursor: pointer;
    width: 165px;
    height: 85px;
}
.images-preview {
    border-radius: 5px;
    border: 1px solid #ccc;
    display: inline-block;
    width: 130px;
    height: 80px;
    padding-top: -14px;
}
.button-container{
    display: inline-flex;
    height: 90px;
    width: 140px;
}
.image-container{
    display: inline-table;
    height: 90px;
    width: 130px;

}
.custum-icon{

    
    color: #00afca;
}
.close-btn{
    background: none;
	color: white;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
    position: relative;
    left: -122px;
    top: -13px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    width: 0px;

}
.close-btn:hover{
    color: red;
    box-shadow: red 0px 7px 29px 0px;
}


</style>
