<template>
    <div class="card">
        <div class="card-header">{{ titulo }}</div>

        <div :class="styleColorBody">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
       props: ['titulo', 'textColor', 'bgColor', 'border', 'textStyle'],
       computed: {
            styleBgColor: function() {
                return "card-body " + "bgColor";
            },

            styleColorBody: function(){
                return "card-body " + (this.textStyle || "");
            },

            styleBorder: function() {
                return "card " + (this.border || "");
            }

       }
    }
</script>
