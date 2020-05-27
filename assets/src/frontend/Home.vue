<template>
    <div>
        <section class="box">
            <div class="blob">
                <b></b>
                <b></b>
            </div>
            <div class="s">
                <div class="header">menu</div>
                <div class="stay-connects">
                    social sites
                </div>
            </div>
            <div class="shapla-container inner">
                <columns>
                    <column>
                        <div class="sim-box-left">About Me</div>
                    </column>
                    <column>
                        <div class="sim-box">
                            <div class="sim-sub-box1">Skills</div>
                            <div class="sim-sub-box2">Work</div>
                            <div class="sim-sub-box3">My Blog</div>
                        </div>
                    </column>
                </columns>
            </div>
        </section>
    </div>
</template>
<script>
    import {columns, column} from 'shapla-columns';

    export default {
        name: 'Home',
        components: {
            columns,
            column
        },
        computed: {
            assets_url() {
                return _stackonet.assets_url
            }
        },
    }
</script>

<style lang="scss">

    @keyframes blob_b {
        100%,
        0% {
            transform: none;
        }
        50% {
            transform: translate(50%, 20%) rotate(-200deg) scale(1.2);
        }
    }


    .box {
        position: relative;
        background-image: linear-gradient(to right, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
        overflow: hidden;
        height: 100vh;

    }


    .box .inner {
        position: relative;
        z-index: 1;
    }

    .box .blob b {
        position: absolute;
        height: 400px;
        width: 400px;
        top: 50%;
        left: 70%;
        background-image: linear-gradient(to right, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
        border-radius: 30% 70% 20% 40%;
        opacity: .25;
        animation: transform 20s ease-in-out infinite both alternate,
        blob_a 40s ease-in-out infinite both;
    }

    .box .blob b:first-child {
        width: 1000px;
        height: 1000px;
        top: -250px;
        left: -500px;
        transform: rotate(-180deg);
        animation: radious 30s ease-in-out infinite both alternate,
        blob_b 60s ease-in-out infinite both;
    }
    .sim-box-left{
        margin-top: 200px;
        padding: 15px;
        width: 350px;
        height: 350px;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }
    .sim-box {
        margin-top: 200px;
        padding: 15px;
        width: 350px;
        height: 350px;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
        transform: rotate(15deg);
        position: relative;
    }
    .sim-sub-box1{
        position: absolute;
        left: 30px;
        top:30px;
        padding: 15px;
        width: 150px;
        height: 280px;
        border-radius: 8px;
        background: pink;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }
    .sim-sub-box2{
        position: absolute;
        top:30px;
        right: 30px;
        padding: 15px;
        width: 100px;
        height: 100px;
        border-radius: 8px;
        background: pink;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }
    .sim-sub-box3{
        position: absolute;
        right: 30px;
        bottom: 30px;
        padding: 15px;
        width: 100px;
        height: 150px;
        border-radius: 8px;
        background: pink;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }
</style>
