<template>
    <div>
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

    .sim-box-left {
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

    .sim-sub-box1 {
        position: absolute;
        left: 30px;
        top: 30px;
        padding: 15px;
        width: 150px;
        height: 280px;
        border-radius: 8px;
        background: pink;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }

    .sim-sub-box2 {
        position: absolute;
        top: 30px;
        right: 30px;
        padding: 15px;
        width: 100px;
        height: 100px;
        border-radius: 8px;
        background: pink;
        box-shadow: 0 14px 28px 5px rgba(0, 0, 0, .25);
    }

    .sim-sub-box3 {
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
