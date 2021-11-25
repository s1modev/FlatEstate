<template>
    <div class="mx-auto" style="max-width: 900px;">
        <vueper-slides :dragging-distance="50" fixed-height="450px">
        <vueper-slide
            class="rounded"
            v-for="(image, index) in images"
            :key="index"
            :image="'/post_images/'+image.name"/>
        </vueper-slides>
    </div>
        
</template>

<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
    export default {
        data(){
            return{
                images:null,
            }
        },
        methods:{

        },
        mounted() {
            axios.post('/api/media/'+this.id)
                .then(response=>{
                    this.images=response.data.media
                })
            console.log(this.images)
        },
        props:{
            id : {
                required: true
            }
        },
        components: { VueperSlides, VueperSlide },
    }
</script>
