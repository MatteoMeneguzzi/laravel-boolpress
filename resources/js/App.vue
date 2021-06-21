<template>
    <div>
        <header>
            <Header />
        </header>

        <main>
            <h1>Welcome to public home</h1>
        </main>

        <p>Work in progress</p>
    </div>
</template>

<script>
import Header from "./components/Header.vue";
export default {
    name: "App",
    components: {
        Header
    }
};
</script>

<style lang="scss">
body {
    font-family: sans-serif;
}
</style>
