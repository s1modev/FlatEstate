<template>
    <div class="">
        <label class="mb-0">Avatar:</label>
        <div class="mt-1">
            <input type="file" @change="fileChange" id="image_input" ref="image" name="avatar" hidden>
            <img class="d-inline border border-dark img-fluid" :src="image" style="max-height:100px;">
            <button class="btn btn-outline-primary btn-sm mx-2" type="button" @click="chooseImage">Choose image</button>
            <button class="btn btn-outline-danger btn-sm mx-2" type="button" @click="deleteImage">Delete image</button>
            
        </div>
        <div v-if="image=='/user_avatar/user.jpg'">
            <input type="text" name="avatar_deleted" value="1" hidden>
        </div>
    </div>
        
</template>

<script>
    export default {
        data(){
            return{
                image:'' ,
            }
        },
        methods:{
            fileChange(event){
                const file = event.target.files[0]
                this.image = URL.createObjectURL(file)
            },
            deleteImage(){
                this.image = '/user_avatar/user.jpg'
                this.$refs.image.value = ""
            },
            chooseImage() {
                document.getElementById("image_input").click()
            },
        },
        mounted() {
            this.image = '/user_avatar/'+this.avatar
        },
        props:{
            avatar:{
                required:true
            },
        }
    }
</script>
