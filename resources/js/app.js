require('./bootstrap');

import { createApp } from 'vue';
import UploadMedia from './components/MediaManager/UploadMedia.vue';
import UpdateMedia from './components/MediaManager/UpdateMedia.vue';
import MediaSlider from './components/MediaManager/MediaSlider.vue';
import UpdateAvatar from './components/MediaManager/UpdateAvatar.vue';

let app=createApp({})

app.component('upload-media' , UploadMedia);
app.component('update-media' , UpdateMedia);
app.component('media-slider' , MediaSlider);
app.component('update-avatar' , UpdateAvatar);
app.mount("#app")
