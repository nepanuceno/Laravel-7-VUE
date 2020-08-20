<template>
   <div class="small-box bg-info">
        <div class="inner">
            <h3>150</h3>
            <p>New Orders</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</template>

<script>
export default {

    props: ['value', 'content']

}
</script>


<style media="screen">
    .small-box {
        border-radius: .25rem;
        box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);
        display: block;
        margin-bottom: 20px;
        position: relative;
    }

    .small-box > .small-box-footer {
        background: rgba(0,0,0,.1);
        color: rgba(255,255,255,.8);
        display: block;
        padding: 3px 0;
        position: relative;
        text-align: center;
        text-decoration: none;
        z-index: 10;
    }

    .small-box .icon {
        color: rgba(0,0,0,.15);
        z-index: 0;
    }

    .small-box .icon > i.fa, .small-box .icon > i.fab, .small-box .icon > i.far, .small-box .icon > i.fas, .small-box .icon > i.glyphicon, .small-box .icon > i.ion {
        font-size: 70px;
        top: 20px;
    }

    .small-box .icon > i {
        font-size: 90px;
        position: absolute;
        right: 15px;
        top: 15px;
        transition: all .3s linear;
    }

    *, ::after, ::before {
        box-sizing: border-box;
    }

    .small-box > .inner {
        padding: 10px;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    .bg-info, .bg-info > a {
        color: #fff !important;
    }

    h3, h3 {
        font-size: 1.75rem;
    }

    .col-lg-3 .small-box h3, .col-md-3 .small-box h3, .col-xl-3 .small-box h3 {
        font-size: 2.2rem;
    }

    .col-lg-3 .small-box h3, .col-md-3 .small-box h3, .col-xl-3 .small-box h3 {
        font-size: 1.6rem;
    }

    .small-box h3, .small-box p {
        z-index: 5;
    }

    .small-box h3 {
        font-size: 2.2rem;
        font-weight: 700;
        margin: 0 0 10px 0;
        padding: 0;
        white-space: nowrap;
    }

    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        margin-bottom: .5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

</style>
