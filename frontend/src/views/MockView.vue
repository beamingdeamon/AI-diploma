<template>
    <div>
        mock
    </div>
</template>

<script>
export default {
    mounted: function () {
        if(!window.localStorage.getItem("token")){
            window.location.replace("/");
        }
    }
}
</script>

<style lang="sass" scoped>

</style>