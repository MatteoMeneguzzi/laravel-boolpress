<template>
    <div class="container">
        <div v-if="post">
            <h1>{{ post.title }}</h1>
            <div class="post-info">
                <span>{{ post.category.name }}</span>
                <!-- <span
                    v-for="tag in post.tags"
                    :key="`tag-${tag.id}`"
                    class="tag"
                >
                    {{ tag.name }}
                </span> -->
                <Tags :tags="post.tags" />
                <div>{{ post.content }}</div>
            </div>
        </div>

        <Loader v-else />
    </div>
</template>

<script>
import axios from "axios";
import Loader from "../components/Loader.vue";
import Tags from "../components/Tags.vue";
export default {
    name: "PostDetail",
    components: {
        Loader,
        Tags
    },
    data() {
        return {
            post: null
        };
    },
    created() {
        this.getPostDetails();
    },
    methods: {
        getPostDetails() {
            console.log("api cal here");

            axios
                .get(
                    `http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`
                )
                .then(res => {
                    console.log(res.data);
                    this.post = res.data;
                })
                .catch(err => {
                    console.log("errore: " + err);
                });
        }
    }
};
</script>

<style></style>
