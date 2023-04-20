<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    mounted() {
        if(!localStorage.getItem("token")){
            window.location.replace("/");
        }
    },
}
</script>
