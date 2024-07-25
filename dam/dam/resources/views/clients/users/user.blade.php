@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <style>
        @charset "UTF-8";:root{--primary-color:#061738;--secondary-color:#ee2761;--yellow-color:#ffc107;--text-gray-color:#606060;--white-color:#ffffff;--ofwhite-color:#f2f2f2;--black-color:#000000;--light-color:#fcfcfc;--light-color2:#aaaaaa;--dark-color:#242424;--sky-color:#647589;--border-color:#e7e7e7;--border-color2:#e4e4e4;--border-color3:#dddddd;--border-dark:#383434;--bg-gray-color:#fcfcfc;--gray-color:#fafbfe;--gray-color2:#f5f5f5;--font-jost:"Jost",sans-serif;--body-font-size:1.6rem;--body-font-weight:400;--body-line-height:2.8rem;--headings-weight:600;--transition:all 0.3s ease 0s;--container-fluid-offset:19rem}.color-scheme-1{--secondary-color:#f51c1c}.color-scheme-2{--secondary-color:#b79e8c}*,::after,::before{-webkit-box-sizing:border-box;box-sizing:border-box}html{scroll-behavior:smooth}body,html{min-height:100%;margin:0;font-size:62.5%;padding:0}body{font-family:var(--font-jost);font-size:var(--body-font-size,1.6rem);font-weight:var(--body-font-weight);font-style:normal;line-height:var(--body-line-height,25px);position:relative;visibility:visible;overflow-x:hidden;color:var(--black-color);background-color:var(--white-color)}h1,h2,h3,h4,h5,h6{font-weight:var(--headings-weight);margin:0}.h1,h1{font-size:2.3rem;line-height:3rem}@media only screen and (min-width:576px){.h1,h1{font-size:3rem;line-height:3.5rem}}@media only screen and (min-width:768px){.h1,h1{font-size:3.2rem;line-height:3.8rem}}@media only screen and (min-width:992px){.h1,h1{font-size:3.8rem;line-height:4.5rem}}@media only screen and (min-width:1200px){.h1,h1{font-size:4.2rem;line-height:5rem}}@media only screen and (min-width:1366px){.h1,h1{font-size:4.5rem;line-height:5.3rem}}@media only screen and (min-width:1600px){.h1,h1{font-size:5.5rem;line-height:6.5rem}}.h2,h2{font-size:2.2rem;line-height:2.6rem;font-weight:700}@media only screen and (min-width:768px){.h2,h2{font-size:2.5rem;line-height:3rem}}@media only screen and (min-width:1200px){.h2,h2{font-size:3rem;line-height:3.5rem}}@media only screen and (min-width:1600px){.h2,h2{font-size:3.5rem;line-height:4rem}}.h3,h3{font-size:1.7rem;line-height:2.4rem}@media only screen and (min-width:768px){.h3,h3{font-size:1.8rem;line-height:2.5rem}}@media only screen and (min-width:992px){.h3,h3{font-size:2rem;line-height:2.7rem}}@media only screen and (min-width:1200px){.h3,h3{font-size:2.2rem;line-height:2.8rem}}@media only screen and (min-width:1600px){.h3,h3{font-size:2.4rem;line-height:3rem}}.h4,h4{font-size:1.5rem;font-weight:600}@media only screen and (min-width:992px){.h4,h4{font-size:1.6rem;line-height:2.6rem}}.h5,h5{font-size:1.5rem;line-height:2.4rem;font-weight:400}@media only screen and (min-width:768px){.h5,h5{font-size:1.6rem;line-height:2.6rem}}.h6,h6{font-size:1.6rem;line-height:2.6rem;font-weight:400}@media only screen and (min-width:768px){.h6,h6{font-size:1.6rem;line-height:2.6rem}}p{margin-top:0;margin-bottom:1.8rem;color:var(--text-gray-color)}@media only screen and (max-width:767px){p{font-size:1.4rem;line-height:2.4rem}}p:last-child{margin-bottom:0}a,button{display:inline-block;cursor:pointer;-webkit-transition:var(--transition);transition:var(--transition);text-decoration:none;color:inherit}a,button,img,input,textarea{-webkit-transition:var(--transition);transition:var(--transition)}:focus{outline:0;-webkit-box-shadow:none;box-shadow:none}a:focus{text-decoration:none;outline:0}a:hover{text-decoration:none;color:var(--secondary-color)}button,input[type=submit]{cursor:pointer;font-family:var(--font-lato);font-size:var(--body-font-size);font-weight:var(--body-font-weight);line-height:var(--body-line-height)}input[type=number]{-moz-appearance:textfield}img{max-width:100%;height:auto}span{display:inline-block;-webkit-transition:var(--transition);transition:var(--transition)}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{opacity:1}input:-moz-placeholder,textarea:-moz-placeholder{opacity:1}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1}input:-ms-input-placeholder,textarea:-ms-input-placeholder{opacity:1}ul{margin:0;padding:0}ul:last-child{margin-bottom:0}li{list-style:none;line-height:1}hr{border-top-width:2px}.container,.container-fluid{width:100%;margin-right:auto;margin-left:auto}.container{padding-right:1.5rem;padding-left:1.5rem}.container-fluid{--offset-fluid:1.5rem;padding-right:var(--offset-fluid);padding-left:var(--offset-fluid)}@media only screen and (min-width:992px){.container-fluid{--offset-fluid:3rem}}@media only screen and (min-width:1366px){.container-fluid{--offset-fluid:calc(var(--container-fluid-offset) / 4.5)}}@media only screen and (min-width:1600px){.container-fluid{--offset-fluid:calc(var(--container-fluid-offset) / 2.5)}}@media only screen and (min-width:1800px){.container-fluid{--offset-fluid:var(--container-fluid-offset)}}.container-fluid-2{--offset-fluid:1.5rem;padding-right:var(--offset-fluid);padding-left:var(--offset-fluid)}@media only screen and (min-width:992px){.container-fluid-2{--offset-fluid:3rem}}@media only screen and (min-width:1366px){.container-fluid-2{--offset-fluid:4.5rem}}@media only screen and (min-width:1500px){.container-fluid-2{--offset-fluid:5rem}}@media only screen and (min-width:576px){.container{max-width:576px}}@media only screen and (min-width:768px){.container{max-width:768px}}@media only screen and (min-width:992px){.container{max-width:960px}}@media only screen and (min-width:1200px){.container{max-width:1200px}}@media only screen and (min-width:1400px){.container{max-width:1200px}}.row{--bs-gutter-x:3rem;--bs-gutter-y:0;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5)}.row>*{-ms-flex-negative:0;flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-bottom:var(--bs-gutter-y)}.col{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}@media only screen and (min-width:576px){.col-sm{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-sm-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-sm-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-sm-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-sm-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-sm-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-sm-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-sm-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media only screen and (min-width:480px){.row-cols-sm-u-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}}@media only screen and (min-width:768px){.col-md{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-md-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-md-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-md-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-md-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-md-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-md-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-md-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media only screen and (min-width:992px){.col-lg{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-lg-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-lg-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-lg-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-lg-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-lg-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-lg-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-lg-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media only screen and (min-width:1200px){.col-xl{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-xl-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-xl-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-xl-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-xl-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-xl-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-xl-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media only screen and (min-width:1600px){.col-xxl{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-xxl-auto>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-xxl-1>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-xxl-2>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-xxl-3>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-xxl-5>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-xxl-6>*{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}.col-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}@media only screen and (min-width:576px){.col-sm-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-sm-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-sm-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-sm-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-sm-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-sm-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-sm-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-sm-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-sm-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-sm-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-sm-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-sm-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-sm-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}}@media only screen and (min-width:768px){.col-md-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-md-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-md-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-md-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-md-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-md-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-md-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-md-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-md-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-md-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-md-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-md-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}}@media only screen and (min-width:992px){.col-lg-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-lg-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-lg-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-lg-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-lg-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-lg-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-lg-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-lg-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-lg-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-lg-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-lg-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-lg-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-lg-6{margin-left:50%}}@media only screen and (min-width:1200px){.col-xl-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-xl-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-xl-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-xl-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-xl-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-xl-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-xl-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-xl-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-xl-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-xl-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-xl-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-xl-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-xl-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}}@media only screen and (min-width:1400px){.col-xxl-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-xxl-1{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-xxl-2{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-xxl-3{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-xxl-4{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-xxl-5{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-xxl-6{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-xxl-7{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-xxl-8{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-xxl-9{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-xxl-10{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-xxl-11{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-xxl-12{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}}@media only screen and (max-width:767px){.row{margin-right:-10px;margin-left:-10px}.row>*{padding-right:10px;padding-left:10px}}@media only screen and (max-width:479px){.row{margin-right:-8px;margin-left:-8px}.row>*{padding-right:8px;padding-left:8px}}.row-reverse{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}@media only screen and (max-width:991px){.row-md-reverse{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}}.d-none{display:none!important}.display-block{display:block}@media only screen and (min-width:1200px){.d-xl-block{display:block!important}.d-xl-flex{display:-webkit-box;display:-ms-flexbox;display:flex}}@media only screen and (min-width:992px){.d-lg-block{display:block!important}.d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}}@media only screen and (min-width:768px){.d-md-block{display:block!important}.d-md-flex{display:-webkit-box;display:-ms-flexbox;display:flex}}@media only screen and (max-width:1199px){.d-xl-none{display:none}.col-md-order{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}}@media only screen and (max-width:991px){.d-md-2-none{display:none}.d-md-2-flex{display:-webkit-box;display:-ms-flexbox;display:flex}.col-md-2-order{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}}@media only screen and (max-width:767px){.d-sm-none{display:none}.d-sm-flex{display:-webkit-box;display:-ms-flexbox;display:flex}.col-sm-order{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}}@media only screen and (max-width:575px){.d-sm-2-none{display:none}.d-sm-2-flex{display:-webkit-box;display:-ms-flexbox;display:flex}.col-sm-2-order{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}}.header__transparent{position:absolute;left:0;right:0;top:0;z-index:9}.visually-hidden{position:absolute!important;overflow:hidden;width:1px;height:1px;margin:-1px;padding:0;border:0;word-wrap:normal!important}.section__heading--maintitle{position:relative;padding-bottom:2rem}.section__heading--maintitle::before{position:absolute;content:"";background:url(../img/other/heading-shape.png);width:174px;height:5px;bottom:0;left:50%;-webkit-transform:translatex(-50%);transform:translatex(-50%)}.section__heading--maintitle.style2::before{width:13rem;height:.2rem;background:var(--secondary-color)}.primary__btn{font-size:1.4rem;font-weight:var(--body-line-height);line-height:3.5rem;display:inline-block;height:3.5rem;padding:0 1.8rem;letter-spacing:.2px;border-radius:.3rem;background:var(--secondary-color);color:var(--white-color);border:0}.primary__btn:hover{background:var(--primary-color);color:var(--white-color)}@media only screen and (min-width:768px){.primary__btn{font-size:1.5rem;line-height:4rem;height:4rem;padding:0 2rem}}@media only screen and (min-width:992px){.primary__btn{font-size:1.6rem;line-height:4.5rem;height:4.5rem}}@media only screen and (min-width:1200px){.primary__btn{font-size:1.7rem;line-height:4.8rem;height:4.8rem;padding:0 2.3rem}}@media only screen and (min-width:1600px){.primary__btn{font-size:1.8rem;line-height:5.2rem;height:5.2rem;padding:0 2.5rem}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.swiper__nav--btn{width:4rem;height:4rem;background:var(--secondary-color);border-radius:50%;opacity:0;visibility:hidden;-webkit-transition:var(--transition);transition:var(--transition)}@media only screen and (max-width:767px){.swiper__nav--btn{width:3.5rem;height:3.5rem}}.swiper__nav--btn:hover{background:var(--primary-color)}.swiper__nav--btn::after{background:url(../img/icon/left-arrow-angle.png);width:9px;height:17px;font-size:0}.swiper__nav--btn.swiper-button-prev{left:0}.swiper__nav--btn.swiper-button-next{right:0}.swiper__nav--btn.swiper-button-next::after{background:url(../img/icon/right-arrow-angle.png)}.swiper-pagination{bottom:0!important}.swiper-pagination-bullet{width:1.5rem;height:1.5rem;border:1px solid var(--secondary-color);background:var(--white-color);opacity:1;vertical-align:middle;-webkit-transition:var(--transition);transition:var(--transition)}.swiper-pagination-bullet.swiper-pagination-bullet-active{background:var(--secondary-color);width:1.8rem;height:1.8rem}label{display:block;-webkit-transition:var(--transition);transition:var(--transition)}select{word-wrap:normal;font-family:var(--font-lato);font-size:var(--body-font-size);font-weight:var(--body-font-weight);line-height:var(--body-line-height)}#scroll__top{position:fixed;bottom:80px;right:25px;z-index:99;outline:0;background-color:var(--secondary-color);color:var(--white-color);-webkit-box-shadow:0 2px 22px rgba(0,0,0,.16);box-shadow:0 2px 22px rgba(0,0,0,.16);cursor:pointer;-webkit-transform:translateY(50px);transform:translateY(50px);opacity:0;visibility:hidden;-webkit-transition:.3s;transition:.3s;line-height:1;width:4.3rem;height:4.3rem;line-height:1;border-radius:50%;border:0}#scroll__top:hover{background:var(--primary-color)}#scroll__top.active{visibility:visible;opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}#scroll__top svg{width:25px;line-height:1}.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.overflow-hidden{overflow:hidden}.break{word-break:break-word}.uppercase{text-transform:uppercase}.capitalize{text-transform:capitalize}.text-white{color:var(--white-color)}.text-ofwhite{color:var(--ofwhite-color)}.text-black{color:var(--black-color)}.body__background{background:var(----gray-color)}.bg__primary{background:var(--primary-color)}.bg__secondary{background:var(--secondary-color)}.bg__gray--color{background:var(--bg-gray-color)}.bg__white{background:var(--white-color)}.bg__black{background:#1d1c1c}.text__primary{color:var(--primary-color)}.text__secondary{color:var(--secondary-color)}.text__secondary2{color:var(--secondary-color)}.position__relative{position:relative}.border-bottom{border-bottom:1px solid var(--border-color)}.border{border:1px solid var(--border-color)}.border-0{border:none}.border-radius-5{border-radius:.5rem}.border-radius-10{border-radius:1rem}.border-radius-50{border-radius:50%}.width-100{width:100%}@media only screen and (max-width:991px){.md-width-100{width:100%}}.tab_content{display:block}.tab_pane{display:none;-webkit-transition:var(--transition);transition:var(--transition)}.tab_pane:not(.show){opacity:0}.tab_pane.show{opacity:1}.tab_pane.active{display:block}.mobile_menu_open,.offCanvas__minicart_active,.offcanvas__filter--sidebar_active,.predictive__search--box_active,body.overlay__active{overflow-y:hidden}.mobile_menu_open::before,.offCanvas__minicart_active::before,.offcanvas__filter--sidebar_active::before,.predictive__search--box_active::before,body.overlay__active::before{position:absolute;content:"";background:#000;width:100%;height:100%;z-index:999;opacity:.5;cursor:crosshair}@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0);-moz-transform:translateZ(0);-ms-transform:translateZ(0);-o-transform:translateZ(0)}}@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}}.animate-fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}@-webkit-keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:none;transform:none}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}.section--padding{padding-top:6rem;padding-bottom:6rem}@media only screen and (min-width:768px){.section--padding{padding-top:7rem;padding-bottom:7rem}}@media only screen and (min-width:992px){.section--padding{padding-top:8rem;padding-bottom:8rem}}@media only screen and (min-width:1200px){.section--padding{padding-top:9rem;padding-bottom:9rem}}.section--nargin{margin-top:6rem;margin-bottom:6rem}@media only screen and (min-width:768px){.section--nargin{margin-top:8rem;margin-bottom:8rem}}@media only screen and (min-width:992px){.section--nargin{margin-top:9rem;margin-bottom:9rem}}@media only screen and (min-width:1200px){.section--nargin{margin-top:10rem;margin-bottom:10rem}}.p-0{padding:0}.pt-0{padding-top:0}.pb-0{padding-bottom:0}.m-0{margin:0}.mt-0{margin-top:0}.mb-0{margin-bottom:0}.mb-60{margin-bottom:3.5rem}@media only screen and (min-width:768px){.mb-60{margin-bottom:4rem}}@media only screen and (min-width:992px){.mb-60{margin-bottom:6rem}}.mb-55{margin-bottom:3.5rem}@media only screen and (min-width:992px){.mb-55{margin-bottom:5.5rem}}.mb-50{margin-bottom:2.8rem}@media only screen and (min-width:768px){.mb-50{margin-bottom:3rem}}@media only screen and (min-width:1200px){.mb-50{margin-bottom:4rem}}@media only screen and (min-width:1600px){.mb-50{margin-bottom:5rem}}.mb-40{margin-bottom:2.5rem}@media only screen and (min-width:992px){.mb-40{margin-bottom:3rem}}@media only screen and (min-width:1600px){.mb-40{margin-bottom:4rem}}.mb--n40{margin-bottom:-2.5rem}@media only screen and (min-width:992px){.mb--n40{margin-bottom:-2rem}}@media only screen and (min-width:1600px){.mb--n40{margin-bottom:-4rem}}.mb-35{margin-bottom:2rem}@media only screen and (min-width:1200px){.mb-35{margin-bottom:2.5rem}}@media only screen and (min-width:1200px){.mb-35{margin-bottom:3rem}}@media only screen and (min-width:1600px){.mb-35{margin-bottom:3.5rem}}.mb-30{margin-bottom:2.5rem}@media only screen and (min-width:1366px){.mb-30{margin-bottom:3rem}}.mb--n30{margin-bottom:-2.5rem}@media only screen and (min-width:1366px){.mb--n30{margin-bottom:-3rem}}.mb-28{margin-bottom:2.8rem}.mb--n28{margin-bottom:-2.8rem}.mb-25{margin-bottom:1.8rem}@media only screen and (min-width:992px){.mb-25{margin-bottom:2.5rem}}.mb-20{margin-bottom:1.5rem}@media only screen and (min-width:768px){.mb-20{margin-bottom:2rem}}.mb-15{margin-bottom:1rem}@media only screen and (min-width:1200px){.mb-15{margin-bottom:1.5rem}}.mb-12{margin-bottom:1rem}@media only screen and (min-width:992px){.mb-12{margin-bottom:1.2rem}}.mb-10{margin-bottom:.8rem}@media only screen and (min-width:992px){.mb-10{margin-bottom:1rem}}.mb-8{margin-bottom:.8rem}.mb-5{margin-bottom:.5rem}.mr-30{margin-right:3rem}.offcanvas__header--menu__open{line-height:1;display:none}.offcanvas__header--menu__open--btn>*{pointer-events:none}@media only screen and (max-width:991px){.offcanvas__header--menu__open{display:block}}.offcanvas__header--menu__open--svg{width:32px}.offcanvas__header{position:fixed;z-index:9999;top:0;left:0;width:100%;max-width:300px;height:100vh;-webkit-transition:var(--transition);transition:var(--transition);-webkit-transform:translateX(-100%);transform:translateX(-100%);background-color:var(--white-color);-webkit-box-shadow:0 0 10px rgba(0,0,0,.15);box-shadow:0 0 10px rgba(0,0,0,.15);opacity:0;visibility:hidden}@media only screen and (min-width:480px){.offcanvas__header{max-width:320px}}.offcanvas__header.open{-webkit-transform:translateX(0);transform:translateX(0);opacity:1;visibility:visible}.offcanvas__header.open~.offcanvas-overlay{visibility:visible;opacity:.75}.offcanvas-overlay{position:fixed;z-index:9998;top:0;left:0;visibility:hidden;width:100%;height:100%;-webkit-transition:var(--transition);transition:var(--transition);opacity:0;background-color:var(--black-color)}.offcanvas__inner{position:relative;height:100%}.offcanvas__logo{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:20px 15px}.offcanvas__close--btn{position:relative;-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center;width:2rem;height:2rem;padding:0;text-indent:-9999px;border:none;background-color:transparent}.offcanvas__close--btn::after,.offcanvas__close--btn::before{position:absolute;top:50%;left:0;width:100%;height:2px;margin-top:-1px;content:"";-webkit-transform:rotate(45deg);transform:rotate(45deg);background-color:var(--black-color)}.offcanvas__close--btn::after{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.offcanvas__menu{overflow-y:auto;height:100%}.offcanvas__menu_ul{overflow:auto;margin:0;padding:0;list-style:none;max-height:300px}.offcanvas__menu_li{position:relative;border-bottom:1px solid var(--border-color2)}.offcanvas__menu_li:first-child{border-top:1px solid var(--border-color2)}.offcanvas__menu_item{line-height:1;display:block;padding:15px 20px;text-transform:uppercase}.offcanvas__sub_menu{display:none;margin:0;padding:0;list-style:none}.offcanvas__sub_menu_li{position:relative;border-top:1px solid var(--border-color2)}.offcanvas__sub_menu_item{line-height:1;display:block;padding:15px 0 15px 30px}.offcanvas__sub_menu_item~.offcanvas__sub_menu .offcanvas__sub_menu_item{padding-left:40px}.offcanvas__sub_menu_toggle{font-size:20px;position:absolute;z-index:9;top:0;right:0;width:4rem;height:4.6rem;padding:0;border:none;border-radius:0;background-color:transparent}.offcanvas__sub_menu_toggle::after,.offcanvas__sub_menu_toggle::before{position:absolute;top:50%;left:50%;width:12px;height:2px;content:"";-webkit-transition:var(--transition);transition:var(--transition);-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);background-color:var(--black-color)}.offcanvas__sub_menu_toggle:not(.active)::after{-webkit-transform:translateX(-50%) translateY(-50%) rotate(90deg);transform:translateX(-50%) translateY(-50%) rotate(90deg)}.offcanvas__account--items{padding:28px 17px 20px}.offcanvas__account--items__icon{width:3rem;height:3rem;text-align:center;background:var(--secondary-color);line-height:2.8rem;border-radius:50%;color:var(--white-color)}.offcanvas__account--items__label{font-size:1.5rem;font-weight:600;margin-left:6px}.offcanvas__language--switcher{font-weight:500;font-family:var(--font-poppins)}.offcanvas__language--switcher>*{pointer-events:none}.offcanvas__dropdown--language{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);bottom:100%;opacity:0;visibility:hidden;margin-bottom:15px;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color)}.offcanvas__dropdown--language.active{opacity:1;visibility:visible;margin-bottom:8px}.offcanvas__account--currency{position:relative;padding:0 17px}.offcanvas__account--currency__menu{font-family:var(--font-poppins);font-weight:500}.offcanvas__account--currency__menu>*{pointer-events:none}.offcanvas__account--currency__submenu{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);bottom:100%;opacity:0;visibility:hidden;margin-bottom:15px;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color)}.offcanvas__account--currency__submenu.active{opacity:1;visibility:visible;margin-bottom:8px}.offcanvas__stikcy--toolbar{position:fixed;bottom:0;background:var(--white-color);left:0;right:0;z-index:99;-webkit-box-shadow:0 0 9px rgba(0,0,0,.12);box-shadow:0 0 9px rgba(0,0,0,.12);padding:10px 20px;display:none}@media only screen and (min-width:500px){.offcanvas__stikcy--toolbar{padding:10px 40px}}@media only screen and (min-width:768px){.offcanvas__stikcy--toolbar{padding:10px 60px}}@media only screen and (max-width:991px){.offcanvas__stikcy--toolbar{display:block}}.offcanvas__stikcy--toolbar__btn{position:relative;text-align:center}.offcanvas__stikcy--toolbar__btn>*{pointer-events:none}.offcanvas__stikcy--toolbar__btn:hover .offcanvas__stikcy--toolbar__icon{background:var(--primary-color);color:var(--white-color)}.offcanvas__stikcy--toolbar__icon{width:3rem;height:3rem;line-height:2.8rem;text-align:center;background:var(--secondary-color);border-radius:50%;color:var(--white-color)}.offcanvas__stikcy--toolbar__label{display:block;font-size:1.2rem;font-weight:600;margin-top:6px}.header__sticky.sticky{position:fixed;width:100%;top:0;background:var(--white-color);left:0;z-index:99;padding:1.5rem 0;-webkit-box-shadow:0 0 7px rgba(0,0,0,.15);box-shadow:0 0 7px rgba(0,0,0,.15);-webkit-transition:.3s;transition:.3s}.header__sticky.sticky .header__sticky--block{display:block!important}.header__sticky.sticky .header__sticky--none{display:none!important}@media only screen and (max-width:991px){.header__sticky.sticky .header__menu.header__sticky--block{display:none!important}}.header__sticky .header__sticky--block{display:none!important}.header__topbar{padding:1rem 0}@media only screen and (min-width:992px){.header__topbar{padding:1.2rem 0}}@media only screen and (min-width:1600px){.header__topbar{padding:1.7rem 0}}@media only screen and (max-width:991px){.header__topbar--inner{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}}.main__logo--title{line-height:2rem}@media only screen and (max-width:575px){.header__shipping--wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.header__shipping--text{font-size:1.4rem;line-height:2.2rem;margin-right:1.5rem;padding-right:1.5rem;position:relative}@media only screen and (max-width:767px){.header__shipping--text{text-align:center}}@media only screen and (min-width:992px){.header__shipping--text{font-size:1.6rem;line-height:2.4rem}}@media only screen and (max-width:575px){.header__shipping--text{margin-right:0;padding-right:0}.header__shipping--text:last-child{margin-bottom:0}}.header__shipping--text:last-child{margin-right:0;padding-right:0}.header__shipping--text:last-child::before{display:none}.header__shipping--text::before{position:absolute;content:"";width:.1rem;height:100%;background:var(--white-color);right:0;top:50%;-webkit-transform:translatey(-50%);transform:translatey(-50%)}@media only screen and (max-width:575px){.header__shipping--text::before{display:none}}.header__shipping--text__icon{margin-right:.5rem}.header__shipping--text__link:hover{color:var(--primary-color)}.header__discount--text{font-size:1.6rem}@media only screen and (min-width:992px){.header__discount--text{font-size:1.6rem}}@media only screen and (min-width:1200px){.header__discount--text{font-size:1.7rem}}@media only screen and (min-width:1600px){.header__discount--text{font-size:1.8rem}}.header__discount--icon__img{vertical-align:middle;margin-right:.4rem}@media only screen and (max-width:991px){.language__currency{padding:5px 20px}}.language__currency--list{position:relative;margin-right:1.5rem;padding-right:1.5rem}.language__currency--list:last-child{margin-right:0;padding-right:0}.language__currency--list:last-child::before{display:none}.language__currency--list::before{position:absolute;content:"";width:1px;height:100%;background:var(--white-color);right:0;top:0}.language__switcher{font-size:1.5rem}.language__switcher>*{pointer-events:none}@media only screen and (min-width:992px){.language__switcher{font-size:1.6rem;line-height:2.4rem}}.language__switcher--icon__img{vertical-align:middle;margin-right:3px}.language__switcher:hover{color:var(--primary-color)}.language__switcher:hover span{color:var(--primary-color)}.language__switcher:hover svg{color:var(--primary-color)}.language__switcher svg{-webkit-transition:var(--transition);transition:var(--transition)}.dropdown__language{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);top:100%;opacity:0;visibility:hidden;margin-top:28px;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color)}.dropdown__language.active{opacity:1;visibility:visible;margin-top:17px}.language__items:last-child .language__text{border-bottom:0}.language__text{display:block;font-size:1.4rem;padding:10px 14px;background:var(--gray-color2);border-bottom:1px solid var(--border-color2)}.language__text:hover{background:var(--primary-color);color:var(--white-color);border-color:var(--primary-color)}.account__currency{margin-right:25px;position:relative}@media only screen and (min-width:1200px){.account__currency{margin-right:32px}}.account__currency--link{font-size:1.5rem}.account__currency--link>*{pointer-events:none}@media only screen and (min-width:992px){.account__currency--link{font-size:1.6rem;line-height:2.4rem}}.account__currency--link:hover{color:var(--primary-color)}.account__currency--link:hover span{color:var(--primary-color)}.account__currency--link:hover svg{color:var(--primary-color)}.account__currency--link svg{-webkit-transition:var(--transition);transition:var(--transition)}.dropdown__currency{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);top:100%;opacity:0;visibility:hidden;margin-top:28px;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color)}.dropdown__currency.active{opacity:1;visibility:visible;margin-top:17px}.currency__items:last-child .currency__text{border-bottom:0}.currency__text{display:block;font-size:1.4rem;padding:1rem 1.4rem;background:var(--gray-color2);border-bottom:1px solid var(--border-color2)}.currency__text:hover{background:var(--primary-color);color:var(--white-color);border-color:var(--primary-color)}.main__header{padding:1.2rem 0}@media only screen and (min-width:768px){.main__header{padding:1.5rem 0}}@media only screen and (min-width:992px){.main__header{padding:2rem 0}}.main__logo--img{max-width:120px}@media only screen and (min-width:480px){.main__logo--img{max-width:155px}}@media only screen and (min-width:768px){.main__logo--img{max-width:100%}}.header__search--form{border:1px solid var(--border-color)}.select{position:relative}.select::before{border-bottom:2px solid var(--black-color);border-right:2px solid var(--black-color);content:"";display:block;height:7px;margin-top:-4px;pointer-events:none;position:absolute;right:18px;top:50%;width:7px;-webkit-transform-origin:66% 66%;transform-origin:66% 66%;-webkit-transform:rotate(45deg);transform:rotate(45deg);opacity:.7}.header__select--inner{border:0;background:var(--white-color);height:5rem;padding:0 3.3rem 0 1.8rem;-webkit-appearance:none;cursor:pointer;font-size:1.5rem;color:var(--text-gray-color)}@media only screen and (min-width:1200px){.header__select--inner{padding:0 4.3rem 0 2rem}}.header__search--box{position:relative;width:35rem}@media only screen and (min-width:992px){.header__search--box{width:27rem}}@media only screen and (min-width:1200px){.header__search--box{width:39.5rem}}.header__search--input{width:100%;border:0;border-left:1px solid var(--border-color);height:5rem;padding:0 7rem 0 2.2rem;font-size:1.5rem;color:var(--text-gray-color)}.header__search--input:focus::-webkit-input-placeholder{color:#000}@media only screen and (min-width:1200px){.header__search--input{padding:0 7rem 0 2.2rem}}.header__search--button{position:absolute;top:-1px;right:-1px;height:102%;border:0;padding:0 1.5rem;line-height:2rem;background:var(--secondary-color)}.header__search--button:hover{background:var(--primary-color)}.header__account--items{margin-right:2rem}.header__account--items:last-child{margin-right:0}@media only screen and (min-width:992px){.header__account--items{margin-right:2rem}}@media only screen and (min-width:1200px){.header__account--items{margin-right:3rem}}@media only screen and (max-width:575px){.header__account--items{margin-right:1rem}}@media only screen and (min-width:992px){.header__account--search__items.mobile__d--block{display:none}}.header__account--btn{position:relative;color:var(--text-gray-color);text-align:center}.header__account--btn>*{pointer-events:none}.header__account--btn:hover{color:var(--secondary-color)}.header__account--btn__text{display:block;margin-top:.1rem;font-size:1.5rem;line-height:2.4rem}@media only screen and (min-width:1200px){.header__account--btn__text{font-size:1.6rem}}@media only screen and (max-width:575px){.header__account--btn__text{display:none}}.search__open--btn>*{pointer-events:none}.items__count{position:absolute;right:-.5rem;top:-1.3rem;width:2rem;height:2rem;font-size:1rem;line-height:2rem;background:var(--secondary-color);text-align:center;border-radius:50%;color:var(--white-color)}@media only screen and (min-width:992px){.items__count{right:-.2rem;top:-1rem}}.items__count.style2{right:-.7rem}@media only screen and (min-width:992px){.items__count.style2{right:-1.4rem}}.items__count.wishlist{top:-1rem;right:.5rem}.items__count.wishlist.style2{right:-1rem}.predictive__search--title{margin-bottom:15px}@media only screen and (min-width:768px){.predictive__search--title{margin-bottom:20px}}@media only screen and (min-width:992px){.predictive__search--title{margin-bottom:30px}}.predictive__search--box{background:var(--white-color);-webkit-box-shadow:0 -4px 27px rgba(62,70,120,.16);box-shadow:0 -4px 27px rgba(62,70,120,.16);position:relative;position:fixed;left:0;right:0;top:0;opacity:0;visibility:hidden;z-index:999;-webkit-transition:all .3s ease 0s;transition:all .3s ease 0s;-webkit-transform:translateY(-100%);transform:translateY(-100%)}.predictive__search--box.active{opacity:1;visibility:visible;-webkit-transform:translateY(0);transform:translateY(0)}.predictive__search--box__inner{padding:20px 16px;text-align:center}@media only screen and (min-width:576px){.predictive__search--box__inner{padding:22px 50px}}@media only screen and (min-width:768px){.predictive__search--box__inner{padding:30px 80px}}@media only screen and (min-width:992px){.predictive__search--box__inner{padding:30px 150px}}.predictive__search--form{width:100%;position:relative}.predictive__search--input{width:100%;height:5rem;border:1px solid var(--border-color2);padding:0 80px 0 15px;font-size:1.6rem;font-weight:400;border-radius:5px}.predictive__search--input:focus{border-color:var(--secondary-color)}.predictive__search--input:focus::-webkit-input-placeholder{color:#000}@media only screen and (max-width:576px){.predictive__search--input{height:45px}}.predictive__search--button{position:absolute;top:0;right:0;height:100%;padding:0;background:var(--secondary-color);border:0;width:5rem;text-align:center;color:var(--white-color);border-radius:0 5px 5px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.predictive__search--button:hover{background:var(--primary-color)}@media only screen and (min-width:768px){.predictive__search--button{width:6rem}}.predictive__search--close__btn{position:absolute;top:20px;right:40px;padding:0;border:0;background:inherit}.predictive__search--close__btn>*{pointer-events:none}@media only screen and (max-width:576px){.predictive__search--close__btn{right:15px}}.predictive__search--close__btn:hover{color:var(--primary-color);-webkit-transform:scale(1.3);transform:scale(1.3)}@media only screen and (min-width:992px){.header__bottom{border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color)}}.header__menu--items{margin-right:3rem;position:relative}@media only screen and (min-width:992px){.header__menu--items{margin-right:2.5rem}}@media only screen and (min-width:1200px){.header__menu--items{margin-right:3rem}}@media only screen and (min-width:1366px){.header__menu--items{margin-right:4rem}}@media only screen and (min-width:1600px){.header__menu--items{margin-right:6rem}}.header__menu--items:last-child{margin-right:0}.header__menu--items.style2{margin-right:2rem}@media only screen and (min-width:992px){.header__menu--items.style2{margin-right:2.5rem}}@media only screen and (min-width:1200px){.header__menu--items.style2{margin-right:3rem}}@media only screen and (min-width:1366px){.header__menu--items.style2{margin-right:3.5rem}}@media only screen and (min-width:1600px){.header__menu--items.style2{margin-right:5rem}}.header__menu--items:hover .header__menu--link{color:var(--secondary-color)}.header__menu--items:hover .header__sub--menu{visibility:visible;margin-top:0;opacity:1}.header__menu--items:hover .header__mega--menu{visibility:visible;margin-top:0;opacity:1}.header__menu--link{font-size:1.6rem;line-height:2.5rem;padding:16px 0;color:var(--text-gray-color)}@media only screen and (min-width:1200px){.header__menu--link{font-size:1.7rem;padding:16px 0}}@media only screen and (min-width:1600px){.header__menu--link{padding:20px 0}}.menu__arrowdown--icon{margin-left:3px}.header__sub--menu{position:absolute;z-index:9;top:100%;left:0;visibility:hidden;width:220px;margin:0;margin-top:20px;padding:20px;list-style:none;-webkit-transition:var(--transition);transition:var(--transition);opacity:0;background-color:var(--white-color);-webkit-box-shadow:0 10px 20px rgba(0,0,0,.15);box-shadow:0 10px 20px rgba(0,0,0,.15);border-radius:10px}.header__sub--menu__link{font-size:1.5rem;display:block;padding:10px 0}.mega__menu--items{position:static}.header__mega--menu{position:absolute;z-index:9;top:100%;left:0;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;width:100%;margin:0;margin-top:20px;padding:25px;list-style:none;-webkit-transition:var(--transition);transition:var(--transition);visibility:hidden;opacity:0;background-color:var(--white-color);-webkit-box-shadow:0 10px 20px rgba(0,0,0,.15);box-shadow:0 10px 20px rgba(0,0,0,.15);border-radius:10px}.header__mega--menu__li{padding:3px 15px;width:25%}.header__mega--subtitle{font-weight:600;font-size:1.6rem;margin-bottom:15px}.header__mega--sub__menu--title{font-size:1.5rem;padding:8px 0}.offCanvas__minicart{position:fixed;width:310px;height:100%;padding:20px 15px 33px;background:var(--white-color);z-index:999;right:0;top:0;-webkit-transition:.4s;transition:.4s;-webkit-transform:translateX(100%);transform:translateX(100%);overflow-y:auto;-webkit-box-shadow:0 0 15px rgba(5,0,0,.1);box-shadow:0 0 15px rgba(5,0,0,.1)}.offCanvas__minicart.active{opacity:1;visibility:visible;-webkit-transform:translateX(0);transform:translateX(0)}@media only screen and (min-width:480px){.offCanvas__minicart{width:375px}}.minicart__header--top{margin-bottom:10px}.minicart__header--desc{font-size:1.6rem;color:var(--text-gray-color)}@media only screen and (min-width:480px){.minicart__header--desc{font-size:1.7rem}}.minicart__title{font-weight:600}.minicart__close--btn{padding:0;background:inherit;border:0;line-height:1.5rem;color:var(--black-color)}.minicart__close--btn>*{pointer-events:none}.minicart__close--btn:hover{color:var(--secondary-color);-webkit-transform:scale(1.3);transform:scale(1.3)}.minicart__close--icon{width:22px}.minicart__product{margin-bottom:17px}.minicart__product--items{margin-top:18px;padding-top:18px;border-top:1px solid var(--border-color2)}@media only screen and (min-width:1600px){.minicart__product--items{margin-top:22px;padding-top:22px}}.minicart__product--remove{border:0;padding:0;background:0 0;font-size:1.2rem;text-transform:uppercase;text-decoration:underline;font-weight:700;opacity:.7}.minicart__product--remove:hover{color:var(--secondary-color)}.minicart__thumb{width:100px;line-height:1}@media only screen and (min-width:480px){.minicart__thumb{width:120px}}.minicart__text{width:calc(100% - 100px);padding-left:10px}@media only screen and (min-width:480px){.minicart__text{width:calc(100% - 120px);padding-left:13px}}.minicart__subtitle{font-size:1.5rem;font-weight:600;line-height:24px;margin-bottom:2px}@media only screen and (min-width:480px){.minicart__subtitle{font-size:1.6rem}}.color__variant{opacity:.8;margin-bottom:4px;line-height:20px}.minicart__price{margin-bottom:9px}.minicart__quantity{margin-right:15px}.quantity__box{text-align:center;display:-webkit-box;display:-ms-flexbox;display:flex}.quantity__value{display:inline-block;border:1px solid var(--border-color2);margin:0;width:3.3rem;height:3rem;text-align:center;padding:0;background:var(--gray-color2);cursor:pointer;font-size:2rem;font-weight:500}.quantity__value.decrease{margin-right:-4px;border-radius:13px 0 0 13px}.quantity__value.increase{margin-left:-4px;border-radius:0 13px 13px 0}input.quantity__number{text-align:center;border:none;border-top:1px solid var(--border-color2);border-bottom:1px solid var(--border-color2);margin:0;width:3.3rem;height:3rem}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}.minicart__amount{padding:13px 0;border-top:1px solid var(--border-color2);border-bottom:1px solid var(--border-color2)}.minicart__amount_list{margin-bottom:10px}.minicart__amount_list:last-child{margin-bottom:0}.minicart__conditions{padding:16px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}@media only screen and (min-width:1600px){.minicart__conditions{padding:20px 0}}.minicart__conditions--input{vertical-align:middle;margin-right:8px}.minicart__conditions--label{font-weight:600;letter-spacing:.5px;color:var(--text-gray-color)}.minicart__conditions--link{color:var(--secondary-color);text-decoration:underline}.minicart__conditions--link:hover{color:var(--primary-color);text-decoration:underline}.minicart__button--link{font-size:1.5rem;font-weight:600;line-height:4.5rem;height:4.5rem;margin-right:14px}.minicart__button--link:last-child{margin-right:0}@media only screen and (min-width:992px){.header__account2--items{margin-right:1.2rem}}@media only screen and (min-width:1200px){.header__account2--items{margin-right:2rem}}.header__topbar--style3{padding:1rem 0;border-bottom:1px solid var(--border-color)}.language__currency--list.style3::before{position:absolute;content:"";width:1px;height:100%;background:var(--primary-color);right:0;top:0}.header__social--list{margin-right:1.8rem}.header__social--list:last-child{margin-right:0}.main__header--style3{padding:1rem 0}@media only screen and (max-width:767px){.main__header--style3{padding:2rem 0}}.header__menu--items.style3{margin-right:1.8rem}@media only screen and (min-width:992px){.header__menu--items.style3{margin-right:2rem}}@media only screen and (min-width:1200px){.header__menu--items.style3{margin-right:2.5rem}}@media only screen and (min-width:1366px){.header__menu--items.style3{margin-right:2rem}}@media only screen and (min-width:1600px){.header__menu--items.style3{margin-right:3rem}}.header__menu--items.style3:last-child{margin-right:0}.header__mega--menu__li.style3{width:18%}.header__mega--menu__li.style3:last-child{width:28%}.mega__menu--banner{overflow:hidden}.mega__menu--banner:hover .mega__menu--banner__img{-webkit-transform:scale(1.04);transform:scale(1.04)}.mega__menu--banner:hover .mega__menu--banner__text{color:var(--secondary-color)}.mega__menu--banner__text{position:absolute;top:50%;left:50%;-webkit-transform:translateY(-50%) translatex(-50%);transform:translateY(-50%) translatex(-50%);text-decoration:underline;font-size:1.7rem;font-weight:500;padding:8px 12px;color:var(--primary-color);background:var(--white-color);border-radius:5px}.newsletter__subscribe--style3 .newsletter__subscribe--input{background:var(--white-color);-webkit-box-shadow:2px 0 20px rgba(0,0,0,.06);box-shadow:2px 0 20px rgba(0,0,0,.06)}.newsletter__subscribe--style3 .newsletter__subscribe--button:hover{background:var(--white-color);-webkit-box-shadow:2px 0 20px rgba(0,0,0,.06);box-shadow:2px 0 20px rgba(0,0,0,.06)}@media only screen and (min-width:768px){.header__topbar--inner.style3{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}.home1__slider--bg{background:url(../img/slider/home1-slider1.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home1__slider--bg{background-position:0}}.home1__slider--bg.two{background:url(../img/slider/home1-slider2.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home1__slider--bg.two{background-position:0}}.home1__slider--bg.three{background:url(../img/slider/home1-slider3.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home1__slider--bg.three{background-position:0}}.hero__slider--items{position:relative}.hero__slider--items__inner{padding:6rem 0}@media only screen and (min-width:768px){.hero__slider--items__inner{padding:6rem 0}}@media only screen and (min-width:992px){.hero__slider--items__inner{padding:6.5rem 0}}@media only screen and (min-width:1200px){.hero__slider--items__inner{padding:7rem 0}}@media only screen and (min-width:1600px){.hero__slider--items__inner{padding:14.7rem 0}}@media only screen and (max-width:1599px){.slider__content{padding-left:5rem}}@media only screen and (max-width:1199px){.slider__content{padding-left:5rem}}@media only screen and (max-width:991px){.slider__content{padding-left:3.5rem}}@media only screen and (max-width:767px){.slider__content{text-align:center;padding-left:0}}.slider__content.center{padding-left:0}.slider__content--maintitle{margin-bottom:2rem}@media only screen and (min-width:768px){.slider__content--maintitle{margin-bottom:1.3rem}}@media only screen and (min-width:992px){.slider__content--maintitle{margin-bottom:1.5rem}}@media only screen and (min-width:1600px){.slider__content--maintitle{margin-bottom:1.8rem}}.slider__content--desc{font-size:1.6rem;line-height:2.5rem}@media only screen and (min-width:992px){.slider__content--desc{font-size:1.7rem;line-height:2.8rem}}@media only screen and (min-width:1600px){.slider__content--desc{font-size:1.8rem;line-height:3.1rem}}.slider__content--desc.desc1{font-weight:500}@media only screen and (max-width:1199px){.slider__content--desc.mb-40{margin-bottom:2.8rem}}@media only screen and (max-width:1200px){.slider__content--desc.mb-40{margin-bottom:2.5rem}}@media only screen and (max-width:991px){.slider__content--desc.mb-40{margin-bottom:2.2rem}}@media only screen and (max-width:991px){.slider__content--desc.mb-40{margin-bottom:1.8rem}}.hero__slider--activation .swiper-button-prev{left:1rem}@media only screen and (min-width:768px){.hero__slider--activation .swiper-button-prev{left:1rem}}@media only screen and (min-width:992px){.hero__slider--activation .swiper-button-prev{left:2rem}}.hero__slider--activation .swiper-button-next{right:1rem}@media only screen and (min-width:768px){.hero__slider--activation .swiper-button-next{right:1rem}}@media only screen and (min-width:992px){.hero__slider--activation .swiper-button-next{right:2rem}}.slider__text--shape__icon{vertical-align:middle;margin-right:.3rem}.swiper-slide-active .slider__content>*{-webkit-animation-name:fadeInUp;animation-name:fadeInUp;-webkit-animation-duration:1.2s;animation-duration:1.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.swiper-slide-active .slider__content--desc{-webkit-animation-delay:.3s;animation-delay:.3s}.swiper-slide-active .slider__content--maintitle{-webkit-animation-delay:.5s;animation-delay:.5s}.swiper-slide-active .slider__content--desc.desc2{-webkit-animation-delay:.7s;animation-delay:.7s}.swiper-slide-active .slider__btn{-webkit-animation-delay:.8s;animation-delay:.8s}.primary__btn--arrow__icon{vertical-align:middle;margin-left:.3rem}.home2__slider--bg{background:url(../img/slider/home2-slider1.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home2__slider--bg{background-position:25%}}.home2__slider--bg.two{background:url(../img/slider/home2-slider2.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home2__slider--bg.two{background-position:25%}}.home2__slider--bg.three{background:url(../img/slider/home2-slider3.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home2__slider--bg.three{background-position:25%}}@media only screen and (min-width:992px){.home2__slider--bg__inner{padding:7rem 0}}@media only screen and (min-width:1200px){.home2__slider--bg__inner{padding:8rem 0}}@media only screen and (min-width:1366px){.home2__slider--bg__inner{padding:9.8rem 0}}@media only screen and (min-width:1600px){.home2__slider--bg__inner{padding:17rem 0}}.home3__slider--bg{background:url(../img/slider/home3-slider1.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home3__slider--bg{background-position:25%}}.home3__slider--bg.two{background:url(../img/slider/home3-slider2.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home3__slider--bg.two{background-position:25%}}.home3__slider--bg.three{background:url(../img/slider/home3-slider3.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:767px){.home3__slider--bg.three{background-position:25%}}.slider__content.style3.center{padding-left:0}.swiper:hover .swiper__nav--btn{opacity:1;visibility:visible}@media only screen and (max-width:767px){.product__tab--primary__btn{-ms-flex-wrap:wrap;flex-wrap:wrap}}.product__tab--primary__btn__list{font-size:1.6rem;margin-right:20px;cursor:pointer;font-weight:600;-webkit-transition:var(--transition);transition:var(--transition)}@media only screen and (max-width:767px){.product__tab--primary__btn__list{font-size:1.4rem}}.product__tab--primary__btn__list.active{color:var(--secondary-color)}.product__tab--primary__btn__list:hover{color:var(--secondary-color)}.product__tab--primary__btn__list:last-child{margin-right:0}@media only screen and (max-width:575px){.product__tab--primary__btn__list{line-height:22px;margin:5px 10px}}@media only screen and (min-width:768px){.product__tab--primary__btn__list{margin-right:30px;font-size:1.7rem}}@media only screen and (min-width:992px){.product__tab--primary__btn__list{margin-right:45px;font-size:1.8rem}}.product__items--thumbnail{position:relative;overflow:hidden}.product__secondary--img{position:absolute;top:0;left:0;right:0;opacity:0;visibility:hidden;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.product__items:hover .product__items--img{-webkit-transform:scale(1.04);transform:scale(1.04)}.product__items:hover .product__secondary--img{opacity:1;visibility:visible}.product__items--link{display:block}@media only screen and (max-width:991px){.product__items--link{width:100%}}.product__items--img{display:block;width:100%}.product__items--action__list{margin-right:.6rem}.product__items--action__list:last-child{margin-right:0}@media only screen and (min-width:1366px){.product__items--action__list{margin-right:.8rem}}@media only screen and (min-width:1600px){.product__items--action__list{margin-right:1.4rem}}.product__items--action__btn{border:1px solid var(--border-color);height:4.4rem;line-height:4rem;padding:0 .6rem;color:var(--text-gray-color);border-radius:.3rem}@media only screen and (min-width:992px){.product__items--action__btn{height:4rem;line-height:3.6rem}}@media only screen and (min-width:1200px){.product__items--action__btn{padding:0 .7rem;height:4.2rem;line-height:3.8rem}}@media only screen and (min-width:1366px){.product__items--action__btn{padding:0 .7rem;height:4.4rem;line-height:4rem}}@media only screen and (min-width:1600px){.product__items--action__btn{padding:0 1rem;height:4.4rem;line-height:4rem}}@media only screen and (max-width:575px){.product__items--action__btn{height:3.6rem;line-height:3.2rem}}.product__items--action__btn.add__to--cart{padding:0 .7rem;font-size:1.5rem}@media only screen and (min-width:1200px){.product__items--action__btn.add__to--cart{font-size:1.4rem;padding:0 .6rem}}@media only screen and (min-width:1366px){.product__items--action__btn.add__to--cart{padding:0 1rem}}@media only screen and (min-width:1600px){.product__items--action__btn.add__to--cart{padding:0 1.3rem}}.product__items--action__btn.add__to--cart:hover span{color:var(--white-color)}.product__items--action__btn--svg{vertical-align:middle}@media only screen and (max-width:1365px){.product__items--action__btn--svg{width:2rem}}.product__items--action__btn:hover{background:var(--secondary-color);color:var(--white-color);border-color:var(--secondary-color)}.product__items--content{padding-top:1.2rem}.product__items--content__subtitle{font-size:1.4rem;line-height:2.2rem;color:var(--text-gray-color)}@media only screen and (min-width:992px){.product__items--content__subtitle{font-size:1.5rem}}@media only screen and (max-width:400px){.product__items--content__title{font-size:1.3rem;line-height:2rem;margin-bottom:.3rem}}@media only screen and (max-width:575px){.add__to--cart__text{display:none}}.product__items--price{margin-bottom:.5rem}.current__price{font-size:1.5rem;color:var(--text-gray-color)}.old__price{font-size:1.5rem;color:var(--text-gray-color);text-decoration:line-through}.price__divided{width:1.2rem;height:.1rem;background:var(--text-gray-color);vertical-align:middle;margin:0 .3rem}.product__rating{margin-bottom:1.6rem}.rating__list{margin-right:.5rem}@media only screen and (min-width:768px){.rating__list{margin-right:.8rem}}.rating__list:last-child{margin-right:0}.rating__list--icon{color:var(--yellow-color)}.product__badge{position:absolute;top:12px;left:12px}@media only screen and (min-width:576px){.product__badge{top:20px;left:20px}}.product__badge--items{height:2rem;line-height:2rem;padding:0 7px;font-weight:300;background:var(--secondary-color);color:var(--white-color);border-radius:6px 0 6px;font-size:1.4rem}@media only screen and (max-width:575px){.product__badge--items{font-size:1.3rem}}.product__items:hover .product__items--action__style2{opacity:1;visibility:visible;right:1.5rem}@media only screen and (max-width:575px){.product__items:hover .product__items--action__style2{right:1rem}}.product__items:hover .product__add-to__cart--btn__style2{padding:.8rem 0;max-height:5rem}@media only screen and (min-width:1600px){.product__items:hover .product__add-to__cart--btn__style2{padding:1.1rem 0}}@media only screen and (max-width:575px){.product__items:hover .product__add-to__cart--btn__style2{padding:.5rem 0}}.product__add-to__cart--btn__style2{position:absolute;bottom:0;left:0;right:0;background:var(--secondary-color);color:var(--white-color);text-align:center;padding:0;max-height:0}@media only screen and (max-width:575px){.product__add-to__cart--btn__style2{padding:.3rem 0;max-height:5rem}}.product__add-to__cart--btn__style2:hover{background-color:var(--primary-color);color:var(--white-color)!important}.product__items--action__style2{position:absolute;top:1.5rem;right:0;opacity:0;visibility:hidden;-webkit-transition:var(--transition);transition:var(--transition)}@media only screen and (max-width:575px){.product__items--action__style2{opacity:1;visibility:visible;right:1rem}}.product__items--action__style2--list{margin-bottom:1rem}.product__items--action__style2--list:last-child{margin-bottom:0}.product__items--action__style2--btn{width:3rem;height:3rem;line-height:2.6rem;text-align:center;border:1px solid var(--text-gray-color);color:var(--text-gray-color);border-radius:.3rem}.product__items--action__style2--btn:hover{background-color:var(--secondary-color);border-color:var(--secondary-color);color:var(--white-color)}@media only screen and (min-width:480px){.product__items--action__style2--btn{width:3.5rem;height:3.5rem;line-height:3.2rem}}@media only screen and (min-width:576px){.product__items--action__style2--btn{width:4rem;height:4rem;line-height:3.8rem}}.product__grid--heading__maintitle{font-weight:600;padding-bottom:.8rem}@media only screen and (min-width:992px){.product__grid--heading__maintitle{font-size:2.4rem;line-height:3rem}}.product__grid--heading__maintitle::before{position:absolute;content:"";width:6rem;height:.2rem;background:var(--secondary-color);bottom:0;left:0}.product__grid--items__img{display:block}.product__items--grid{background:var(--white-color);-webkit-box-shadow:1px 0 72px rgba(0,0,0,.1);box-shadow:1px 0 72px rgba(0,0,0,.1);margin-bottom:2rem}@media only screen and (min-width:1600px){.product__items--grid{margin-bottom:2.5rem}}.product__items--grid:last-child{margin-bottom:0}.product__items--grid__thumbnail{overflow:hidden;line-height:1;width:8rem}@media only screen and (min-width:1366px){.product__items--grid__thumbnail{width:9rem}}.product__items--grid__content{padding:.2rem 1rem .2rem 1.5rem;width:calc(100% - 8rem)}@media only screen and (min-width:1366px){.product__items--grid__content{padding:.8rem .8rem .8rem 1.5rem;width:calc(100% - 9rem)}}.product__items--grid:hover .product__items--img{-webkit-transform:inherit;transform:inherit}@media only screen and (max-width:767px){.product__collection--content{margin-bottom:3rem;text-align:center}}.product__collection--content__title{margin-bottom:1.5rem}.product__collection--content__btn{font-size:1.6rem;line-height:4.6rem;height:4.6rem;padding:0 2rem}.swiper__nav--btn.style3{opacity:1;visibility:visible;top:inherit}@media only screen and (min-width:768px){.swiper__nav--btn.style3{bottom:25px;left:-116px}}@media only screen and (min-width:992px){.swiper__nav--btn.style3{bottom:15%;left:-52%}}@media only screen and (min-width:1200px){.swiper__nav--btn.style3{bottom:0}}@media only screen and (min-width:1366px){.swiper__nav--btn.style3{bottom:10%;left:-51%}}@media only screen and (min-width:1600px){.swiper__nav--btn.style3{bottom:25%}}@media only screen and (max-width:767px){.swiper__nav--btn.style3{display:none}}.swiper__nav--btn.style3.swiper-button-next{left:-46%}@media only screen and (min-width:768px){.swiper__nav--btn.style3.swiper-button-next{left:-70px}}@media only screen and (min-width:992px){.swiper__nav--btn.style3.swiper-button-next{left:-44%}}@media only screen and (min-width:1200px){.swiper__nav--btn.style3.swiper-button-next{left:-45%}}@media only screen and (min-width:1600px){.swiper__nav--btn.style3.swiper-button-next{left:-46%}}.new__product--items:hover .new__product--thumbnail__img{transform:scale(1.08);-webkit-transform:scale(1.08);-moz-transform:scale(1.08);-ms-transform:scale(1.08);-o-transform:scale(1.08)}.new__product--items:hover .new__product--content__title a{color:var(--secondary-color)}.new__product--thumbnail{overflow:hidden}.new__product--thumbnail__link{display:block}.new__product--thumbnail__img{display:block}@media only screen and (max-width:767px){.new__product--content{text-align:center}}.new__product--content__title{padding-top:1.5rem}@media only screen and (min-width:1200px){.new__product--content__title{font-size:2rem;line-height:2.2rem}}.banner__items--thumbnail{display:block;overflow:hidden;width:100%}.banner__items--thumbnail__img{display:block;width:100%}.banner__items--thumbnail:hover .banner__items--thumbnail__img{-webkit-transform:scale(1.04);transform:scale(1.04)}.banner__items--thumbnail:hover .banner__items--content__link{color:var(--secondary-color)}.banner__items--content{position:absolute;top:1.5rem;left:1.5rem;cursor:pointer}@media only screen and (min-width:768px){.banner__items--content{top:2rem;left:2rem}}@media only screen and (min-width:1366px){.banner__items--content{top:3rem;left:3rem}}@media only screen and (min-width:1600px){.banner__items--content{top:3.5rem;left:4rem}}@media only screen and (max-width:575px){.banner__items--content{top:50%;-webkit-transform:translatey(-50%);transform:translatey(-50%)}}.banner__items--content__subtitle{color:var(--text-gray-color);margin-bottom:.8rem;line-height:2.2rem}@media only screen and (min-width:992px){.banner__items--content__subtitle{font-size:1.7rem}}@media only screen and (min-width:1200px){.banner__items--content__subtitle{font-size:1.8rem;line-height:2.4rem}}@media only screen and (min-width:1600px){.banner__items--content__subtitle{font-size:2rem}}@media only screen and (max-width:575px){.banner__items--content__subtitle{display:none}}.banner__items--content__subtitle.text__secondary{color:var(--secondary-color)}.banner__items--content__title{margin-bottom:.7rem;color:var(--primary-color);font-weight:600}@media only screen and (min-width:768px){.banner__items--content__title{margin-bottom:1rem}}@media only screen and (min-width:1200px){.banner__items--content__title{margin-bottom:1.2rem;line-height:3rem}}@media only screen and (min-width:1600px){.banner__items--content__title{margin-bottom:1.8rem;line-height:3.3rem}}.banner__items--content__title.style2{font-size:1.5rem;line-height:2.2rem;margin-bottom:.4rem}@media only screen and (min-width:992px){.banner__items--content__title.style2{font-size:1.6rem;line-height:2.4rem}}@media only screen and (min-width:1200px){.banner__items--content__title.style2{font-size:1.8rem;line-height:2.7rem;margin-bottom:1rem;margin-bottom:.8rem}}@media only screen and (min-width:1600px){.banner__items--content__title.style2{font-size:2rem;line-height:3rem;margin-bottom:1.2rem}}.banner__items--content__link{line-height:2.4rem;color:var(--text-gray-color)}.banner__items--content__link.style2{font-size:1.4rem;text-decoration:underline}@media only screen and (min-width:1600px){.banner__items--content__link.style2{font-size:1.5rem}}.banner__items--content__arrow--icon{color:var(--secondary-color);margin-left:.5rem;vertical-align:middle}.banner__items--content.style2{top:1.5rem;left:2.5rem}@media only screen and (min-width:992px){.banner__items--content.style2{top:2rem;left:3rem}}.banner__items--content.style2.right{right:3rem;left:auto}@media only screen and (max-width:575px){.banner__items--content.style2{top:50%}}.banner__bg{background:url(../img/banner/banner-bg1.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:575px){.banner__bg{background-position:10%}}.deals__banner--content{padding:4rem 2rem}@media only screen and (min-width:576px){.deals__banner--content{padding:4rem 3rem 4rem 3rem}}@media only screen and (min-width:768px){.deals__banner--content{padding:5rem 3rem 5rem 3.5rem}}@media only screen and (min-width:992px){.deals__banner--content{padding:6rem 3rem 6rem 5rem}}@media only screen and (min-width:1200px){.deals__banner--content{padding:5rem 3rem 6rem 6.5rem}}@media only screen and (min-width:1600px){.deals__banner--content{padding:6rem 3rem 7rem 6.5rem}}@media only screen and (max-width:575px){.deals__banner--content{text-align:center}}.deals__banner--content__subtitle{font-weight:500;margin-bottom:.8rem}@media only screen and (min-width:992px){.deals__banner--content__subtitle{margin-bottom:1.2rem}}.deals__banner--content__maintitle{font-size:2rem;line-height:2.4rem;margin-bottom:1.5rem}@media only screen and (min-width:576px){.deals__banner--content__maintitle{font-size:2.2rem}}@media only screen and (min-width:768px){.deals__banner--content__maintitle{font-size:2.5rem;line-height:3rem}}@media only screen and (min-width:992px){.deals__banner--content__maintitle{font-size:3rem;line-height:3.5rem;margin-bottom:1.6rem}}@media only screen and (min-width:1366px){.deals__banner--content__maintitle{font-size:3.5rem;line-height:4rem}}@media only screen and (min-width:1600px){.deals__banner--content__maintitle{font-size:4rem;line-height:4.6rem;margin-bottom:1.8rem}}.deals__banner--content__desc{margin-bottom:2.5rem}@media only screen and (min-width:1200px){.deals__banner--content__desc{margin-bottom:3rem}}@media only screen and (min-width:1600px){.deals__banner--content__desc{margin-bottom:3.5rem}}@media only screen and (max-width:991px){.deals__banner--content__desc{display:none}}.deals__banner--countdown{margin-bottom:2rem}@media only screen and (min-width:992px){.deals__banner--countdown{margin-bottom:2.5rem}}@media only screen and (min-width:1200px){.deals__banner--countdown{margin-bottom:3rem}}@media only screen and (min-width:1600px){.deals__banner--countdown{margin-bottom:4rem}}@media only screen and (max-width:575px){.deals__banner--countdown{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.deals__banner--countdown .countdown__item{width:6rem;height:6rem;text-align:center;background:#efeff1;margin-right:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-shadow:0 0 59px rgba(0,0,0,.19);box-shadow:0 0 59px rgba(0,0,0,.19);position:relative;border-radius:.5rem}@media only screen and (min-width:768px){.deals__banner--countdown .countdown__item{width:6rem;height:6rem}}@media only screen and (min-width:992px){.deals__banner--countdown .countdown__item{width:8rem;height:7rem;margin-right:4rem}}@media only screen and (min-width:1200px){.deals__banner--countdown .countdown__item{width:8.5rem;height:7.5rem}}@media only screen and (min-width:1366px){.deals__banner--countdown .countdown__item{width:9rem;height:8rem}}@media only screen and (min-width:1600px){.deals__banner--countdown .countdown__item{width:10.5rem;height:9rem}}@media only screen and (max-width:767px){.deals__banner--countdown .countdown__item{margin-right:1.5rem}}@media only screen and (max-width:575px){.deals__banner--countdown .countdown__item{margin-right:1rem}}.deals__banner--countdown .countdown__item::before{position:absolute;content:":";right:-2.2rem;top:50%;font-size:4rem;font-weight:700;-webkit-transform:translatey(-50%);transform:translatey(-50%)}@media only screen and (min-width:992px){.deals__banner--countdown .countdown__item::before{right:-2.6rem}}@media only screen and (max-width:767px){.deals__banner--countdown .countdown__item::before{display:none}}.deals__banner--countdown .countdown__item:last-child{margin-right:0}.deals__banner--countdown .countdown__item:last-child::before{display:none}.deals__banner--countdown .countdown__number{font-weight:500;font-size:1.8rem;line-height:2rem;margin-bottom:.3rem}@media only screen and (min-width:768px){.deals__banner--countdown .countdown__number{font-size:2rem;line-height:2rem}}@media only screen and (min-width:992px){.deals__banner--countdown .countdown__number{font-size:2.5rem;line-height:2.8rem}}@media only screen and (min-width:1200px){.deals__banner--countdown .countdown__number{font-size:2.8rem;line-height:3rem}}@media only screen and (min-width:1366px){.deals__banner--countdown .countdown__number{font-size:3rem;line-height:3.2rem}}@media only screen and (min-width:1600px){.deals__banner--countdown .countdown__number{font-size:3.5rem;line-height:4rem}}.deals__banner--countdown .countdown__text{font-weight:500;font-size:1.4rem;line-height:2rem;text-transform:capitalize}@media only screen and (min-width:768px){.deals__banner--countdown .countdown__text{font-size:1.4rem}}@media only screen and (min-width:992px){.deals__banner--countdown .countdown__text{font-size:1.6rem}}@media only screen and (min-width:1200px){.deals__banner--countdown .countdown__text{font-size:1.6rem;line-height:2.2rem}}@media only screen and (min-width:1600px){.deals__banner--countdown .countdown__text{font-size:1.8rem}}.banner__bideo--play{position:absolute;top:50%;right:24%;-webkit-transform:translatey(-50%);transform:translatey(-50%)}@media only screen and (min-width:768px){.banner__bideo--play{right:8%}}@media only screen and (min-width:992px){.banner__bideo--play{right:10%}}@media only screen and (min-width:1200px){.banner__bideo--play{right:24%}}@media only screen and (max-width:767px){.banner__bideo--play{position:inherit;display:inline-block;top:inherit;-webkit-transform:inherit;transform:inherit;right:0;margin-top:2rem}}.banner__bideo--play__icon{width:5rem;height:5rem;background:var(--secondary-color);color:var(--white-color);border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-animation:animate 2s linear infinite;animation:animate 2s linear infinite}.banner__bideo--play__icon:hover{color:var(--white-color);background:var(--primary-color)}@media only screen and (min-width:768px){.banner__bideo--play__icon{width:6rem;height:6rem}}@media only screen and (min-width:1200px){.banner__bideo--play__icon{width:7rem;height:7rem}}.banner__bideo--play__icon:hover{-webkit-transform:scale(1.08);transform:scale(1.08)}@media only screen and (max-width:767px){.banner__bideo--play__icon svg{width:3.5rem;height:3.5rem}}@-webkit-keyframes animate{0%{-webkit-box-shadow:0 0 0 0 rgba(255,255,255,.7);box-shadow:0 0 0 0 rgba(255,255,255,.7)}40%{-webkit-box-shadow:0 0 0 50px rgba(255,193,7,0);box-shadow:0 0 0 50px rgba(255,193,7,0)}80%{-webkit-box-shadow:0 0 0 50px rgba(255,193,7,0);box-shadow:0 0 0 50px rgba(255,193,7,0)}100%{-webkit-box-shadow:0 0 0 rgba(255,193,7,0);box-shadow:0 0 0 rgba(255,193,7,0)}}@keyframes animate{0%{-webkit-box-shadow:0 0 0 0 rgba(255,255,255,.7);box-shadow:0 0 0 0 rgba(255,255,255,.7)}40%{-webkit-box-shadow:0 0 0 50px rgba(255,193,7,0);box-shadow:0 0 0 50px rgba(255,193,7,0)}80%{-webkit-box-shadow:0 0 0 50px rgba(255,193,7,0);box-shadow:0 0 0 50px rgba(255,193,7,0)}100%{-webkit-box-shadow:0 0 0 rgba(255,193,7,0);box-shadow:0 0 0 rgba(255,193,7,0)}}.banner__section--inner::before{position:absolute;content:"";width:100%;height:100%;background:var(--black-color);opacity:.4;top:0;left:0;z-index:9;pointer-events:none}@media only screen and (max-width:991px){.banner__img--height__md{height:30rem;-o-object-fit:cover;object-fit:cover}}@media only screen and (max-width:575px){.banner__img--height__md{height:33rem}}.banner__content--style2{position:absolute;left:0;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:9}@media only screen and (min-width:768px){.banner__content--style2{left:3.5rem}}@media only screen and (min-width:992px){.banner__content--style2{left:6rem}}@media only screen and (max-width:767px){.banner__content--style2{padding:0 3rem}}@media only screen and (max-width:575px){.banner__content--style2{padding:0 2rem;text-align:center}}.banner__content--style2__title{margin-bottom:1.5rem}@media only screen and (min-width:768px){.banner__content--style2__title{margin-bottom:1rem}}@media only screen and (min-width:992px){.banner__content--style2__title{margin-bottom:1.2rem;font-size:3.2rem;line-height:3.5rem}}@media only screen and (min-width:1200px){.banner__content--style2__title{font-size:3.5rem;line-height:3.5rem;margin-bottom:1.8rem}}@media only screen and (min-width:1600px){.banner__content--style2__title{font-size:4rem;line-height:4rem;margin-bottom:2rem}}.banner__content--style2__desc{color:var(--light-color);margin-bottom:1.8rem;line-height:2.2rem}@media only screen and (min-width:576px){.banner__content--style2__desc{width:75%;line-height:2.4rem}}@media only screen and (min-width:768px){.banner__content--style2__desc{width:63%;margin-bottom:2rem}}@media only screen and (min-width:992px){.banner__content--style2__desc{width:53%;margin-bottom:2rem;line-height:2.5rem}}@media only screen and (min-width:1200px){.banner__content--style2__desc{width:42%;margin-bottom:3rem}}@media only screen and (min-width:1366px){.banner__content--style2__desc{width:37%}}@media only screen and (min-width:1600px){.banner__content--style2__desc{margin-bottom:4rem}}@media only screen and (max-width:575px){.banner__img--max__height{height:200px;-o-object-fit:cover;object-fit:cover}}@media only screen and (max-width:575px){.banner__style2--top__sidebar{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}@media only screen and (max-width:575px){.banner__items.mr-30{margin-right:0}}@media only screen and (max-width:575px){.banner__discount--items{margin-bottom:2.5rem}}@media only screen and (max-width:575px){.banner__discount.section--padding{padding-bottom:3.5rem}}.banner__discount--content{background:var(--white-color);position:absolute;top:50%;left:50%;padding:1rem 2rem;-webkit-transform:translatey(-50%) translatex(-50%);transform:translatey(-50%) translatex(-50%)}@media only screen and (min-width:768px){.banner__discount--content{padding:2rem 3rem}}@media only screen and (min-width:992px){.banner__discount--content{padding:3rem}}@media only screen and (min-width:1200px){.banner__discount--content{padding:4rem}}@media only screen and (min-width:1366px){.banner__discount--content{padding:4rem 5rem}}@media only screen and (min-width:1600px){.banner__discount--content{padding:5.5rem 13rem 6rem}}@media only screen and (max-width:575px){.banner__discount--content{left:10%;right:10%;-webkit-transform:translatey(-50%);transform:translatey(-50%)}}.banner__discount--content__subtitle{font-weight:600;color:var(--text-gray-color);margin-bottom:.8rem}@media only screen and (min-width:992px){.banner__discount--content__subtitle{font-size:1.7rem;margin-bottom:1rem}}@media only screen and (min-width:1200px){.banner__discount--content__subtitle{font-size:1.8rem;margin-bottom:1.2rem}}@media only screen and (max-width:767px){.banner__discount--content__subtitle{margin-bottom:.5rem;line-height:2rem;font-size:1.5rem}}.banner__discount--content__title{font-weight:500;margin-bottom:.8rem}@media only screen and (min-width:1200px){.banner__discount--content__title{font-size:2.8rem;line-height:3.7rem;margin-bottom:1.3rem}}@media only screen and (min-width:1600px){.banner__discount--content__title{font-size:3rem;line-height:4rem;margin-bottom:1.5rem}}@media only screen and (max-width:767px){.banner__discount--content__title{margin-bottom:.5rem;line-height:2.2rem;font-size:1.6rem}}.banner__discount--content__link{color:var(--text-gray-color);text-decoration:underline}.banner__discount--content__link:hover{text-decoration:underline}@media only screen and (max-width:767px){.banner__discount--content__link{font-size:1.3rem;line-height:2rem}}@media only screen and (min-width:1200px){.shop__card--section__inner{padding:0 4.5rem}}.shop__card--banner__thumbnail{width:50%;overflow:hidden}.shop__card--banner__thumbnail a{width:100%}.shop__card--banner__thumbnail a img{width:100%}.shop__card--banner__thumbnail.two{margin:3rem 0 0 2.5rem}@media only screen and (max-width:767px){.shop__card--banner__thumbnail.two{margin:0 0 0 2rem}}@media only screen and (max-width:575px){.shop__card--banner__thumbnail.two{margin:0 0 0 1.5rem}}.shop__card--banner__thumbnail:hover .shop__card--banner__thumbnail--img{-webkit-transform:scale(1.04);transform:scale(1.04)}.shop__card--play{left:50%;right:auto;-webkit-transform:translatey(-50%) translatex(-50%);transform:translatey(-50%) translatex(-50%);top:50%;position:absolute}@media only screen and (max-width:767px){.shop__card--play{margin-top:0}}@media only screen and (min-width:1200px){.shop__card--play__icon{width:7rem;height:7rem}}@media only screen and (min-width:1600px){.shop__card--play__icon{width:8rem;height:8rem}}@media only screen and (max-width:767px){.shop__card--play__icon{width:6rem;height:6rem}}@media only screen and (max-width:575px){.shop__card--play__icon{width:5rem;height:5rem}}@media only screen and (max-width:767px){.shop__card--content{margin-top:2.5rem;text-align:center}}.shop__card--content__subtitle{font-weight:400;color:var(--text-gray-color);margin-bottom:.3rem}@media only screen and (min-width:1200px){.shop__card--content__subtitle{font-size:1.7rem}}@media only screen and (min-width:1366px){.shop__card--content__subtitle{font-size:1.8rem}}.shop__card--content__maintitle{font-weight:600}@media only screen and (min-width:992px){.shop__card--content__maintitle{line-height:4.5rem}}.shop__card--content__desc{margin-bottom:2rem}@media only screen and (min-width:768px){.shop__card--content__desc{margin-bottom:2.5rem}}.banner__items--content__style3{position:absolute;top:50%;left:2rem;right:2rem;text-align:center;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.banner__items--content__style3--subtitle{font-size:1.6rem;line-height:2.2rem;font-weight:500;margin-bottom:.4rem}@media only screen and (min-width:992px){.banner__items--content__style3--subtitle{font-size:1.8rem;line-height:2.5rem}}.banner__items--content__style3--title{font-weight:500;font-size:2.2rem;line-height:3rem}@media only screen and (min-width:1200px){.banner__items--content__style3--title{font-size:2.4rem;line-height:3.2rem}}@media only screen and (min-width:1366px){.banner__items--content__style3--title{font-size:2.6rem;line-height:3.5rem}}@media only screen and (min-width:1666px){.banner__items--content__style3--title{font-size:3.2rem;line-height:4rem}}.banner__bg3{background:url(../img/banner/banner-bg5.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}@media only screen and (max-width:575px){.banner__bg3{background-position:10%}}.deals__countdown--style3{padding:.8rem 0 2.2rem}@media only screen and (min-width:768px){.deals__countdown--style3{padding:2rem 0 2.5rem}}@media only screen and (max-width:575px){.deals__countdown--style3{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.deals__countdown--style3 .countdown__item{text-align:center;margin-right:1.5rem}.deals__countdown--style3 .countdown__item:last-child{margin-right:0}.deals__countdown--style3 .countdown__number{width:4.5rem;height:4.5rem;background:var(--white-color);line-height:4.5rem;text-align:center;font-size:1.8rem;font-weight:500;border-radius:50%}.deals__countdown--style3 .countdown__text{text-transform:capitalize;color:var(--primary-color);font-size:1.5rem;padding-top:.8rem;line-height:2rem;font-weight:500}.deals__content--style3__subtitle{font-size:1.6rem;line-height:2rem;margin-bottom:1.5rem}@media only screen and (min-width:1200px){.deals__content--style3__subtitle{font-size:1.7rem}}.deals__content--style3__maintitle{margin-bottom:1.5rem}@media only screen and (min-width:1200px){.deals__content--style3__maintitle{font-size:3rem;line-height:3.2rem}}.countdown__style3--btn{font-size:1.5rem;line-height:4rem;height:4.2rem;padding:0 1.2rem}@media only screen and (min-width:768px){.countdown__style3--btn{font-size:1.6rem;line-height:4.8rem;height:4.8rem;padding:0 1.8rem}}@media only screen and (min-width:768px){.banner__bideo--play.style3{right:10%}}.blog__items:hover .blog__thumbnail--img{-webkit-transform:scale(1.05);transform:scale(1.05)}.blog__thumbnail{overflow:hidden}.blog__thumbnail--link{width:100%;display:block}.blog__thumbnail--img{width:100%;display:block}.blog__content{padding-top:1.2rem}.blog__content--meta{color:var(--text-gray-color);line-height:2.4rem;margin-bottom:.9rem}.blog__content--title{margin-bottom:1.5rem}@media only screen and (min-width:992px){.blog__content--title{font-size:1.8rem;margin-bottom:1.8rem}}@media only screen and (min-width:1200px){.blog__content--title{line-height:3rem;margin-bottom:2rem}}@media only screen and (min-width:1366px){.blog__content--title{font-size:1.9rem;line-height:2.7rem}}@media only screen and (min-width:1600px){.blog__content--title{font-size:2.2rem;line-height:3.2rem;margin-bottom:2.3rem}}@media only screen and (min-width:1200px){.blog__content--title.style2{font-size:1.7rem;line-height:2.7rem}}@media only screen and (min-width:1600px){.blog__content--title.style2{font-size:1.8rem;line-height:3rem}}.blog__content--btn{background:var(--white-color);border:1px solid var(--border-color);color:var(--text-gray-color);line-height:3.3rem}@media only screen and (min-width:768px){.blog__content--btn{line-height:3.8rem}}@media only screen and (min-width:992px){.blog__content--btn{padding:0 3rem;line-height:4.3rem}}@media only screen and (min-width:1200px){.blog__content--btn{padding:0 3rem;line-height:4.2rem;height:4.4rem}}.blog__content--btn:hover{background:var(--secondary-color);border-color:var(--secondary-color);color:var(--white-color)}.blog__content--btn.style2{color:var(--white-color);background:var(--black-color)!important;border:0}@media only screen and (min-width:992px){.blog__content--btn.style2{padding:0 3rem;height:4.3rem;line-height:4.3rem}}@media only screen and (min-width:1600px){.blog__content--btn.style2{padding:0 4rem;height:4.8rem;line-height:4.8rem}}.blog__content--btn.style2:hover{background:var(--secondary-color)!important}.blog__content.style2{background:var(--white-color);position:relative}@media only screen and (min-width:1200px){.blog__content.style2{margin-left:2.5rem;padding:1.8rem;margin-top:-5.5rem}}@media only screen and (min-width:1600px){.blog__content.style2{margin-left:5.5rem;padding:1.8rem;margin-top:-5.5rem}}@media only screen and (max-width:767px){.testimonial__section.section--padding{padding-bottom:5.5rem}}.testimonial__section--inner{padding:1rem 1rem 4.5rem}@media only screen and (min-width:768px){.testimonial__section--inner{padding:1rem 1rem 5rem}}@media only screen and (min-width:1600px){.testimonial__section--inner{padding:1rem 1rem 6rem}}.testimonial__items{padding:22px 18px;background:var(--white-color);border-radius:1rem;-webkit-box-shadow:2px 0 20px rgba(0,0,0,.06);box-shadow:2px 0 20px rgba(0,0,0,.06)}@media only screen and (min-width:1200px){.testimonial__items{padding:3rem}}@media only screen and (min-width:1366px){.testimonial__items{padding:3rem 3.5rem}}@media only screen and (min-width:1600px){.testimonial__items{padding:4rem 4.5rem}}.testimonial__items:hover .testimonial__items--thumbnail__img{border-color:var(--secondary-color)}.testimonial__items--thumbnail{margin-bottom:1.3rem}.testimonial__items--thumbnail__img{padding:.3rem;display:block;margin:0 auto;border:2px solid var(--border-color)}.testimonial__items--content{position:relative}.testimonial__items--title{font-size:1.8rem;line-height:2.2rem;margin-bottom:6px;font-weight:700}@media only screen and (min-width:992px){.testimonial__items--title{font-size:2rem;line-height:2.3rem;margin-bottom:1rem}}@media only screen and (min-width:1600px){.testimonial__items--title{font-size:2.2rem;line-height:2.5rem}}.testimonial__items--subtitle{font-size:1.6rem;line-height:2rem;color:var(--text-gray-color);margin-bottom:10px}@media only screen and (min-width:992px){.testimonial__items--subtitle{font-size:2rem;line-height:2.6rem;margin-bottom:1.2rem}}.testimonial__items--desc{margin-bottom:1.2rem;line-height:2.4rem}@media only screen and (min-width:992px){.testimonial__items--desc{margin-bottom:1.4rem;line-height:2.7rem}}@media only screen and (min-width:992px){.testimonial__items--desc.style2{width:55%;margin:0 auto}}@media only screen and (max-width:575px){.testimonial__items--desc.style2{padding:0 1.5rem}}.testimonial__bg{background:url(../img/banner/banner-bg3.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover}.testimonial__bg::before{position:absolute;content:"";width:100%;height:100%;background:var(--black-color);left:0;top:0;opacity:.4}.testimonial__items--style2{background:0 0;padding:0 0 5rem;-webkit-box-shadow:inherit;box-shadow:inherit}@media only screen and (max-width:575px){.testimonial__items--style2{padding:0 0 4.5rem}}.testimonial__items--style2__thumbnail--img{border:3px solid var(--white-color)}.testimonial__items--subtitle.text-white{color:var(--white-color)}.testimonial__pagination.style2 .swiper-pagination-bullet{border:1px solid var(--secondary-color)}.testimonial__pagination.style2 .swiper-pagination-bullet.swiper-pagination-bullet-active{background:var(--secondary-color)}@media only screen and (max-width:767px){.shipping__section.section--padding{padding-bottom:5.5rem}}@media only screen and (max-width:991px){.shipping__section--inner{-ms-flex-wrap:wrap;flex-wrap:wrap}}.shipping__items{padding:0 20px;position:relative}@media only screen and (max-width:991px){.shipping__items{display:-webkit-box;display:-ms-flexbox;display:flex;padding:0 15px;margin-bottom:27px}}@media only screen and (min-width:768px){.shipping__items{width:50%}}@media only screen and (min-width:992px){.shipping__items{width:25%}.shipping__items::before{position:absolute;content:"";width:1px;height:100%;background:#aeaebf;right:0;top:0;opacity:.25}}.shipping__items:last-child::before{display:none}.shipping__items:hover .shipping__items--icon{background:var(--primary-color);opacity:.67;color:var(--white-color);border-color:var(--primary-color)}.shipping__items--icon{width:5rem;height:5rem;line-height:5.3rem;padding:5px 9px;text-align:center;border:1px solid rgba(174,174,191,.2);background:var(--white-color);border-radius:50%;-webkit-transition:var(--transition);transition:var(--transition)}@media only screen and (min-width:992px){.shipping__items--icon{width:5.5rem;height:5.5rem;line-height:5.1rem;padding:8px 12px;margin:0 auto 20px}}.shipping__items--icon svg{width:25px}@media only screen and (min-width:992px){.shipping__items--icon svg{width:32px}}@media only screen and (max-width:991px){.shipping__items--content{text-align:left!important;padding-left:20px}}.shipping__items--title{margin-bottom:8px}@media only screen and (min-width:992px){.shipping__items--title{font-size:2.2rem;line-height:2.6rem;margin-bottom:10px}}.shipping__items--desc{color:var(--sky-color);font-size:1.5rem}@media only screen and (min-width:1200px){.shipping__items--desc{font-size:1.6rem}}.shipping__section2--inner{-webkit-box-shadow:0 -4px 27px rgba(62,70,120,.16);box-shadow:0 -4px 27px rgba(62,70,120,.16);padding:30px 20px;background:var(--white-color);-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media only screen and (max-width:767px){.shipping__section2--inner{-ms-flex-wrap:wrap;flex-wrap:wrap;padding:30px 20px 5px}}@media only screen and (min-width:992px){.shipping__section2--inner{padding:35px 25px}}@media only screen and (min-width:1200px){.shipping__section2--inner{padding:35px 65px}}.shipping__items2{margin-right:30px}@media only screen and (min-width:768px) and (max-width:991px){.shipping__items2{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;text-align:center}}@media only screen and (max-width:767px){.shipping__items2{margin-bottom:25px;margin-right:0;width:50%}}@media only screen and (max-width:450px){.shipping__items2{width:100%;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.shipping__items2:last-child{margin-right:0}.shipping__items2--content{padding-left:15px}@media only screen and (min-width:768px) and (max-width:991px){.shipping__items2--content{padding-left:0}}@media only screen and (max-width:450px){.shipping__items2--content{padding-left:20px}}.shipping__items2--content__title{font-size:1.6rem;line-height:2.2rem;font-weight:700;margin-bottom:5px}@media only screen and (min-width:1200px){.shipping__items2--content__title{font-size:1.8rem}}.shipping__items2--content__desc{font-size:1.2rem;color:var(--sky-color)}@media only screen and (min-width:768px) and (max-width:991px){.shipping__items2--icon{margin-bottom:1.5rem}}.shipping__items2--icon img{display:block}@media only screen and (max-width:575px){.shipping__items2--icon img{width:4rem}}.shipping__style3--items{position:relative;margin-right:10rem;padding-right:10rem}@media only screen and (min-width:992px){.shipping__style3--items{margin-right:2rem;padding-right:2rem;width:25%}}@media only screen and (min-width:1200px){.shipping__style3--items{margin-right:4rem;padding-right:4rem;width:auto}}@media only screen and (min-width:1366px){.shipping__style3--items{margin-right:6rem;padding-right:6rem}}@media only screen and (min-width:1600px){.shipping__style3--items{margin-right:10rem;padding-right:10rem}}@media only screen and (min-width:768px) and (max-width:991px){.shipping__style3--items{margin-right:2rem;padding-right:2rem;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;text-align:center}.shipping__style3--items::before{display:none}}@media only screen and (max-width:767px){.shipping__style3--items{margin-right:0;padding-right:0;width:50%;margin-bottom:2.5rem}.shipping__style3--items::before{display:none}}@media only screen and (max-width:479px){.shipping__style3--items{width:100%;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.shipping__style3--items:last-child{margin-right:0;padding-right:0}.shipping__style3--items:last-child::before{display:none}.shipping__style3--items::before{position:absolute;content:"";width:1px;height:100%;background:var(--border-color);right:0;top:0}.shipping__style3--icon{color:var(--secondary-color);display:-webkit-box;display:-ms-flexbox;display:flex}@media only screen and (min-width:768px) and (max-width:991px){.shipping__style3--icon{margin-bottom:1.5rem}}.shipping__style3--content{padding-left:1.5rem}@media only screen and (min-width:768px) and (max-width:991px){.shipping__style3--content{padding-left:0}}.shipping__style3--content__title{font-size:1.5rem;line-height:2rem;font-weight:500;margin-bottom:.7rem}@media only screen and (min-width:1200px){.shipping__style3--content__title{font-size:1.8rem;line-height:2.2rem;margin-bottom:.8rem}}.shipping__style3--content__desc{line-height:2rem;font-size:1.5rem}@media only screen and (min-width:1200px){.shipping__style3--content__desc{font-size:1.6rem}}.shipping__style3--inner{-webkit-box-shadow:0 -4px 27px rgba(62,70,120,.16);box-shadow:0 -4px 27px rgba(62,70,120,.16);padding:2.5rem 2rem;background:var(--white-color)}@media only screen and (min-width:1200px){.shipping__style3--inner{padding:3.5rem}}@media only screen and (max-width:767px){.shipping__style3--inner{-ms-flex-wrap:wrap;flex-wrap:wrap;padding:2.5rem 1.5rem 0}}@media only screen and (max-width:991px){.footer__section{padding-bottom:7rem}}.main__footer{border-bottom:1px solid #ddd;padding:6rem 0 2rem}@media only screen and (min-width:992px){.main__footer{padding:6.5rem 0 3rem}}@media only screen and (min-width:1366px){.main__footer{padding:7rem 0}}@media only screen and (min-width:1600px){.main__footer{padding:8rem 0}}@media only screen and (max-width:1365px){.main__footer{-ms-flex-wrap:wrap;flex-wrap:wrap}}@media only screen and (max-width:767px){.main__footer{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:6rem 0 3.5rem}}@media only screen and (min-width:1366px) and (max-width:1449px){.footer__widget--width{width:25%}}@media only screen and (min-width:1200px) and (max-width:1365px){.footer__widget--width{width:31.5%}}@media only screen and (min-width:992px) and (max-width:1199px){.footer__widget--width{width:31%}}@media only screen and (min-width:768px) and (max-width:991px){.footer__widget--width{width:47%}}.social__title{font-size:1.8rem;font-weight:400}.social__shear--list{margin-right:1.3rem}.social__shear--list:last-child{margin-right:0}.social__shear--list__icon{color:var(--ofwhite-color)}.footer__widget{margin-right:3rem}@media only screen and (max-width:1365px){.footer__widget{margin-bottom:4rem}}@media only screen and (max-width:767px){.footer__widget{margin-bottom:0;margin-right:0}}.footer__widget:last-child{margin-right:0}@media only screen and (min-width:992px) and (max-width:1199px){.footer__widget:nth-child(3){margin-right:0}}@media only screen and (min-width:768px) and (max-width:991px){.footer__widget:nth-child(2){margin-right:0}}.footer__widget--title{margin-bottom:2rem;font-weight:400;position:relative;padding-bottom:.8rem}@media only screen and (min-width:992px){.footer__widget--title{margin-bottom:3rem;padding-bottom:1rem}}@media only screen and (max-width:1199px){.footer__widget--title{font-size:2rem;margin-bottom:2.2rem}}@media only screen and (max-width:767px){.footer__widget--title{padding-bottom:0;font-size:1.8rem}}.footer__widget--title::before{position:absolute;content:"";height:.2rem;width:6rem;background:#909090;left:0;bottom:0}@media only screen and (max-width:767px){.footer__widget--title::before{display:none}}.footer__widget--title__arrowdown--icon{position:absolute;right:0;top:38%;-webkit-transition:.3s;transition:.3s;display:none}@media only screen and (max-width:767px){.footer__widget--title__arrowdown--icon{display:block}}.footer__widget.active{padding-bottom:3.5rem}.footer__widget.active .footer__widget--title__arrowdown--icon{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.footer__widget--menu__text{color:var(--ofwhite-color);line-height:3rem}.footer__widget--menu__wrapper .footer__widget{margin-right:3rem}@media only screen and (min-width:1600px){.footer__widget--menu__wrapper .footer__widget{margin-right:6rem}}@media only screen and (min-width:768px) and (max-width:991px){.footer__widget--menu__wrapper .footer__widget{margin-right:4rem}}.footer__widget--menu__wrapper .footer__widget:last-child{margin-right:3rem}@media only screen and (max-width:767px){.footer__widget--menu__wrapper .footer__widget:last-child{margin-right:0}}@media only screen and (max-width:767px){.footer__widget--menu__wrapper .footer__widget{margin-right:0}}@media only screen and (max-width:767px){.footer__widget--menu__wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.footer__widget--button{position:absolute;z-index:9;top:0;left:0;visibility:hidden;width:100%;height:100%;content:"";color:transparent;border:0;background-color:transparent;color:var(--white-color)}.footer__widget--button>*{pointer-events:none}@media only screen and (max-width:767px){.footer__widget--button{visibility:visible}}@media only screen and (max-width:767px){.footer__widget--inner{display:none}}.newsletter__subscribe{margin-top:2rem}.newsletter__subscribe--input{width:100%;border:0;height:4.5rem;background:var(--ofwhite-color);padding:0 1.5rem;font-weight:600}.newsletter__subscribe--input:focus{border-color:var(--secondary-color)}.newsletter__subscribe--input:focus::-webkit-input-placeholder{color:#000}.newsletter__subscribe--input.style3{padding:0 4.7rem 0 1.5rem}.newsletter__subscribe--button{width:100%;height:4.5rem;font-weight:600;background:var(--secondary-color);border:0;color:var(--ofwhite-color);margin-top:2rem}@media only screen and (min-width:992px){.newsletter__subscribe--button{font-size:2rem}}.newsletter__subscribe--button:hover{background:var(--ofwhite-color);color:var(--secondary-color)}.newsletter__subscribe--button.style3{line-height:5.5rem;position:absolute;top:0;right:9px;width:auto;background:inherit;color:var(--secondary-color);margin:0}.newsletter__subscribe--button.style3:hover{color:var(--primary-color)}.footer__bottom{padding:2rem 0}@media only screen and (min-width:768px){.footer__bottom{padding:2.5rem 0}}@media only screen and (max-width:991px){.footer__bottom{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.footer__instagram--list{margin-bottom:1rem}.footer__instagram--list:last-child{margin-bottom:0}.instagram__thumbnail{margin-right:1rem}.instagram__thumbnail:last-child{margin-bottom:0}.instagram__thumbnail a{display:block}.instagram__thumbnail a img{display:block;width:8rem}@media only screen and (max-width:991px){.copyright__content{margin-bottom:2rem!important}}@media only screen and (max-width:767px){.copyright__content{text-align:center;margin-bottom:1.5rem!important}}.copyright__content--link:hover{text-decoration:underline}.footer__payment{line-height:1}.footer__dropdown--language{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);top:auto;bottom:100%;left:0;margin-top:0;margin-bottom:2.8rem;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color);opacity:0;visibility:hidden}.footer__dropdown--language.active{opacity:1;visibility:visible;margin-bottom:1.5rem}.footer__dropdown--currency{position:absolute;z-index:9;width:100px;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1);top:auto;bottom:100%;left:0;margin-top:0;margin-bottom:2.8rem;-webkit-transition:var(--transition);transition:var(--transition);background:var(--white-color);opacity:0;visibility:hidden}.footer__dropdown--currency.active{opacity:1;visibility:visible;margin-bottom:1.5rem}.footer__currency--link>*{pointer-events:none}.footer__currency--link:hover{color:var(--secondary-color)}.footer__currency--link:hover span{color:var(--secondary-color)}.footer__social--style3 .social__shear--list__icon{color:var(--black-color);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.footer__social--style3 .social__shear--list__icon:hover{color:var(--secondary-color)}.footer__social--style3 .social__shear--list__icon:hover span{color:var(--secondary-color)}.footer__social--style3 .social__shear--list{margin-right:0;margin-bottom:1.5rem}.footer__social--style3 .social__shear--list:last-child{margin-right:0}.footer__social--icon__svg{width:2.5rem;margin-right:1rem}.footer__menu--style3 .footer__widget--menu__text{color:var(--black-color)}.footer__menu--style3 .footer__widget--menu__text:hover{color:var(--secondary-color)}.footer__language--link>*{pointer-events:none}@media only screen and (max-width:1199px){.footer__language--currency{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:2rem}}@media only screen and (max-width:1199px){.footer__language--currency ul{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.copyright__content.style3{text-align:center;margin-bottom:2rem}.footer__payment.style3{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}@media only screen and (min-width:1366px){.footer__widget--desc.style3{padding-right:4rem}}.footer__widget--button.style3{color:var(--primary-color)}.modal{position:fixed;top:0;left:0;right:0;bottom:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:1rem;background:rgba(0,0,0,.8);cursor:pointer;visibility:hidden;opacity:0;-webkit-transition:all .35s ease-in;transition:all .35s ease-in;z-index:99}.modal.is-visible{visibility:visible;opacity:1}.modal.is-visible .quickview__main--wrapper{-webkit-transform:translateY(0);transform:translateY(0)}.quickview__main--wrapper{position:relative;max-width:880px;max-height:80vh;border-radius:10px;background:#fff;overflow:auto;cursor:default;padding:20px;-webkit-transform:translateY(-50px);transform:translateY(-50px);-webkit-transition:var(--transition);transition:var(--transition);pointer-events:inherit}@media only screen and (max-width:767px){.quickview__main--wrapper{max-width:550px}}@media only screen and (max-width:575px){.quickview__main--wrapper{padding:25px 15px}}.quickview__header{position:absolute;padding:0;top:16px;right:16px;z-index:9}@media only screen and (max-width:767px){.quickview__header{top:10px;right:10px}}.quickview__close--btn{font-size:1.8rem;padding:0;width:3.2rem;height:3.2rem;line-height:2.6rem;border-radius:50%;font-weight:700;border:1px solid var(--border-color);background:var(--white-color)}.quickview__close--btn:hover{background:var(--primary-color);border-color:var(--primary-color);color:var(--white-color)}[data-animation] .modal-dialog{opacity:0;-webkit-transition:all .5s cubic-bezier(.51,.92,.24,1.15);transition:all .5s cubic-bezier(.51,.92,.24,1.15)}[data-animation].is-visible .modal-dialog{opacity:1;-webkit-transition-delay:.2s;transition-delay:.2s}@media only screen and (max-width:767px){.quickview__product--media.product__details--media{margin-bottom:3rem}}.quickview__info--review__text{color:var(--text-gray-color);font-weight:500;margin-left:15px}@media only screen and (max-width:767px){.quickview__gallery{margin-bottom:20px}}.quickview__thumb{position:relative;line-height:1}.quickview__thumb--link{width:100%;border-radius:8px}.quickview__thumb--img{width:100%;border-radius:8px}.quickview__gallery--pagination .swiper-pagination-bullet{width:16px;height:5px;background:var(--secondary-color);opacity:1;border-radius:2px;margin:0 3px!important}.quickview__gallery--pagination .swiper-pagination-bullet.swiper-pagination-bullet-active{background:var(--primary-color)}.variant__color--value{width:2.5rem;height:2.5rem;padding:2px;display:inline-block;border-radius:50%;margin-right:7px;line-height:1;cursor:pointer}.variant__color--value:last-child{margin-right:0}.variant__color--value__img{border-radius:50%}.variant__input--fieldset input[type=radio]+label{border:1px solid var(--primary-color)}.variant__input--fieldset input[type=radio]+label:hover{border:1px solid var(--secondary-color);color:var(--secondary-color)}.variant__input--fieldset{min-width:-webkit-fit-content;min-width:-moz-fit-content;min-width:fit-content;border:none;margin:0;padding:0}.variant__input--fieldset{margin-right:10px}.variant__input--fieldset input[type=radio]{clip:rect(0,0,0,0);overflow:hidden;position:absolute;height:1px;width:1px}.variant__input--fieldset input[type=radio]:checked+label{border:1px solid var(--secondary-color);color:var(--secondary-color)}.variant__input--fieldset:last-child{margin-right:0}.variant__size--value{width:4.7rem;height:3.2rem;line-height:2.8rem;display:inline-block;border-radius:5px;text-align:center;font-size:1.5rem;cursor:pointer;-webkit-transition:var(--transition);transition:var(--transition);margin-right:7px}.variant__size--value:last-child{margin-right:0}.quickview__variant--wishlist__svg{width:22px;margin-right:7px}.variant__wishlist--icon{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.quickview__value--quantity{width:3.5rem;height:3.5rem;font-size:2.2rem;line-height:3.3rem}.quickview__value--quantity.decrease{border-radius:17px 0 0 17px}.quickview__value--quantity.increase{border-radius:0 17px 17px 0}input.quickview__value--number{height:3.5rem;font-size:1.7rem}.quickview__cart--btn{height:3.8rem;line-height:3.8rem;padding:0 25px;margin-left:15px;font-size:1.5rem}.quickview__social--title{font-size:1.5rem;font-weight:600;margin-right:15px}.quickview__social--list{margin-right:10px}.quickview__social--list:last-child{margin-right:0}.quickview__social--icon{width:3rem;height:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:var(--secondary-color);color:var(--white-color);border-radius:50%}.quickview__social--icon:hover{background:var(--primary-color);color:var(--white-color)}@media only screen and (max-width:767px){.accordion__section--inner .row{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}}@media only screen and (max-width:767px){.accordion__banner{text-align:center}}@media only screen and (max-width:767px){.accordion__wrapper{margin-bottom:30px}}.accordion__items.active{margin-bottom:20px}.accordion__items.active:last-child{margin-bottom:0}.accordion__items--body{display:none;padding:0 20px}.accordion__items--body__desc{font-size:1.5rem;line-height:2.8rem}.accordion__items--button{border:0;background:var(--white-color);width:100%;padding:13px 60px 13px 25px;text-align:left;margin-bottom:15px;font-size:1.5rem;font-weight:500;position:relative}@media only screen and (min-width:992px){.accordion__items--button{padding:13px 70px 13px 35px}}@media only screen and (min-width:1200px){.accordion__items--button{padding:24px 80px 24px 40px}}.accordion__items--button__icon{width:3rem;height:3rem;background:var(--secondary-color);color:var(--white-color);padding:5px;border-radius:50%;position:absolute;top:50%;right:12px;-webkit-transform:translatey(-50%);transform:translatey(-50%)}@media only screen and (min-width:768px){.accordion__items--button__icon{right:15px}}@media only screen and (min-width:992px){.accordion__items--button__icon{right:35px}}.portfolio__items--thumbnail{line-height:1}.portfolio__items--thumbnail::before{position:absolute;content:"";width:100%;height:100%;background:var(--secondary-color);top:0;left:0;opacity:0;-webkit-transition:var(--transition);transition:var(--transition);z-index:9;pointer-events:none}.portfolio__items--thumbnail:hover::before{opacity:.8}.portfolio__items--thumbnail:hover .portfolio__view--icon{opacity:1;visibility:visible;-webkit-transform:translatey(-50%) translatex(-50%) scale(1);transform:translatey(-50%) translatex(-50%) scale(1)}.portfolio__items--thumbnail__link{overflow:hidden;display:block}.portfolio__items--thumbnail:hover .portfolio__items--thumbnail__img{-webkit-transform:scale(1.04);transform:scale(1.04)}.portfolio__items--thumbnail__img{-webkit-transition:.3s;transition:.3s;display:block}.portfolio__view--icon{position:absolute;top:50%;left:50%;-webkit-transform:translatey(-50%) translatex(-50%) scale(0);transform:translatey(-50%) translatex(-50%) scale(0);opacity:0;visibility:hidden;-webkit-transition:var(--transition);transition:var(--transition);z-index:9;width:4rem;height:4rem;background:var(--white-color);color:var(--secondary-color);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;border-radius:50%}.portfolio__view--icon svg{width:25px}.portfolio__view--icon:hover{background:var(--primary-color);color:var(--white-color)}@media only screen and (max-width:767px){.brand__logo--section{padding-bottom:3rem}}@media only screen and (max-width:767px){.brand__logo--section__inner{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}}.brand__logo--items{margin-right:8rem}.brand__logo--items:last-child{margin-right:0}@media only screen and (min-width:768px){.brand__logo--items{margin-right:3.5rem}}@media only screen and (min-width:992px){.brand__logo--items{margin-right:6rem}}@media only screen and (min-width:1200px){.brand__logo--items{margin-right:8rem}}@media only screen and (max-width:767px){.brand__logo--items{margin:0 30px 30px}}@media only screen and (max-width:480px){.brand__logo--items{margin:0 15px 30px}}@media only screen and (max-width:480px){.brand__logo--items__thumbnail--img{max-width:11rem}}.brand__logo--items__thumbnail--img:hover{-webkit-transform:scale(1.08);transform:scale(1.08)}.breadcrumb__bg{background:url(../img/banner/breadcrumb-bg.png);background-repeat:no-repeat;height:130px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative}@media only screen and (min-width:480px){.breadcrumb__bg{height:150px}}@media only screen and (min-width:576px){.breadcrumb__bg{height:170px}}@media only screen and (min-width:768px){.breadcrumb__bg{height:190px}}@media only screen and (min-width:992px){.breadcrumb__bg{height:220px}}@media only screen and (min-width:1200px){.breadcrumb__bg{height:270px}}@media only screen and (min-width:1600px){.breadcrumb__bg{height:300px}}@media only screen and (max-width:1600px){.breadcrumb__bg{background-position:center center;background-size:cover}}.breadcrumb__content{position:relative}.breadcrumb__content--title.mb-25{margin-bottom:12px}@media only screen and (min-width:768px){.breadcrumb__content--title.mb-25{margin-bottom:18px}}@media only screen and (min-width:992px){.breadcrumb__content--title.mb-25{margin-bottom:20px}}.breadcrumb__content--menu__items{position:relative;margin-right:20px;padding-right:22px;font-size:16px;line-height:24px}@media only screen and (min-width:768px){.breadcrumb__content--menu__items{font-size:18px}}.breadcrumb__content--menu__items:last-child{margin-right:0;padding-right:0}.breadcrumb__content--menu__items:last-child::before{display:none}.breadcrumb__content--menu__items::before{position:absolute;content:"";width:3px;height:20px;background:var(--secondary-color);right:0;top:4px;border-radius:5px;-webkit-transform:rotate(30deg);transform:rotate(30deg)}@media only screen and (max-width:991px){.team__section.section--padding{padding-bottom:6rem}}@media only screen and (max-width:767px){.team__section.section--padding{padding-bottom:4rem}}@media only screen and (max-width:991px){.about__thumb{margin-bottom:3rem}}@media only screen and (max-width:767px){.about__thumb{margin-bottom:2.5rem}}.about__thumb--items{margin-right:2rem;width:50%}.about__thumb--items:last-child{margin-right:0}.about__thumb--items:first-child{margin-top:5rem}@media only screen and (max-width:991px){.about__thumb--items:first-child{margin-top:0}}.about__thumb--img{width:100%}.about__thumb--play{top:40%;padding:0;border:0;right:42%;position:absolute}@media only screen and (max-width:991px){.about__thumb--play{top:50%;-webkit-transform:translatey(-50%);transform:translatey(-50%);margin-top:0}}@media only screen and (max-width:575px){.about__content{text-align:center}}.about__content--subtitle{font-size:2rem;font-weight:600;line-height:2.2rem}@media only screen and (max-width:575px){.about__content--subtitle{font-size:1.8rem;margin-bottom:1.2rem}}.about__content--maintitle{font-weight:700}@media only screen and (min-width:992px){.about__content--maintitle{font-size:3rem;line-height:3.7rem}}@media only screen and (max-width:575px){.about__content--maintitle{line-height:2.8rem;margin-bottom:1.5rem}}.about__content--desc{font-size:1.6rem;line-height:2.8rem;color:var(--text-gray-color)}@media only screen and (max-width:575px){.about__content--desc{font-size:1.5rem;line-height:2.5rem}}@media only screen and (max-width:575px){.about__author{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.about__author--name{font-weight:600;line-height:2.6rem}.about__author--signature{margin-left:1.5rem}.counterup__banner__bg2{background:url(../img/banner/banner-bg4.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;background-size:cover;position:relative}.counterup__banner__bg2::before{position:absolute;content:"";width:100%;height:100%;background:var(--black-color);left:0;top:0;opacity:.7}.counterup__banner--inner{padding:60px 0}@media only screen and (max-width:575px){.counterup__banner--inner{-ms-flex-wrap:wrap;flex-wrap:wrap;padding:60px 0 38px}}@media only screen and (min-width:768px){.counterup__banner--inner{padding:70px 0}}@media only screen and (min-width:992px){.counterup__banner--inner{padding:80px 0}}@media only screen and (min-width:1200px){.counterup__banner--inner{padding:100px 0}}@media only screen and (min-width:1600px){.counterup__banner--inner{padding:150px 0}}@media only screen and (max-width:575px){.counterup__banner--items{width:50%;margin-bottom:22px}}.counterup__banner--items__text{font-size:1.4rem;line-height:2.3rem;margin-bottom:10px;font-weight:400}@media only screen and (min-width:768px){.counterup__banner--items__text{font-size:1.6rem;line-height:2.4rem;margin-bottom:11px}}@media only screen and (min-width:992px){.counterup__banner--items__text{font-size:1.7rem;line-height:2.7rem}}@media only screen and (min-width:1200px){.counterup__banner--items__text{font-size:2rem;line-height:3.2rem}}.counterup__banner--items__number{font-family:var(--font-lora);font-weight:600;font-size:3rem;line-height:3rem}@media only screen and (min-width:768px){.counterup__banner--items__number{font-size:3.3rem}}@media only screen and (min-width:992px){.counterup__banner--items__number{font-size:3.5rem;line-height:3.5rem}}@media only screen and (min-width:1200px){.counterup__banner--items__number{font-size:4rem;line-height:4.5rem}}.team__items:hover .team__thumb{border-color:var(--secondary-color)}@media only screen and (max-width:991px){.team__items{margin-bottom:2.5rem}}.team__thumb{position:relative;display:inline-block;border:6px solid transparent;padding:.7rem;-webkit-transition:var(--transition);transition:var(--transition);border-radius:50%}.team__thumb--img{display:block;width:100%}.team__social--list{margin-right:1.5rem}.team__social--list:last-child{margin-right:0}@media only screen and (max-width:575px){.team__social--list{margin-right:.8rem}}.team__social--icon{width:3.2rem;height:3.2rem;text-align:center;background:var(--secondary-color);color:var(--white-color);line-height:3.5rem;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.team__social--icon:hover{background:var(--primary-color);color:var(--white-color)}@media only screen and (max-width:575px){.team__social--icon{width:2.8rem;height:2.8rem;line-height:3.4rem}}.team__content{padding:1.2rem 0 0}@media only screen and (max-width:991px){.team__content{padding:1rem 0 0}}@media only screen and (max-width:575px){.team__content{padding:.5rem 0 0}}.team__content--subtitle{color:var(--sky-color);font-size:1.5rem;line-height:2rem;margin-bottom:1.5rem}@media only screen and (min-width:767px){.team__content--subtitle{font-size:1.7rem;line-height:2.5rem}}@media only screen and (max-width:575px){.team__content--subtitle{margin-bottom:1.2rem}}.team__content--title{font-weight:700;margin-bottom:1rem}@media only screen and (min-width:992px){.team__content--title{font-size:2.2rem;line-height:2.5rem;margin-bottom:1.2rem}}@media only screen and (min-width:1200px){.team__content--title{font-size:2.4rem;line-height:2.5rem}}@media only screen and (max-width:575px){.team__content--title{margin-bottom:.5rem;line-height:2.2rem}}.shop__header{padding:1.5rem 2rem;border-radius:.5rem}@media only screen and (max-width:479px){.shop__header{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.product__view--mode__list{margin-right:2rem}.product__view--mode__list:last-child{margin-right:0}@media only screen and (min-width:992px){.product__view--mode__list{margin-right:1.5rem}}@media only screen and (min-width:1200px){.product__view--mode__list{margin-right:2.5rem}}@media only screen and (min-width:1366px){.product__view--mode__list{margin-right:3.5rem}}@media only screen and (max-width:991px){.product__view--mode__list{margin-right:0}}.product__view--label{font-weight:600;margin-right:1.2rem}@media only screen and (min-width:992px){.product__view--label{margin-right:.8rem;font-size:1.5rem}}@media only screen and (min-width:1200px){.product__view--label{margin-right:2.5rem}}@media only screen and (min-width:1366px){.product__view--label{margin-right:3.5rem}}.product__view--select{border:1px solid var(--border-color);padding:.6rem 3rem .6rem 1.2rem;-webkit-appearance:none;cursor:pointer;border-radius:.5rem;background:var(--white-color)}.select.shop__header--select::before{right:14px}.product__grid--column__buttons--icons{border:1px solid var(--border-color);background:var(--white-color);border-radius:.3rem;width:3.7rem;height:3.7rem;line-height:1.1rem;margin-right:10px;text-align:center;padding:0}.product__grid--column__buttons--icons>svg{pointer-events:none}.product__grid--column__buttons--icons:last-child{margin-right:0}.product__grid--column__buttons--icons:hover{color:var(--secondary-color);border-color:var(--secondary-color)}.product__grid--column__buttons--icons.active{color:var(--secondary-color);border-color:var(--secondary-color)}.product__view--search__form{width:200px;position:relative}@media only screen and (min-width:992px){.product__view--search__form{width:180px}}@media only screen and (min-width:1200px){.product__view--search__form{width:260px}}@media only screen and (min-width:1366px){.product__view--search__form{width:300px}}.product__view--search__input{width:100%;height:4rem;background:var(--white-color);border-radius:.5rem;padding:0 5rem 0 1.5rem;border:1px solid var(--border-color);border-radius:.5rem}@media only screen and (min-width:992px){.product__view--search__input{font-size:1.5rem}}.product__view--search__input:focus{border-color:var(--secondary-color)}.product__view--search__btn{position:absolute;right:0;top:0;border:0;background:var(--secondary-color);color:var(--white-color);height:100%;width:4rem;border-radius:0 .5rem .5rem 0;line-height:4.8rem}.product__view--search__btn:hover{background:var(--primary-color)}.product__showing--count{font-weight:500;letter-spacing:.5px}@media only screen and (min-width:992px){.product__showing--count{font-size:1.5rem;line-height:2.6rem;margin-left:1.5rem}}@media only screen and (min-width:1200px){.product__showing--count{font-size:1.7rem;line-height:2.8rem;margin-left:2rem}}@media only screen and (max-width:479px){.product__showing--count{text-align:center;width:100%;margin-top:1.2rem}}.offcanvas__filter--sidebar{position:fixed;z-index:9999;top:0;left:0;width:100%;max-width:300px;height:100vh;-webkit-transition:var(--transition);transition:var(--transition);-webkit-transform:translateX(-100%);transform:translateX(-100%);background-color:var(--white-color);-webkit-box-shadow:0 0 10px rgba(0,0,0,.15);box-shadow:0 0 10px rgba(0,0,0,.15);overflow-y:auto}@media only screen and (min-width:480px){.offcanvas__filter--sidebar{max-width:320px}}.offcanvas__filter--sidebar.active{opacity:1;visibility:visible;-webkit-transform:translateX(0);transform:translateX(0)}.widget__filter--btn{border:1px solid var(--border-color);background:var(--white-color);border-radius:.3rem;padding:.5rem 1.2rem}.widget__filter--btn>*{pointer-events:none}@media only screen and (max-width:479px){.widget__filter--btn{margin-right:2.5rem}}.widget__filter--btn:hover{border-color:var(--secondary-color);color:var(--secondary-color)}.widget__filter--btn__icon{width:20px}.widget__filter--btn__text{font-weight:600;font-size:1.5rem;margin-left:.7rem}.offcanvas__filter--close{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border:1px solid var(--border-color);padding:.5rem 1rem;border-radius:.3rem;margin:25px;background:var(--white-color)}.offcanvas__filter--close>*{pointer-events:none}.offcanvas__filter--close:hover{border-color:var(--secondary-color);color:var(--secondary-color)}.offcanvas__filter--close__text{font-size:1.5rem;font-weight:600;margin-left:8px}.shop__sidebar--widget{position:-webkit-sticky;position:sticky;top:0}.single__widget{margin-bottom:3rem}@media only screen and (min-width:992px){.single__widget{margin-bottom:4rem}}.single__widget:last-child{margin-bottom:0}.single__widget.widget__bg{padding:2rem;border-radius:.5rem;-webkit-box-shadow:0 2px 22px rgba(0,0,0,.1);box-shadow:0 2px 22px rgba(0,0,0,.1)}.widget__title{font-weight:600;margin-bottom:1.5rem;border-bottom:1px solid var(--border-color2);padding-bottom:1rem}@media only screen and (min-width:992px){.widget__title{padding-bottom:1.2rem;margin-bottom:2.5rem}}.widget__search--form{position:relative}.widget__search--form__input{width:100%;height:5rem;padding:0 6rem 0 1.2rem;border-radius:.5rem;border:1px solid var(--border-color2)}@media only screen and (min-width:992px){.widget__search--form__input{font-size:1.5rem}}.widget__search--form__input:focus{border-color:var(--secondary-color)}.widget__search--form__btn{position:absolute;top:0;right:0;border:0;background:var(--secondary-color);color:var(--white-color);padding:0;width:4.5rem;height:100%;border-radius:0 .5rem .5rem 0}.widget__search--form__btn:hover{background:var(--primary-color)}.widget__categories--menu__list{border:1px solid var(--border-color2);margin-bottom:1.5rem;border-radius:.5rem}.widget__categories--menu__list.active{margin-bottom:1.5rem}.widget__categories--menu__list.active:last-child{margin-bottom:0}.widget__categories--menu__list.active .widget__categories--menu__arrowdown--icon{-webkit-transform:rotate(180deg);transform:rotate(180deg);top:38%}.widget__categories--menu__label{cursor:pointer;background:var(--white-color);padding:.5rem 1rem;border-radius:.5rem;position:relative;-webkit-transition:var(--transition);transition:var(--transition)}.widget__categories--menu__label>*{pointer-events:none}.widget__categories--menu__label:hover{color:var(--primary-color)}.widget__categories--menu__text{padding-left:1rem}.widget__categories--menu__img{width:3rem}.widget__categories--menu__arrowdown--icon{position:absolute;right:1.5rem;top:43%;-webkit-transition:var(--transition);transition:var(--transition)}.widget__categories--sub__menu{display:none;padding:1rem 0;border-top:1px solid var(--border-color2)}.widget__categories--sub__menu--list{margin-bottom:.8rem;padding:0 1rem .8rem;border-bottom:1px solid var(--border-color2)}.widget__categories--sub__menu--list:last-child{margin-bottom:0;padding-bottom:0;border-bottom:0}.widget__categories--sub__menu--img{width:2.8rem}.widget__categories--sub__menu--text{padding-left:1rem;line-height:2.8rem}.widget__form--check__list{margin-bottom:1rem;position:relative}.widget__form--check__list:last-child{margin-bottom:0}.widget__form--check__label{cursor:pointer;line-height:2.8rem;-webkit-transition:var(--transition);transition:var(--transition);border:1px solid var(--border-color2);background:var(--white-color);padding:.5rem 3rem .5rem 1.5rem;border-radius:.5rem;display:block}.widget__form--check__label:hover{color:var(--primary-color)}.widget__form--check__input{position:absolute;right:1rem;top:50%;-webkit-transform:translatey(-50%);transform:translatey(-50%);opacity:0;cursor:pointer;z-index:999}.widget__form--check__input:checked~.widget__form--checkmark{background-color:var(--secondary-color)}.widget__form--check__input:checked~.widget__form--checkmark::before{display:block}.widget__form--checkmark{height:1.8rem;width:1.8rem;border:1px solid var(--secondary-color);border-radius:50%;display:block;position:absolute;top:50%;right:1rem;-webkit-transform:translatey(-50%);transform:translatey(-50%);background:var(--white-color);-webkit-transition:var(--transition);transition:var(--transition)}.widget__form--checkmark::before{right:.5rem;top:.3rem;width:.5rem;height:.8rem;border:solid #fff;border-top-width:medium;border-right-width:medium;border-bottom-width:medium;border-left-width:medium;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);transform:rotate(45deg);content:"";position:absolute;display:none}.price__filter--group{width:46%}.price__filter--label{font-weight:600;margin-bottom:.6rem;display:inline-block}@media only screen and (min-width:992px){.price__filter--label{font-size:1.5rem}}.price__filter--input{border:1px solid var(--border-color2);padding:.7rem 1rem}.price__filter--input__field{width:100%}.price__filter--currency{font-weight:700;margin-right:.6rem}.price__filter--btn{height:4rem;line-height:4rem}.price__divider{font-size:2rem;padding:2.5rem 1rem 0}.widget__tagcloud--list{display:inline-block;margin:0 8px 8px 0}.widget__tagcloud--link{border:1px solid var(--border-color2);background:var(--white-color);padding:.5rem 1.2rem;line-height:2.5rem;border-radius:.3rem}.widget__tagcloud--link:hover{background:var(--secondary-color);border-color:var(--secondary-color);color:var(--white-color)}@media only screen and (max-width:991px){.shop__product--wrapper .product__items--link{width:100%}}@media only screen and (max-width:991px){.shop__product--wrapper .product__items--img{width:100%}}@media only screen and (max-width:1365px){.product__grid--inner .product__items--action__btn{padding:0 .6rem}}@media only screen and (max-width:1199px){.product__grid--inner .product__items--action__btn{padding:0 .5rem}}.product__grid--inner .product__items--action__btn.add__to--cart{font-size:1.3rem;padding:0 .6rem}@media only screen and (min-width:1600px){.product__grid--inner .product__items--action__btn.add__to--cart{font-size:1.4rem}}@media only screen and (max-width:1365px){.product__grid--inner .product__items--action__btn.add__to--cart{padding:0 .4rem}}@media only screen and (max-width:1600px){.product__grid--inner .product__items--action__btn.add__to--cart{padding:0 .6rem}}.product__list--items__thumbnail{width:132px}@media only screen and (min-width:480px){.product__list--items__thumbnail{width:200px}}@media only screen and (min-width:768px){.product__list--items__thumbnail{width:280px}}.product__list--items__content{width:calc(100% - 132px);padding-left:1.5rem}@media only screen and (min-width:480px){.product__list--items__content{width:calc(100% - 200px);padding-left:2rem}}@media only screen and (min-width:768px){.product__list--items__content{width:calc(100% - 280px);padding-left:3rem}}.product__list--items__content--title{font-weight:600}@media only screen and (min-width:992px){.product__list--items__content--title{font-size:2rem;line-height:2.8rem}}@media only screen and (max-width:991px){.product__list--items__content--title.mb-10{margin-bottom:3px}}@media only screen and (min-width:992px){.product__list--items__content--desc{font-size:1.6rem;line-height:2.8rem}}@media only screen and (max-width:767px){.product__list--items__content--desc{display:none}}@media only screen and (max-width:991px){.product__list--items__content--desc.mb-20{margin-bottom:13px}}@media only screen and (min-width:992px){.product__list--items__content .current__price{font-size:1.8rem;line-height:2.6rem}}@media only screen and (min-width:992px){.product__list--items__content .old__price{font-size:1.6rem;line-height:2.6rem}}.pagination__area{padding:1.5rem 2rem;margin-top:3rem}@media only screen and (min-width:768px){.pagination__area{margin-top:5rem}}.pagination__list{margin-right:.8rem}.pagination__list:last-child{margin-right:0}@media only screen and (min-width:768px){.pagination__list{margin-right:1.2rem}}.pagination__item{width:3.5rem;height:3.5rem;line-height:3.3rem;font-size:1.6rem;font-weight:600;text-align:center;border-radius:50%;border:1px solid var(--border-color2);background:var(--white-color)}.pagination__item--current{background:var(--secondary-color);border-color:var(--secondary-color);color:var(--white-color)}.pagination__item:hover{background:var(--secondary-color);border-color:var(--secondary-color);color:var(--white-color)}@media only screen and (min-width:768px){.pagination__item{width:4rem;height:4rem;line-height:3.8rem}}.product__details--media{position:-webkit-sticky;position:sticky;top:0}@media only screen and (max-width:767px){.product__details--media{margin-bottom:5.7rem}}.product__media--preview__items{position:relative}.product__media--preview__items--link{width:100%;display:block}.product__media--preview__items--img{width:100%;display:block}.product__media--view__icon{position:absolute;top:2rem;left:2rem}.product__media--view__icon--link{width:3.5rem;height:3.5rem;line-height:3.3rem;text-align:center;background:var(--secondary-color);border-radius:50%;color:var(--white-color)}.product__media--view__icon--link:hover{background:var(--primary-color);color:var(--white-color)}.product__media--view__icon.media__play{right:2rem;left:auto}.media__play--icon__link{color:var(--secondary-color)}.media__play--icon__link:hover{color:var(--primary-color)}.product__media--nav{margin-top:2rem}.product__media--nav__items{border:1px solid var(--border-color2);padding:.5rem}.product__media--nav__items--img{width:100%;display:block;cursor:pointer}@media only screen and (min-width:768px){.product__details--info{font-size:1.6rem}}@media only screen and (min-width:992px){.product__details--info__title{font-size:2.8rem}}@media only screen and (min-width:992px){.product__details--info__title.style2{font-size:2.5rem}}.product__details--info__price .current__price{font-size:1.6rem}@media only screen and (min-width:992px){.product__details--info__price .current__price{font-size:2rem}}.product__details--info__price .old__price{font-size:1.4rem;margin-left:.8rem}@media only screen and (min-width:992px){.product__details--info__price .old__price{font-size:1.8rem}}@media only screen and (min-width:992px){.product__details--info__desc{font-size:1.6rem;line-height:2.8rem}}.product__items--rating__count--number{font-size:1.4rem;color:var(--text-gray-color);padding-left:7px;line-height:20px}.variant__buy--now__btn{width:100%}.product__variant--title{font-size:1.5rem;font-weight:700;margin-right:1rem}.product__details--info__meta--list{font-size:1.5rem;margin-bottom:.8rem}.product__details--info__meta--list:last-child{margin-bottom:0}.guarantee__safe--checkout__title{font-size:1.5rem;font-weight:600;margin-bottom:1.2rem}.product__details--tab__section{background:var(--bg-gray-color)}.product__details--tab__section.sidebar__tab--section{padding:3.5rem}@media only screen and (max-width:1599px){.product__details--tab__section.sidebar__tab--section{padding:3rem}}@media only screen and (max-width:767px){.product__details--tab__section.sidebar__tab--section{padding:2rem}}@media only screen and (max-width:575px){.product__details--tab__section.sidebar__tab--section{padding:1.5rem}}@media only screen and (min-width:992px) and (max-width:1199px){.sidebar__tab--section .product__details--tab__list{margin-right:3rem}.sidebar__tab--section .product__details--tab__list:last-child{margin-right:0}}.product__details--tab__inner{background:var(--white-color);padding:3rem}@media only screen and (max-width:767px){.product__details--tab__inner{padding:2.5rem 2rem}}@media only screen and (max-width:575px){.product__details--tab__inner{padding:2.5rem 1rem}}@media only screen and (max-width:767px){.product__details--tab{-ms-flex-wrap:wrap;flex-wrap:wrap}.product__details--tab.mb-30{margin-bottom:1.5rem}}.product__details--tab__list{font-size:1.6rem;line-height:2.6rem;margin-right:5rem;cursor:pointer;-webkit-transition:var(--transition);transition:var(--transition);position:relative;padding-bottom:.4rem}.product__details--tab__list::before{position:absolute;content:"";width:0;height:1px;background:var(--secondary-color);left:50%;right:50%;-webkit-transition:var(--transition);transition:var(--transition);bottom:0}.product__details--tab__list.active{color:var(--secondary-color)}.product__details--tab__list.active::before{width:100%;left:0;right:0}.product__details--tab__list:hover{color:var(--secondary-color)}.product__details--tab__list:hover::before{width:100%;left:0;right:0}.product__details--tab__list:last-child{margin-right:0}@media only screen and (min-width:768px){.product__details--tab__list{font-size:1.7rem}}@media only screen and (min-width:1200px){.product__details--tab__list{font-size:1.8rem}}@media only screen and (max-width:767px){.product__details--tab__list{margin:0 1rem 1.3rem}}.product__tab--content__title{font-weight:600;font-size:1.7rem}@media only screen and (min-width:992px){.product__tab--content__title{font-size:1.8rem}}.product__tab--content__desc{line-height:2.6rem;color:var(--text-gray-color)}@media only screen and (min-width:992px){.product__tab--content__desc{font-size:1.5rem;line-height:2.8rem}}.product__tab--content__list{line-height:2.6rem;margin-bottom:.6rem;color:var(--text-gray-color)}@media only screen and (min-width:992px){.product__tab--content__list{font-size:1.5rem;line-height:2.8rem}}.product__tab--content__list:last-child{margin-bottom:0}.product__tab--content__list--icon{width:2rem;vertical-align:middle;margin-right:.5rem}.product__reviews--header{position:relative;border-bottom:1px solid var(--border-color2);padding-bottom:1.5rem;margin-bottom:2.5rem}@media only screen and (min-width:768px){.product__reviews--header{padding-bottom:2.5rem;margin-bottom:3.5rem}}@media only screen and (max-width:575px){.product__reviews--header{text-align:center}}@media only screen and (max-width:575px){.reviews__ratting{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.reviews__summary--caption{color:var(--secondary-color);margin-left:1.2rem}@media only screen and (max-width:575px){.reviews__summary--caption{margin-left:1rem;font-size:1.3rem}}.actions__newreviews--btn{position:absolute;right:0;bottom:2.2rem}@media only screen and (max-width:575px){.actions__newreviews--btn{position:inherit;bottom:inherit;margin-top:1rem}}.actions__newreviews--btn.primary__btn{font-size:1.4rem;line-height:4rem;height:4rem;padding:0 1.5rem}@media only screen and (min-width:992px){.actions__newreviews--btn.primary__btn{font-size:1.5rem;line-height:4.2rem;height:4.2rem;padding:0 1.8rem}}.reviews__comment--area{padding:0 2rem;margin-bottom:3rem}@media only screen and (max-width:767px){.reviews__comment--area{padding:0;margin-bottom:2rem}}@media only screen and (max-width:1199px){.reviews__comment--area.style2{padding:0}}.reviews__comment--thumb{width:100px}@media only screen and (max-width:575px){.reviews__comment--thumb{margin-bottom:1.5rem}}.reviews__comment--content{width:100%;position:relative}@media only screen and (min-width:576px){.reviews__comment--content{width:calc(100% - 100px);padding-left:2rem}}.reviews__comment--content__date{border:1px solid var(--border-color2);padding:0 .6rem;border-radius:5px;height:3.8rem;line-height:3.6rem;font-size:1.3rem}@media only screen and (min-width:576px){.reviews__comment--content__date{padding:0 .8rem;height:4rem;line-height:3.8rem;font-size:1.4rem}}@media only screen and (min-width:768px){.reviews__comment--content__date{padding:0 1rem;height:4.2rem;line-height:4rem;font-size:1.5rem}}.reviews__comment--content__title{font-weight:600;margin-bottom:.8rem}.reviews__comment--content .reviews__ratting{margin-bottom:.8rem}@media only screen and (max-width:575px){.reviews__comment--content .reviews__ratting{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.reviews__comment--content__desc{margin-bottom:0}@media only screen and (min-width:992px){.reviews__comment--content__desc{font-size:1.5rem;line-height:2.8rem}}.reviews__comment--list{border-bottom:1px solid var(--border-color2);padding-bottom:2rem;margin-bottom:2rem}.reviews__comment--list:last-child{padding-bottom:0;margin-bottom:0;border-bottom:0}@media only screen and (min-width:768px){.reviews__comment--list{padding-bottom:2.5rem;margin-bottom:2.5rem}}@media only screen and (max-width:575px){.reviews__comment--list{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.reviews__comment--list.margin__left{margin-left:3rem}@media only screen and (min-width:992px){.reviews__comment--list.margin__left{margin-left:5rem}}@media only screen and (max-width:1199px){.reviews__comment--list.margin__left.style2{margin-left:0}}.reviews__comment--top{margin-bottom:1rem}@media only screen and (min-width:992px){.reviews__comment--reply__title{font-size:2.4rem;line-height:2.8rem}}@media only screen and (max-width:575px){.reviews__comment--reply__title{text-align:center}}.reviews__comment--reply__textarea{width:100%;height:100px;resize:none;padding:1.2rem 1.5rem;border:1px solid var(--border-color2);border-radius:.5rem}@media only screen and (min-width:768px){.reviews__comment--reply__textarea{height:150px}}@media only screen and (min-width:992px){.reviews__comment--reply__textarea{font-size:1.5rem}}.reviews__comment--reply__textarea:focus{border-color:var(--secondary-color)}.reviews__comment--reply__input{width:100%;border:1px solid var(--border-color2);height:5rem;border-radius:.5rem;padding:0 1.5rem}@media only screen and (min-width:992px){.reviews__comment--reply__input{font-size:1.5rem}}.reviews__comment--reply__input:focus{border-color:var(--secondary-color)}.reviews__comment--btn{font-size:1.5rem;line-height:4rem;height:4rem}@media only screen and (max-width:575px){.reviews__comment--rating{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.product__details--gallery{position:-webkit-sticky;position:sticky;top:0}@media only screen and (max-width:767px){.product__details--gallery{margin-bottom:4.5rem}}@media only screen and (min-width:992px) and (max-width:1199px){.add__to--cart__text.style2{display:none}}.blog__wrapper--sidebar{position:-webkit-sticky;position:sticky;top:0}.blog__sidebar--widget{position:-webkit-sticky;position:sticky;top:0}@media only screen and (max-width:991px){.blog__sidebar--widget.left{margin-top:8rem}}@media only screen and (max-width:767px){.blog__sidebar--widget.left{margin-top:6rem}}.blog__post--header.mb-30{margin-bottom:2.5rem}@media only screen and (min-width:992px){.post__header--title{line-height:3rem;font-size:2.5rem}}@media only screen and (min-width:1200px){.post__header--title{line-height:3.5rem;font-size:3rem}}@media only screen and (min-width:1600px){.post__header--title{font-size:3.5rem;line-height:4rem}}.blog__post--meta{text-transform:capitalize}@media only screen and (min-width:992px){.blog__post--meta{font-size:1.5rem}}.blog__post--meta__link{color:var(--secondary-color)}.blog__post--meta__link:hover{color:var(--secondary-color);text-decoration:underline}.blog__thumbnail{line-height:1}@media only screen and (max-width:767px){.blog__thumbnail.mb-30{margin-bottom:2rem}}.blog__details--content__subtitle{line-height:2.6rem}@media only screen and (min-width:992px){.blog__details--content__subtitle{line-height:3rem}}@media only screen and (min-width:1200px){.blog__details--content__subtitle{line-height:3.5rem}}.blockquote__content{padding:20px 30px;text-align:center;border-radius:10px}@media only screen and (min-width:992px){.blockquote__content{padding:30px 40px}}@media only screen and (min-width:1200px){.blockquote__content{padding:40px 70px}}@media only screen and (max-width:767px){.blockquote__content{margin:0 0 2.5rem;padding:1.5rem 2rem}}.blockquote__content--desc{font-size:1.6rem;line-height:2.8rem;font-style:italic;font-weight:500}@media only screen and (min-width:768px){.blockquote__content--desc{font-size:1.8rem;line-height:3rem}}@media only screen and (min-width:1600px){.blockquote__content--desc{font-size:2rem;line-height:3.4rem}}.blog__tags--social__media{padding:5rem 0}@media only screen and (max-width:1199px){.blog__tags--social__media{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}@media only screen and (max-width:1199px){.blog__tags--media{margin-bottom:2rem}}@media only screen and (max-width:575px){.blog__tags--media{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}.blog__tags--media__title{font-size:1.5rem;font-weight:600;margin-right:1rem}@media only screen and (min-width:992px){.blog__tags--media__title{font-size:1.6rem}}@media only screen and (max-width:575px){.blog__tags--media__title{margin-right:0;margin-bottom:1rem}}.blog__tags--media__list{margin-right:.7rem}.blog__tags--media__list:last-child{margin-right:0}.blog__tags--media__link{border:1px solid var(--border-color2);background:var(--white-color);padding:.5rem 1.2rem;line-height:2.5rem;border-radius:.3rem;text-transform:capitalize}.blog__tags--media__link:hover{background:var(--primary-color);border-color:var(--primary-color);color:var(--white-color)}@media only screen and (max-width:575px){.blog__tags--media__link{padding:.4rem .8rem;font-size:1.3rem}}.meta__deta{font-weight:500;margin-top:.6rem;font-size:1.5rem}.blog__social--media__title{font-size:1.5rem;font-weight:600;margin-right:1rem}@media only screen and (min-width:992px){.blog__social--media__title{font-size:1.6rem}}.blog__social--media__list{margin-right:1rem}.blog__social--media__list:last-child{margin-right:0}.blog__social--media__link{width:3rem;height:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:var(--secondary-color);color:var(--white-color);border-radius:50%}.blog__social--media__link:hover{background:var(--primary-color);color:var(--white-color)}.related__post--area{margin-bottom:50px}@media only screen and (max-width:767px){.related__post--area{margin-bottom:40px}}.related__post--items:hover .related__post--img{-webkit-transform:scale(1.05);transform:scale(1.05)}.related__post--thumb{line-height:1;overflow:hidden}@media only screen and (max-width:479px){.related__post--text{text-align:center}}.related__post--title{font-size:1.7rem;line-height:2.2rem;margin-bottom:5px}@media only screen and (min-width:992px){.related__post--title{font-size:1.8rem;line-height:2.4rem}}@media only screen and (min-width:1200px){.related__post--title{font-size:2rem}}.related__post--deta{font-size:1.5rem;line-height:2.2rem}.comment__reply--btn{height:3.2rem;line-height:3.2rem;padding:0 2.2rem;font-size:1.4rem;border:0}@media only screen and (min-width:992px){.comment__reply--btn{font-size:1.6rem}}.comment__content--topbar{margin-bottom:1rem}.reviews__comment--content__title2{font-weight:600;line-height:2.2rem;margin-bottom:.6rem;font-size:1.6rem}@media only screen and (min-width:992px){.reviews__comment--content__title2{font-size:1.8rem}}.reviews__comment--content__date2{font-size:1.5rem;color:var(--text-gray-color)}.reviews__comment--area2.mb-50{margin-bottom:5rem}@media only screen and (max-width:575px){.reviews__comment--area2.mb-50{margin-bottom:4.8rem}}@media only screen and (min-width:1366px){.contact__section--inner{padding:0 13rem}}@media only screen and (max-width:767px){.contact__section.section--padding.color-scheme-2{padding-bottom:4.8rem}}@media only screen and (max-width:767px){.home__contact--info{margin-bottom:3rem}}.home__contact--info__items{border-bottom:1px solid var(--border-color3);padding-bottom:2.5rem;margin-bottom:2.5rem}@media only screen and (max-width:575px){.home__contact--info__items{padding-bottom:2rem;margin-bottom:2rem;text-align:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.home__contact--info__items:last-child{padding-bottom:0;margin-bottom:0;border-bottom:0}.home__contact--info__items:hover .home__contact--info__icon{color:var(--secondary-color)}.home__contact--info__icon{margin-right:1.5rem;padding-top:.2rem;-webkit-transition:var(--transition);transition:var(--transition)}@media only screen and (min-width:1200px){.home__contact--info__icon{margin-right:2.5rem}}@media only screen and (max-width:575px){.home__contact--info__icon{margin-right:0;padding-top:0;margin-bottom:.5rem}}.home__contact--info__icon svg{width:2.5rem}@media only screen and (max-width:575px){.home__contact--info__icon svg{width:2rem}}.home__contact--map iframe{width:100%}.contact__form{background:var(--white-color);border-radius:10px;-webkit-box-shadow:0 7px 20px rgba(0,0,0,.16);box-shadow:0 7px 20px rgba(0,0,0,.16);padding:2rem}@media only screen and (min-width:576px){.contact__form{padding:3rem}}@media only screen and (min-width:768px){.contact__form{padding:4rem}}@media only screen and (min-width:992px){.contact__form{margin-left:36rem;padding:5.5rem 3.5rem 5.5rem 10rem}}@media only screen and (min-width:1200px){.contact__form{margin-left:40rem}}.contact__form--title{font-weight:600}@media only screen and (max-width:1199px){.contact__form--title.mb-30{margin-bottom:2rem}}.contact__form--label{display:block;margin-bottom:8px}.contact__form--label__star{color:var(--secondary-color)}.contact__form--input{width:100%;height:45px;padding:5px 15px;border-radius:8px;border:1px solid var(--border-color)}.contact__form--input:focus{border-color:var(--secondary-color)!important}@media only screen and (min-width:576px){.contact__form--input{height:50px}}.contact__form--textarea{width:100%;height:100px;padding:12px 15px;border-radius:8px;resize:none;border:1px solid var(--border-color);font-family:var(--font-poppins)}.contact__form--textarea:focus{border-color:var(--secondary-color)!important}@media only screen and (min-width:992px){.contact__form--textarea{height:120px}}@media only screen and (min-width:1200px){.contact__form--textarea{height:160px}}.contact__info{background:var(--secondary-color);width:46rem;padding:2rem;position:absolute;top:50%;left:0;-webkit-transform:translatey(-50%);transform:translatey(-50%)}@media only screen and (min-width:992px){.contact__info{width:42rem;padding:4rem 3rem}}@media only screen and (min-width:1200px){.contact__info{width:46rem;padding:5rem 6rem}}@media only screen and (max-width:991px){.contact__info{position:inherit;top:inherit;-webkit-transform:inherit;transform:inherit;margin-top:3rem;width:100%;padding:3rem}}@media only screen and (max-width:575px){.contact__info{padding:2rem}}.contact__info--items{margin-bottom:2.7rem}.contact__info--items:last-child{margin-bottom:0}@media only screen and (max-width:575px){.contact__info--items{margin-bottom:2rem}}.contact__info--icon{margin-right:1.2rem;color:var(--white-color);padding-top:.8rem}@media only screen and (min-width:1200px){.contact__info--icon{margin-right:2rem}}@media only screen and (max-width:575px){.contact__info--icon svg{width:2.5rem}}.contact__info--content__title{font-weight:600}@media only screen and (min-width:992px){.contact__info--content__title{font-size:2rem;line-height:2.8rem}}.contact__info--content__desc{font-size:1.5rem;line-height:2.6rem}@media only screen and (min-width:1200px){.contact__info--content__desc{font-size:1.6rem;line-height:2.7rem}}.contact__info--content__desc a:hover{color:var(--primary-color)}.contact__info--social__list{margin-right:11px}.contact__info--social__list:last-child{margin-right:0}.contact__info--social__icon{width:3rem;height:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:var(--white-color);color:var(--secondary-color);border-radius:50%}.contact__info--social__icon:hover{background:var(--primary-color);color:var(--white-color)}.contact__map--iframe{width:100%;height:280px;margin-bottom:-7px}@media only screen and (min-width:768px){.contact__map--iframe{height:320px}}@media only screen and (min-width:992px){.contact__map--iframe{height:400px}}@media only screen and (min-width:1200px){.contact__map--iframe{height:500px}}@media only screen and (min-width:1600px){.contact__map--iframe{height:600px}}@media only screen and (max-width:575px){.cart__title{text-align:center}}.cart__table--inner{width:100%;border-spacing:0}@media only screen and (max-width:575px){.cart__table--header{display:none}}.cart__table--header__list{padding:0 2rem 1.5rem 0;text-transform:uppercase;text-align:left;border-bottom:1px solid var(--border-color2);font-size:1.4rem}.cart__table--header__list:last-child{padding-right:0}@media only screen and (min-width:768px){.cart__table--header__list{padding:0 2rem 2rem 0}}@media only screen and (min-width:992px){.cart__table--header__list{font-size:1.5rem}}.cart__table--header__list.text-center{text-align:center}.cart__table--header__list.text-right{text-align:right}@media only screen and (max-width:575px){.cart__table--body__items{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.cart__table--body__list{border-bottom:1px solid var(--border-color2);padding:2rem 1.5rem 2rem 0}.cart__table--body__list:last-child{padding-right:0}@media only screen and (min-width:768px){.cart__table--body__list{padding:2rem 2rem 2rem 0}}@media only screen and (max-width:575px){.cart__table--body__list{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:1.2rem 0}}.cart__thumbnail{max-width:10rem;line-height:1}@media only screen and (max-width:767px){.cart__thumbnail{max-width:8rem}}.cart__content{padding-left:1.5rem}@media only screen and (min-width:1200px){.cart__content{padding-left:2rem}}.cart__content--variant{display:block;margin-bottom:.5rem;line-height:2.2rem;font-size:1.3rem}.cart__content--variant:last-child{margin-bottom:0}.cart__content--title{margin-bottom:.5rem;line-height:2.2rem}@media only screen and (min-width:768px){.cart__content--title{line-height:2.5rem}}.cart__remove--btn{font-weight:600;width:3rem;height:3rem;text-align:center;line-height:3rem;background:var(--white-color);-webkit-box-shadow:0 2px 22px rgba(0,0,0,.16);box-shadow:0 2px 22px rgba(0,0,0,.16);margin-right:1rem;border-radius:50%;border:0;padding:0}.cart__remove--btn:hover{color:var(--secondary-color)}@media only screen and (min-width:768px){.cart__remove--btn{margin-right:1.5rem}}.cart__price{font-weight:600}@media only screen and (min-width:992px){.cart__price{font-size:1.6rem}}.continue__shopping{padding-top:2rem}.continue__shopping--link{font-size:1.5rem;font-weight:600;color:var(--secondary-color)}@media only screen and (min-width:992px){.continue__shopping--link{font-size:1.7rem}}.continue__shopping--clear{font-size:1.5rem;font-weight:600;color:var(--secondary-color);border:0;padding:0;background:inherit}@media only screen and (min-width:992px){.continue__shopping--clear{font-size:1.7rem}}.cart__summary{-webkit-box-shadow:0 2px 22px rgba(0,0,0,.16);box-shadow:0 2px 22px rgba(0,0,0,.16);padding:2rem;background:var(--white-color);position:-webkit-sticky;position:sticky;top:0}@media only screen and (max-width:991px){.cart__summary{margin-top:7.5rem}}@media only screen and (max-width:767px){.cart__summary{margin-top:5.5rem}}.cart__summary--total__table{width:100%}.coupon__code--title{font-size:1.7rem;margin-bottom:.7rem;line-height:2.4rem}@media only screen and (min-width:992px){.coupon__code--title{font-size:2rem}}.coupon__code--desc{margin-bottom:1.5rem}.coupon__code--field__input{border:1px solid var(--border-color);height:4rem;padding:0 1rem;width:100px}@media only screen and (min-width:768px){.coupon__code--field__input{width:130px}}@media only screen and (min-width:992px){.coupon__code--field__input{width:120px}}@media only screen and (min-width:1200px){.coupon__code--field__input{width:160px}}.coupon__code--field__input:focus{border-color:var(--secondary-color)}.coupon__code--field__btn{height:4rem;line-height:4rem;padding:0 1rem;margin-left:1.5rem;font-size:1.4rem}@media only screen and (min-width:1200px){.coupon__code--field__btn{margin-left:2.5rem;font-size:1.5rem}}@media only screen and (min-width:1366px){.coupon__code--field__btn{padding:0 2.2rem}}.cart__note--title{font-size:1.7rem;margin-bottom:.7rem;line-height:2.4rem}@media only screen and (min-width:992px){.cart__note--title{font-size:2rem}}.cart__note--desc{margin-bottom:1.5rem}.cart__note--textarea{border:1px solid var(--border-color);height:8rem;padding:1rem;width:100%;resize:none}.cart__note--textarea:focus{border-color:var(--secondary-color)}@media only screen and (min-width:1200px){.cart__note--textarea{height:10rem}}.cart__summary--total__list{margin-bottom:1rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.cart__summary--total__list:last-child{margin-bottom:0}.cart__summary--footer__desc{font-size:1.5rem;margin-bottom:1.5rem}.cart__summary--footer__btn{height:4rem;line-height:4rem;padding:0 1.5rem;font-size:1.4rem}@media only screen and (min-width:992px){.cart__summary--footer__btn{padding:0 2rem}}@media only screen and (min-width:1200px){.cart__summary--footer__btn{padding:0 2.5rem;font-size:1.5rem}}.wishlist__cart--btn{font-size:1.4rem}@media only screen and (min-width:992px){.wishlist__cart--btn{font-size:1.5rem;line-height:4rem;height:4rem;padding:0 1.8rem}}@media only screen and (max-width:767px){.wishlist__cart--btn{padding:.5rem .8rem;height:auto;line-height:2.4rem;border-radius:5px;font-size:1.3rem}}@media only screen and (max-width:767px){.checkout__page--inner{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.checkout__mian{padding:4rem 2rem 0 0;width:60%}.checkout__mian--header{padding:0}@media only screen and (min-width:992px){.checkout__mian{padding:5rem 5rem 0 0}}@media only screen and (max-width:767px){.checkout__mian{width:100%;padding:3rem 0 0}}.checkout__sidebar{width:40%;padding:3rem 0 0 2rem;border-left:1px solid var(--border-color2)}@media only screen and (min-width:992px){.checkout__sidebar{padding:3rem 0 0 4.5rem}}@media only screen and (max-width:767px){.checkout__sidebar{width:100%;padding:3rem 0 0;display:none}}.checkout__breadcrumb{padding:0;margin:0}@media only screen and (max-width:767px){.checkout__breadcrumb{margin-top:2.5rem}}.breadcrumb__link{font-size:1.3rem;color:var(--secondary-color)}.readcrumb__chevron-icon{color:#737373;width:1.6rem;height:1.6rem;margin:0 .6rem}.breadcrumb__text{color:#737373;font-size:1.3rem}.breadcrumb__text.current{color:var(----black-color)}.order__summary--mobile__version{display:none}@media only screen and (max-width:767px){.order__summary--mobile__version{display:block}}.order__summary--toggle{width:100%;text-align:left;background:var(--bg-gray-color);border:0;border:1px solid var(--border-color2);padding:1.2rem}.order__summary--toggle__inner{width:100%}.order__summary--toggle__text{color:var(--secondary-color)}.order__summary--toggle__icon{color:var(--secondary-color);vertical-align:middle;line-height:1.5rem;margin-right:1rem}.summary__table{width:100%}.summary__table--items{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.summary__table--list{padding:1rem 2rem 1rem 0;border-bottom:1px solid var(--border-color2)}.summary__table--list:last-child{padding-right:0}details>summary{list-style:none}details>summary::-webkit-details-marker{display:none}.order__summary--final__price{float:right;font-size:1.5rem;font-weight:600}.order__summary--section{background:var(--bg-gray-color);padding:3rem 1rem 1rem}.checkout__checkbox{position:relative}.checkout__checkbox--input{position:absolute;left:-1px;top:45%;-webkit-transform:translatey(-50%);transform:translatey(-50%);opacity:0;cursor:pointer;z-index:999}.checkout__checkbox--input:checked~.checkout__checkbox--checkmark{background-color:var(--secondary-color);border:1px solid var(--secondary-color)}.checkout__checkbox--input:checked~.checkout__checkbox--checkmark::before{display:block}.checkout__checkbox--label{padding-left:3rem;cursor:pointer}.checkout__checkbox--checkmark{height:1.8rem;width:1.8rem;border:1px solid var(--border-color);border-radius:.3rem;display:block;position:absolute;top:50%;left:0;-webkit-transform:translatey(-50%);transform:translatey(-50%);background:var(--white-color);-webkit-transition:var(--transition);transition:var(--transition)}.checkout__checkbox--checkmark::before{left:.5rem;top:.3rem;width:.5rem;height:.8rem;border:solid #fff;border-top-width:medium;border-right-width:medium;border-bottom-width:medium;border-left-width:medium;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);transform:rotate(45deg);content:"";position:absolute;display:none}.checkout__input--field{width:100%;border:1px solid var(--border-color2);height:4.5rem;padding:0 1.5rem}.checkout__input--field:focus{border-color:var(--secondary-color)}@media only screen and (max-width:575px){.checkout__section--header{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}.section__header--title{font-size:1.8rem;line-height:2.2rem}@media only screen and (min-width:1200px){.section__header--title{font-size:2rem;line-height:2.4rem}}@media only screen and (max-width:575px){.section__header--title{margin-bottom:.8rem}}.section__header--desc{margin-top:.5rem}.layout__flex--item{color:var(--text-gray-color)}.layout__flex--item__link{color:var(--secondary-color)}.section__shipping--address{padding:3rem 0 2rem}@media only screen and (min-width:992px){.section__shipping--address{padding:4rem 0 3rem}}.section__shipping--address.pt-10{padding-top:1rem}.section__shipping--address.pt-0{padding-top:0}.checkout__input--select{position:relative}.checkout__input--select__field{width:100%;border:0;height:4.5rem;padding:1.6rem 1.5rem .5rem;border:1px solid var(--border-color2);-webkit-appearance:none;cursor:pointer}.checkout__input--select__field:focus{border-color:var(--secondary-color)}.checkout__select--label{position:absolute;top:.3rem;padding:0 1.8rem;line-height:2rem;font-size:1.2rem}.previous__link--content{margin-left:2rem;color:var(--secondary-color)}.checkout__footer{border:0}.product__thumbnail{width:7rem;border:1px solid var(--border-color2);position:relative;line-height:1}.product__thumbnail--quantity{position:absolute;top:-6px;right:-5px;width:2rem;height:2rem;line-height:2rem;background:#7f7f7f;color:var(--white-color);text-align:center;border-radius:50%;font-size:1.2rem}.product__description{padding-left:1.5rem}.product__description--name{font-size:1.4rem;line-height:2rem;font-weight:600;opacity:.9}.product__description--variant{font-size:1.2rem;color:var(--light-color);line-height:2rem}.checkout__product--table{margin-bottom:2rem}.checkout__product--table .cart__table--body__list{padding:1rem 2rem 1rem 0}.checkout__product--table .cart__table--body__list:last-child{padding-right:0}.checkout__discount--code{margin-bottom:2.5rem}.checkout__discount--code__input--field{width:100%;border:1px solid var(--border-color2);height:4rem;padding:0 1.5rem}.checkout__discount--code__input--field:focus{border-color:var(--secondary-color)}.checkout__discount--code__btn{height:4rem;line-height:4rem;margin-left:2rem;padding:0 2rem;font-size:1.4rem}@media only screen and (min-width:992px){.checkout__discount--code__btn{font-size:1.5rem}}.checkout__total{border-top:1px solid var(--border-color2);padding-top:1.2rem}.checkout__total--table{width:100%}.checkout__total--calculated__text{font-size:1.3rem;color:var(--text-gray-color)}.checkout__total--title{color:var(--text-gray-color)}.checkout__total--footer__list{padding-top:3rem;position:relative}.checkout__total--footer__list::before{position:absolute;content:"";width:100%;height:1px;background:#e4e4e4;top:1.5rem;left:0}.checkout__total--footer__title{font-size:1.6rem}.checkout__total--footer__amount{font-size:2.2rem;font-weight:600}.checkout__contact--information2{border:1px solid var(--border-color2);padding:1rem 2rem}.checkout__review{padding-bottom:1rem;margin-bottom:1rem;border-bottom:1px solid var(--border-color2)}.checkout__review:last-child{border-bottom:0;padding-bottom:0;margin-bottom:0}@media only screen and (max-width:575px){.checkout__review--inner{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}.checkout__review--label{color:#737373;width:6.5rem}@media only screen and (min-width:768px){.checkout__review--label{width:8rem}}@media only screen and (min-width:576px){.checkout__review--content{margin-left:1rem}}@media only screen and (min-width:768px){.checkout__review--content{margin-left:1.5rem}}.checkout__review--link__text{color:var(--secondary-color);border:0;background:inherit;padding:0}.shipping__contact--box{border:1px solid var(--border-color2);padding:1rem 2rem}.shipping__contact--box__list{display:table;padding-bottom:1rem;margin-bottom:1rem;border-bottom:1px solid var(--border-color2)}.shipping__contact--box__list:last-child{border-bottom:0;padding-bottom:0;margin-bottom:0}.shipping__radio--input{display:table-cell;padding-right:1.5rem}.shipping__radio--label{display:table-cell;width:100%}.shipping__radio--label__primary{display:table-cell;width:100%}.shipping__radio--label__price{display:table-cell;text-align:right;padding-left:1.5rem}.checkout__content--step__inner3{border:1px solid var(--border-color2)}.checkout__address--content__header{border-bottom:1px solid var(--border-color2);padding:1rem 1.5rem}.checkout__content--input__box--wrapper{padding:1.5rem;background-color:#fafafa;border-radius:0 0 .5rem .5rem}.checkout__input--field__button{position:absolute;padding:0;border:0;right:1.2rem;top:50%;background:inherit;-webkit-transform:translatey(-50%);transform:translatey(-50%);line-height:1}.checkout__header--style3{padding-left:5.5rem}.account__wrapper.account__wrapper--style4{width:100%}@media only screen and (max-width:991px){.account__wrapper.account__wrapper--style4{margin-bottom:2.5rem}}.checkout__submission--icon{position:absolute;top:0;left:0;width:4rem;height:4rem;border:2px solid var(--secondary-color);border-radius:50%;text-align:center;line-height:3.8rem}.checkout__submission--icon svg{color:var(--secondary-color)}.checkout__order--number{padding-bottom:.3rem}.order__confirmed--area{border:1px solid var(--border-color2);padding:1.5rem}.customer__information--title{margin-bottom:1.2rem}.customer__information--area{border:1px solid var(--border-color2);padding:1.5rem}.customer__information--list{width:50%;margin-right:2rem}.customer__information--list:last-child{margin-right:0}.customer__information--subtitle{font-size:1.4rem;font-weight:600}.customer__information--step{margin-bottom:1.2rem}.customer__information--step:last-child{margin-bottom:0}.customer__information--text{font-size:1.3rem;display:inline-block;line-height:2.2rem}.customer__information--text__link{font-size:1.3rem;display:inline-block;line-height:2.2rem}.my__account--section__inner{background:var(--white-color);-webkit-box-shadow:0 2px 22px rgba(0,0,0,.16);box-shadow:0 2px 22px rgba(0,0,0,.16);padding:3rem 2rem}@media only screen and (min-width:1199px){.my__account--section__inner{padding:5rem 4rem}}@media only screen and (max-width:991px){.my__account--section__inner{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}.account__left--sidebar{border-right:1px solid var(--border-color2);padding-right:3rem;margin-right:3rem;width:18rem}@media only screen and (min-width:1199px){.account__left--sidebar{padding-right:5rem;margin-right:5rem;width:23rem}}@media only screen and (max-width:991px){.account__left--sidebar{width:100%;padding-right:0;margin-right:0;border-right:0;border-bottom:1px solid var(--border-color2);padding-bottom:2.5rem;margin-bottom:2.5rem}}.account__wrapper{width:calc(100% - 18rem)}@media only screen and (min-width:1199px){.account__wrapper{width:calc(100% - 23rem)}}@media only screen and (max-width:991px){.account__wrapper{width:100%}}@media only screen and (max-width:991px){.account__menu{width:250px;margin-right:3rem}}@media only screen and (max-width:479px){.account__menu{margin-right:0}}.account__menu--list{font-size:1.5rem;line-height:2.5rem;font-weight:600;cursor:pointer;-webkit-transition:var(--transition);transition:var(--transition);margin-bottom:1.5rem}.account__menu--list:last-child{margin-bottom:0}.account__menu--list:hover{color:var(--secondary-color)}.account__menu--list.active{color:var(--secondary-color)}@media only screen and (min-width:992px){.account__menu--list{font-size:1.6rem}}.account__details.two{padding-top:0}@media only screen and (min-width:992px){.account__details{padding-top:3rem}}@media only screen and (max-width:479px){.account__details{padding-top:3rem}}.account__details--title{margin-bottom:1rem}.account__details--desc{color:var(--text-gray-color);line-height:3rem;margin-bottom:2rem;font-size:1.5rem}.account__details--link{color:var(--secondary-color);border-bottom:1px solid var(--secondary-color);font-size:1.5rem}.account__details--link:hover{color:var(--primary-color);border-color:var(--primary-color)}.new__address--btn{padding:0 2.5rem}@media only screen and (min-width:992px){.new__address--btn{font-size:1.5rem}}.account__details--footer{margin-top:2rem}.account__details--footer__btn{background:var(--white-color);border:1px solid var(--black-color);padding:0 2.5rem;height:4rem;line-height:3.8rem;border-radius:2.5rem;margin-right:1rem;font-size:1.5rem}.account__details--footer__btn:last-child{margin-right:0}.account__details--footer__btn:hover{color:var(--secondary-color);border-color:var(--secondary-color)}.account__welcome--text{font-size:1.6rem;margin-bottom:2rem}@media only screen and (min-width:992px){.account__welcome--text{font-size:1.8rem;margin-bottom:3rem}}.account__content--title{font-weight:600}.account__table{width:100%;border:1px solid var(--border-color2);border-spacing:0;border-bottom:0}@media only screen and (max-width:479px){.account__table{border:0}}@media only screen and (max-width:767px){.account__table--header{display:none}}.account__table--header__child--items{text-align:left;border-bottom:1px solid var(--border-color2);padding:1.7rem 1.3rem;font-size:1.5rem}.account__table--header__child--items:last-child{text-align:right}@media only screen and (min-width:1200px){.account__table--header__child--items{font-size:1.6rem;padding:1.7rem 1.5rem}}@media only screen and (max-width:767px){.account__table--body.mobile__none{display:none}}.account__table--body.mobile__block{display:none}@media only screen and (max-width:767px){.account__table--body.mobile__block{display:block}}@media only screen and (max-width:767px){.account__table--body__child{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-bottom:2rem;border-bottom:1px solid #ddd;padding-bottom:2rem}.account__table--body__child:last-child{margin-bottom:0}}.account__table--body__child--items{border-bottom:1px solid var(--border-color2);padding:1.7rem 2rem;color:var(--text-gray-color)}.account__table--body__child--items:last-child{text-align:right}@media only screen and (max-width:767px){.account__table--body__child--items{padding:.5rem 2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;border:0;font-size:1.4rem}}@media only screen and (max-width:479px){.account__table--body__child--items{padding:.5rem 0}}@media only screen and (max-width:1199px){.error__content--img{max-width:600px}}@media only screen and (max-width:767px){.error__content--img{max-width:450px}}@media only screen and (max-width:575px){.error__content--img{max-width:100%;padding:0 3rem}}.error__content--title{font-weight:600;text-transform:uppercase;margin-bottom:1.5rem;font-size:2rem;line-height:3rem}@media only screen and (min-width:576px){.error__content--title{margin-bottom:1.5rem;font-size:2.4rem;line-height:2.8rem}}@media only screen and (min-width:768px){.error__content--title{margin-bottom:1.8rem;font-size:3rem;line-height:3.5rem}}@media only screen and (min-width:992px){.error__content--title{font-size:3.5rem;line-height:4rem;margin-bottom:2rem}}@media only screen and (min-width:1200px){.error__content--title{font-size:3.8rem;line-height:4.3rem;margin-bottom:2.5rem}}@media only screen and (min-width:1366px){.error__content--title{font-size:4rem;line-height:4.5rem}}.error__content--desc{font-size:1.5rem}@media only screen and (min-width:768px){.error__content--desc{font-size:1.6rem;line-height:2.2rem;margin-bottom:2.5rem}}@media only screen and (min-width:992px){.error__content--desc{font-size:1.7rem;line-height:2.2rem;margin-bottom:2.5rem}}@media only screen and (min-width:1200px){.error__content--desc{font-size:1.8rem;line-height:2.3rem;margin-bottom:3rem}}@media only screen and (min-width:992px){.error__content--btn{font-size:1.6rem}}.account__login{background:var(--white-color);padding:2.5rem;border-radius:1rem;-webkit-box-shadow:0 5px 30px rgba(0,0,0,.1);box-shadow:0 5px 30px rgba(0,0,0,.1)}@media only screen and (min-width:992px){.account__login{padding:3rem}}.account__login--header__title{font-weight:600}.account__login--header__desc{font-size:1.5rem;font-weight:600}.account__login--input{width:100%;height:4.8rem;border:1px solid var(--border-color);border-radius:.5rem;padding:0 1.5rem;margin-bottom:1.5rem}@media only screen and (min-width:768px){.account__login--input{height:5.2rem}}@media only screen and (min-width:992px){.account__login--input{font-size:1.5rem}}.account__login--input:focus{border-color:var(--secondary-color)}.account__login--btn{width:100%;border-radius:.5rem;font-size:1.5rem}@media only screen and (min-width:992px){.account__login--btn{font-size:1.7rem}}@media only screen and (max-width:767px){.account__login--btn{height:4rem;line-height:4rem}}.account__login--signup__text{text-align:center;font-size:1.5rem;font-weight:600;color:var(--text-gray-color)}.account__login--signup__text button{padding:0;background:inherit;border:0;font-weight:600}.account__login--signup__text button:hover{color:var(--secondary-color)}.account__login--forgot{font-weight:600;color:var(--secondary-color);font-size:1.5rem;padding:0;background:inherit;border:0}@media only screen and (max-width:575px){.account__login--forgot{margin-top:.6rem}}.account__login--forgot:hover{color:var(--primary-color)}@media only screen and (max-width:767px){.account__login.register{margin-top:6rem}}@media only screen and (max-width:575px){.account__login--remember__forgot{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}}@media only screen and (max-width:575px){.account__login--remember .checkout__checkbox--checkmark{top:0;top:5px;-webkit-transform:inherit;transform:inherit}}.login__remember--label{font-size:1.3rem;font-weight:600}@media only screen and (min-width:992px){.login__remember--label{font-size:1.5rem}}.account__login--divide{text-align:center;position:relative;padding:1rem 0}.account__login--divide::before{position:absolute;content:"";width:100%;height:.1rem;background:var(--border-color2);top:50%;left:0;-webkit-transform:translatey(-50%);transform:translatey(-50%)}.account__login--divide__text{padding:0 .8rem;background:var(--white-color);position:relative;font-weight:500;color:var(--light-color)}@media only screen and (min-width:992px){.account__login--divide__text{font-size:1.5rem}}.account__social--link{height:4.2rem;line-height:4.2rem;padding:0 2.5rem;color:var(--white-color);border-radius:.5rem;font-weight:600;margin-right:1rem}.account__social--link.facebook{background:#4867aa}.account__social--link.facebook:hover{background:var(--secondary-color);color:var(--white-color)}.account__social--link.google{background:#e94235}.account__social--link.google:hover{background:var(--secondary-color);color:var(--white-color)}.account__social--link.twitter{background:#55adee}.account__social--link.twitter:hover{background:var(--secondary-color);color:var(--white-color)}.account__social--link:last-child{margin-right:0}@media only screen and (min-width:768px){.account__social--link{padding:0 2rem}}@media only screen and (min-width:992px){.account__social--link{padding:0 3.2rem;margin-right:1.2rem;font-size:1.5rem}}@media only screen and (min-width:1200px){.account__social--link{padding:0 4.5rem;margin-right:2rem}}@media only screen and (max-width:575px){.account__social--link{height:3.5rem;line-height:3.5rem;padding:0 1.3rem;font-size:1.4rem}}.compare__table{border:1px solid var(--border-color2);border-spacing:0;border-bottom:0}.compare__table--items__child{padding:1.2rem;border-left:1px solid var(--border-color2);border-bottom:1px solid var(--border-color2)}.compare__table--items__child:first-child{border-left:0}@media only screen and (max-width:991px){.compare__table--items__child{min-width:200px}}.compare__table--items__child--header{padding:1rem;border-bottom:1px solid var(--border-color2);text-transform:uppercase;background:var(--gray-color2);font-size:1.4rem;text-align:center}@media only screen and (min-width:1200px){.compare__table--items__child--header{font-size:1.5rem}}.compare__product--title{font-size:1.4rem;line-height:2.4rem;margin-bottom:1rem}.compare__product--thumb{border-radius:.5rem}.compare__remove{padding:0;float:right;width:100%;border:0;background:inherit;color:var(--text-gray-color);margin-bottom:5px}.compare__remove:hover{color:var(--secondary-color)}.compare__description{color:var(--text-gray-color);padding:.5rem 0}.compare__instock{text-transform:uppercase;font-size:1.3rem}.compare__product--price{color:var(--text-gray-color)}.compare__cart--btn{border-radius:.5rem;text-transform:uppercase;padding:0 1.8rem;height:3.6rem;line-height:3.6rem;font-size:1.3rem}@media only screen and (min-width:992px){.compare__cart--btn{height:4rem;line-height:4rem;padding:0 2.2rem}}.face__step{margin-bottom:3.5rem;padding-bottom:3rem}.face__step:last-child{margin-bottom:0;padding-bottom:0}.face__step--title{font-weight:600}@media only screen and (max-width:767px){.face__step--title.mb-30{margin-bottom:2.2rem}}.faq__accordion--btn{-webkit-box-shadow:0 2px 22px rgba(0,0,0,.1);box-shadow:0 2px 22px rgba(0,0,0,.1);padding:1.8rem 6rem 1.8rem 2rem;font-size:1.5rem;border-radius:.5rem}.faq__accordion--btn .accordion__items--button__icon{right:1.5rem;pointer-events:none}@media only screen and (min-width:768px){.faq__accordion--btn{font-size:1.7rem}}.ctn-preloader{-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;height:100%;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:fixed;left:0;top:0;width:100%;z-index:9999;pointer-events:none}.ctn-preloader .animation-preloader{position:absolute;z-index:100}.ctn-preloader .animation-preloader .spinner{-webkit-animation:spinner 1s infinite linear;animation:spinner 1s infinite linear;border-radius:50%;border:4px solid var(--light-color2);border-top-color:var(--black-color);height:9em;margin:0 auto 3.5em auto;width:9em}.ctn-preloader .animation-preloader .txt-loading{font-weight:900;text-align:center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;color:var(--light-color2);font-size:3.5rem}.ctn-preloader .animation-preloader .txt-loading .letters-loading:before{animation:letters-loading 5s infinite;color:var(--black-color);content:attr(data-text-preloader);left:0;opacity:0;position:absolute;top:0;-webkit-transform:rotateY(-90deg);transform:rotateY(-90deg);-webkit-animation:letters-loading 5s infinite}.ctn-preloader .animation-preloader .txt-loading .letters-loading{color:rgba(0,0,0,.2);position:relative}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before{-webkit-animation-delay:.2s;animation-delay:.2s}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before{-webkit-animation-delay:.3s;animation-delay:.3s}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before{-webkit-animation-delay:.4s;animation-delay:.4s}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before{-webkit-animation-delay:.5s;animation-delay:.5s}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before{-webkit-animation-delay:.6s;animation-delay:.6s}.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before{-webkit-animation-delay:.7s;animation-delay:.7s}.ctn-preloader .loader-section{background:var(--white-color);height:100%;position:fixed;top:0;width:calc(50% + 1px)}.ctn-preloader .loader-section.section-left{left:0}.ctn-preloader .loader-section.section-right{right:0}.loaded .animation-preloader{opacity:0;transition:.5s ease-out;-webkit-transition:.5s ease-out;-moz-transition:.5s ease-out;-ms-transition:.5s ease-out;-o-transition:.5s ease-out}.loaded .loader-section.section-left{-webkit-transition:.7s .3s all cubic-bezier(.1,.1,.1,1);transition:.7s .3s all cubic-bezier(.1,.1,.1,1);-webkit-transform:translateX(-101%);transform:translateX(-101%)}.loaded .loader-section.section-right{-webkit-transition:.7s .3s all cubic-bezier(.1,.1,.1,1);transition:.7s .3s all cubic-bezier(.1,.1,.1,1);-webkit-transform:translateX(101%);transform:translateX(101%)}@-webkit-keyframes spinner{to{-webkit-transform:rotateZ(360deg);transform:rotateZ(360deg)}}@keyframes spinner{to{-webkit-transform:rotateZ(360deg);transform:rotateZ(360deg)}}@-webkit-keyframes letters-loading{0%,100%,75%{opacity:0;-webkit-transform:rotateY(-90deg);transform:rotateY(-90deg)}25%,50%{opacity:1;-webkit-transform:rotateY(0);transform:rotateY(0)}}@keyframes letters-loading{0%,100%,75%{opacity:0;-webkit-transform:rotateY(-90deg);transform:rotateY(-90deg)}25%,50%{opacity:1;-webkit-transform:rotateY(0);transform:rotateY(0)}}@media screen and (max-width:767px){.ctn-preloader .animation-preloader .spinner{height:8em;width:8em}.ctn-preloader .animation-preloader .txt-loading{font-size:2.5rem}}@media screen and (max-width:500px){.ctn-preloader .animation-preloader .spinner{height:7em;width:7em}}.privacy__policy--content{margin-bottom:2rem}.privacy__policy--content:last-child{margin-bottom:0}.privacy__policy--content__title{font-size:2rem;line-height:2.5rem;margin-bottom:.8rem}@media only screen and (min-width:768px){.privacy__policy--content__title{font-size:2.2rem;line-height:2.5rem}}@media only screen and (min-width:1600px){.privacy__policy--content__title{font-size:2.5rem;line-height:2.8rem;margin-bottom:1.2rem}}.privacy__policy--content__subtitle{font-size:1.8rem;line-height:2.5rem;margin-bottom:.8rem}@media only screen and (min-width:1600px){.privacy__policy--content__subtitle{font-size:2rem;line-height:2.5rem;margin-bottom:1rem}}.privacy__policy--content__desc{font-size:1.5rem;margin-bottom:1.5rem}@media only screen and (min-width:1200px){.privacy__policy--content__desc{font-size:1.6rem}}[data-animation] .newsletter__popup--inner{opacity:0;visibility:hidden;-webkit-transition:all .5s cubic-bezier(.51,.92,.24,1.15);transition:all .5s cubic-bezier(.51,.92,.24,1.15)}[data-animation].newsletter__show .newsletter__popup--inner{opacity:1;visibility:visible;-webkit-transition-delay:.2s;transition-delay:.2s}.newsletter__popup{position:fixed;top:0;left:0;right:0;bottom:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:1rem;cursor:pointer;visibility:hidden;opacity:0;-webkit-transition:all 1s ease-in-out;transition:all 1s ease-in-out;z-index:999}.newsletter__popup.newsletter__show{visibility:visible;opacity:1}.newsletter__popup.newsletter__show .newsletter__popup--inner{-webkit-transform:translateY(0);transform:translateY(0)}.newsletter__popup--inner{position:relative;width:88%;max-height:80vh;border-radius:10px;background:var(--white-color);-webkit-box-shadow:2px 0 20px rgba(0,0,0,.06);box-shadow:2px 0 20px rgba(0,0,0,.06);overflow:auto;cursor:default;-webkit-transform:translateY(-50px);transform:translateY(-50px)}@media only screen and (min-width:576px){.newsletter__popup--inner{width:80%}}@media only screen and (min-width:768px){.newsletter__popup--inner{width:655px}}@media only screen and (min-width:992px){.newsletter__popup--inner{width:720px}}@media only screen and (min-width:1200px){.newsletter__popup--inner{width:760px}}.newsletter__popup--close__btn{position:absolute;top:4px;right:4px;background:var(--secondary-color);color:var(--white-color);line-height:2.8rem;border:0;text-transform:uppercase;font-size:1.2rem;border-radius:50%;padding:0;width:3rem;height:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.newsletter__popup--close__btn:hover{background:var(--primary-color)}@media only screen and (min-width:992px){.newsletter__popup--close__btn{width:3.2rem;height:3.2rem}}.newsletter__popup--close__btn>*{pointer-events:none}.newsletter__popup--thumbnail{width:280px}@media only screen and (min-width:992px){.newsletter__popup--thumbnail{width:320px}}@media only screen and (min-width:1200px){.newsletter__popup--thumbnail{width:330px}}@media only screen and (max-width:767px){.newsletter__popup--thumbnail{display:none}}.newsletter__popup--box__right{width:100%;padding:4rem 2rem 2.2rem;text-align:center}@media only screen and (min-width:576px){.newsletter__popup--box__right{padding:4rem 2rem 3rem}}@media only screen and (min-width:768px){.newsletter__popup--box__right{width:calc(100% - 280px);padding:3rem 2rem}}@media only screen and (min-width:992px){.newsletter__popup--box__right{width:calc(100% - 320px);padding:4rem 2.5rem}}@media only screen and (min-width:1200px){.newsletter__popup--box__right{width:calc(100% - 330px);padding:4rem 3rem}}.newsletter__popup--title{margin-bottom:1.3rem}@media only screen and (min-width:992px){.newsletter__popup--title{margin-bottom:2rem}}.newsletter__popup--content--desc{color:var(--text-gray-color);display:inline-block;line-height:2.4rem;font-size:1.5rem;margin-bottom:1.6rem}@media only screen and (min-width:768px){.newsletter__popup--content--desc{line-height:2.6rem;font-size:1.6rem}}@media only screen and (min-width:992px){.newsletter__popup--content--desc{font-size:1.7rem;margin-bottom:2.2rem}}.newsletter__popup--subscribe__input{width:100%;height:4rem;border:1px solid var(--border-color);border-radius:5px;padding:0 15px}.newsletter__popup--subscribe__input:focus{border-color:var(--secondary-color)}@media only screen and (min-width:768px){.newsletter__popup--subscribe__input{height:4.5rem}}.newsletter__popup--subscribe__btn{width:100%;height:4rem;background:var(--secondary-color);color:var(--white-color);border:0;padding:0 2rem;font-size:1.5rem;text-transform:uppercase;font-weight:500;border-radius:5px;margin-top:1.5rem}.newsletter__popup--subscribe__btn:hover{background:var(--primary-color)}@media only screen and (min-width:768px){.newsletter__popup--subscribe__btn{height:4.5rem}}.newsletter__popup--footer{margin-top:1.2rem}.newsletter__popup--dontshow__again--text{color:var(--text-gray-color);cursor:pointer;font-size:1.4rem}@media only screen and (min-width:768px){.newsletter__popup--dontshow__again--text{font-size:1.6rem}}
ul {
    margin-top: 0;
    margin-bottom: 1rem;
}

ul ul {
    margin-bottom: 0;
}

dfn {
    font-style: italic;
}

strong {
    font-weight: bolder;
}

a {
    text-decoration: none;
    color: #5e72e4;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

a:hover {
    text-decoration: none;
    color: #233dd2;
}

a:not([href]):not([tabindex]) {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):focus {
    outline: 0;
}

code {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
    font-size: 1em;
}

img {
    vertical-align: middle;
    border-style: none;
}

caption {
    padding-top: 1rem;
    padding-bottom: 1rem;
    caption-side: bottom;
    text-align: left;
    color: #8898aa;
}

label {
    display: inline-block;
    margin-bottom: .5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
}

button,
input {
    overflow: visible;
}

button {
    text-transform: none;
}

button,
html [type='button'],
[type='reset'],
[type='submit'] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type='radio'],
input[type='checkbox'] {
    box-sizing: border-box;
    padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

legend {
    font-size: 1.5rem;
    line-height: inherit;
    display: block;
    width: 100%;
    max-width: 100%;
    margin-bottom: .5rem;
    padding: 0;
    white-space: normal;
    color: inherit;
}

progress {
    vertical-align: baseline;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
    height: auto;
}

[type='search'] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

[hidden] {
    display: none !important;
}

h1,
h3,
h4,
h5,
h6,
.h1,
.h3,
.h4,
.h5,
.h6 {
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: .5rem;
    color: #32325d;
}

h1,
.h1 {
    font-size: 1.625rem;
}

h3,
.h3 {
    font-size: 1.0625rem;
}

h4,
.h4 {
    font-size: .9375rem;
}

h5,
.h5 {
    font-size: .8125rem;
}

h6,
.h6 {
    font-size: .625rem;
}

.display-2 {
    font-size: 2.75rem;
    font-weight: 600;
    line-height: 1.5;
}

hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1);
}

code {
    font-size: 87.5%;
    word-break: break-word;
    color: #f3a4b5;
}

a>code {
    color: inherit;
}

.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.container-fluid {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

.row {
    display: flex;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: wrap;
}

.col-4,
.col-8,
.col,
.col-md-10,
.col-md-12,
.col-lg-3,
.col-lg-4,
.col-lg-6,
.col-lg-7,
.col-xl-4,
.col-xl-6,
.col-xl-8 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    max-width: 100%;
    flex-basis: 0;
    flex-grow: 1;
}

.col-4 {
    max-width: 33.33333%;
    flex: 0 0 33.33333%;
}

.col-8 {
    max-width: 66.66667%;
    flex: 0 0 66.66667%;
}

@media (min-width: 768px) {

    .col-md-10 {
        max-width: 83.33333%;
        flex: 0 0 83.33333%;
    }

    .col-md-12 {
        max-width: 100%;
        flex: 0 0 100%;
    }
}

@media (min-width: 992px) {

    .col-lg-3 {
        max-width: 25%;
        flex: 0 0 25%;
    }

    .col-lg-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }

    .col-lg-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }

    .col-lg-7 {
        max-width: 58.33333%;
        flex: 0 0 58.33333%;
    }

    .order-lg-2 {
        order: 2;
    }
}

@media (min-width: 1200px) {

    .col-xl-4 {
        max-width: 33.33333%;
        flex: 0 0 33.33333%;
    }

    .col-xl-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }

    .col-xl-8 {
        max-width: 66.66667%;
        flex: 0 0 66.66667%;
    }

    .order-xl-1 {
        order: 1;
    }

    .order-xl-2 {
        order: 2;
    }
}

.form-control {
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    width: 100%;
    height: calc(2.75rem + 2px);
    padding: .625rem .75rem;
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
    color: #8898aa;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: none;
}

@media screen and (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

.form-control::-ms-expand {
    border: 0;
    background-color: transparent;
}

.form-control:focus {
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25);
    outline: 0;
    background-color: #fff;
    box-shadow: none, none;
}

.form-control:-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
}

.form-control::-ms-input-placeholder {
    opacity: 1;
    color: #adb5bd;
}

.form-control::placeholder {
    opacity: 1;
    color: #adb5bd;
}

.form-control:disabled,
.form-control[readonly] {
    opacity: 1;
    background-color: #e9ecef;
}

textarea.form-control {
    height: auto;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

@media (min-width: 576px) {
    .form-inline label {
        display: flex;
        margin-bottom: 0;
        align-items: center;
        justify-content: center;
    }

    .form-inline .form-group {
        display: flex;
        margin-bottom: 0;
        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle;
    }

    .form-inline .input-group {
        width: auto;
    }
}

.btn {
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    display: inline-block;
    padding: .625rem 1.25rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    border: 1px solid transparent;
    border-radius: .375rem;
}

@media screen and (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover,
.btn:focus {
    text-decoration: none;
}

.btn:focus {
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:disabled {
    opacity: .65;
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active {
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled):active:focus {
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
}

.btn-primary {
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-primary:hover {
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}

.btn-primary:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-primary:disabled {
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}

.btn-primary:not(:disabled):not(.disabled):active {
    color: #fff;
    border-color: #5e72e4;
    background-color: #324cdd;
}

.btn-primary:not(:disabled):not(.disabled):active:focus {
    box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-info {
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-info:hover {
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
}

.btn-info:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-info:disabled {
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
}

.btn-info:not(:disabled):not(.disabled):active {
    color: #fff;
    border-color: #11cdef;
    background-color: #0da5c0;
}

.btn-info:not(:disabled):not(.disabled):active:focus {
    box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-default {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-default:hover {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}

.btn-default:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-default:disabled {
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}

.btn-default:not(:disabled):not(.disabled):active {
    color: #fff;
    border-color: #172b4d;
    background-color: #0b1526;
}

.btn-default:not(:disabled):not(.disabled):active:focus {
    box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-sm {
    font-size: .875rem;
    line-height: 1.5;
    padding: .25rem .5rem;
    border-radius: .375rem;
}

.dropdown {
    position: relative;
}



.dropdown-divider {
    overflow: hidden;
    height: 0;
    margin: .5rem 0;
    border-top: 1px solid #e9ecef;
}



.dropdown-header {
    font-size: .875rem;
    display: block;
    margin-bottom: 0;
    padding: .5rem 1.5rem;
    white-space: nowrap;
    color: #8898aa;
}

.input-group {
    position: relative;
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    align-items: stretch;
}

.input-group>.form-control {
    position: relative;
    width: 1%;
    margin-bottom: 0;
    flex: 1 1 auto;
}

.input-group>.form-control+.form-control {
    margin-left: -1px;
}

.input-group>.form-control:focus {
    z-index: 3;
}

.input-group>.form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend {
    display: flex;
}

.input-group-prepend .btn {
    position: relative;
    z-index: 2;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text,
.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-text {
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    display: flex;
    margin-bottom: 0;
    padding: .625rem .75rem;
    text-align: center;
    white-space: nowrap;
    color: #adb5bd;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background-color: #fff;
    align-items: center;
}

.input-group-text input[type='radio'],
.input-group-text input[type='checkbox'] {
    margin-top: 0;
}

.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}


.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
}

.card>hr {
    margin-right: 0;
    margin-left: 0;
}

.card-body {
    padding: 1.5rem;
    flex: 1 1 auto;
}

.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-header:first-child {
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    font-size: .75rem;
    display: flex;
    overflow: hidden;
    height: 1rem;
    border-radius: .375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1 1;
}

.bg-secondary {
    background-color: #f7fafc !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
    background-color: #d2e3ee !important;
}

.bg-default {
    background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
    background-color: #0b1526 !important;
}

.bg-white {
    background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,
button.bg-white:hover,
button.bg-white:focus {
    background-color: #e6e6e6 !important;
}

.bg-white {
    background-color: #fff !important;
}

.border-0 {
    border: 0 !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.d-none {
    display: none !important;
}

.d-flex {
    display: flex !important;
}

@media (min-width: 768px) {

    .d-md-flex {
        display: flex !important;
    }
}

@media (min-width: 992px) {

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }
}

.justify-content-center {
    justify-content: center !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.align-items-center {
    align-items: center !important;
}

@media (min-width: 1200px) {

    .justify-content-xl-between {
        justify-content: space-between !important;
    }
}

.float-right {
    float: right !important;
}

.shadow,
.card-profile-image img {
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.m-0 {
    margin: 0 !important;
}

.mt-0 {
    margin-top: 0 !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mr-2 {
    margin-right: .5rem !important;
}

.ml-2 {
    margin-left: .5rem !important;
}

.mr-3 {
    margin-right: 1rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important;
}

.mr-4 {
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mt--7 {
    margin-top: -6rem !important;
}

.pt-0 {
    padding-top: 0 !important;
}

.pr-0 {
    padding-right: 0 !important;
}

.pb-0 {
    padding-bottom: 0 !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.pt-8 {
    padding-top: 8rem !important;
}

.pb-8 {
    padding-bottom: 8rem !important;
}

.m-auto {
    margin: auto !important;
}

@media (min-width: 768px) {

    .mt-md-5 {
        margin-top: 3rem !important;
    }

    .pt-md-4 {
        padding-top: 1.5rem !important;
    }

    .pb-md-4 {
        padding-bottom: 1.5rem !important;
    }
}

@media (min-width: 992px) {

    .pl-lg-4 {
        padding-left: 1.5rem !important;
    }

    .pt-lg-8 {
        padding-top: 8rem !important;
    }

    .ml-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px) {

    .mb-xl-0 {
        margin-bottom: 0 !important;
    }
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-bold {
    font-weight: 600 !important;
}

.text-white {
    color: #fff !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

.text-muted {
    color: #8898aa !important;
}

@media print {

    *,
    *::before,
    *::after {
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    img {
        page-break-inside: avoid;
    }

    p,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h3 {
        page-break-after: avoid;
    }

    @page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }
}

figcaption,
main {
    display: block;
}

main {
    overflow: hidden;
}

.bg-white {
    background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,
button.bg-white:hover,
button.bg-white:focus {
    background-color: #e6e6e6 !important;
}

.bg-gradient-default {
    background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-default {
    background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

@keyframes floating-lg {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(15px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(10px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating-sm {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(5px);
    }

    100% {
        transform: translateY(0px);
    }
}

.opacity-8 {
    opacity: .8 !important;
}

.opacity-8 {
    opacity: .9 !important;
}

.center {
    left: 50%;
    transform: translateX(-50%);
}

[class*='shadow'] {
    transition: all .15s ease;
}

.font-weight-300 {
    font-weight: 300 !important;
}

.text-sm {
    font-size: .875rem !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

.avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: 50%;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}

.avatar img {
    width: 100%;
    border-radius: 50%;
}

.avatar-sm {
    font-size: .875rem;
    width: 36px;
    height: 36px;
}

.btn {
    font-size: .875rem;
    position: relative;
    transition: all .15s ease;
    letter-spacing: .025em;
    text-transform: none;
    will-change: transform;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:not(:last-child) {
    margin-right: .5rem;
}

.btn i:not(:first-child) {
    margin-left: .5rem;
}

.btn i:not(:last-child) {
    margin-right: .5rem;
}

.input-group .btn {
    margin-right: 0;
    transform: translateY(0);
}

.btn-sm {
    font-size: .75rem;
}

[class*='btn-outline-'] {
    border-width: 1px;
}

.card-profile-image {
    position: relative;
}

.card-profile-image img {
    position: absolute;
    left: 50%;
    max-width: 180px;
    transition: all .15s ease;
    transform: translate(-50%, -30%);
    border-radius: .375rem;
}

.card-profile-image img:hover {
    transform: translate(-50%, -33%);
}

.card-profile-stats {
    padding: 1rem 0;
}

.card-profile-stats>div {
    margin-right: 1rem;
    padding: .875rem;
    text-align: center;
}

.card-profile-stats>div:last-child {
    margin-right: 0;
}

.card-profile-stats>div .heading {
    font-size: 1.1rem;
    font-weight: bold;
    display: block;
}

.card-profile-stats>div .description {
    font-size: .875rem;
    color: #adb5bd;
}

.main-content {
    position: relative;
}

.main-content .navbar-top {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    padding-right: 0 !important;
    padding-left: 0 !important;
    background-color: transparent;
}

@media (min-width: 768px) {
    .main-content .container-fluid {
        padding-right: 39px !important;
        padding-left: 39px !important;
    }
}

.dropdown {
    display: inline-block;
}



.dropdown-header {
    font-size: .625rem;
    font-weight: 700;
    padding-right: 1rem;
    padding-left: 1rem;
    text-transform: uppercase;
    color: #f6f9fc;
}



.footer {
    padding: 2.5rem 0;
    background: #f7fafc;
}

.footer .nav .nav-item .nav-link {
    color: #8898aa !important;
}

.footer .nav .nav-item .nav-link:hover {
    color: #525f7f !important;
}

.footer .copyright {
    font-size: .875rem;
}

.form-control-label {
    font-size: .875rem;
    font-weight: 600;
    color: #525f7f;
}

.form-control {
    font-size: .875rem;
}

.form-control:focus:-ms-input-placeholder {
    color: #adb5bd;
}

.form-control:focus::-ms-input-placeholder {
    color: #adb5bd;
}

.form-control:focus::placeholder {
    color: #adb5bd;
}

textarea[resize='none'] {
    resize: none !important;
}

textarea[resize='both'] {
    resize: both !important;
}

textarea[resize='vertical'] {
    resize: vertical !important;
}

textarea[resize='horizontal'] {
    resize: horizontal !important;
}

.form-control-alternative {
    transition: box-shadow .15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.form-control-alternative:focus {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.input-group {
    transition: all .15s ease;
    border-radius: .375rem;
    box-shadow: none;
}

.input-group .form-control {
    box-shadow: none;
}

.input-group .form-control:not(:first-child) {
    padding-left: 0;
    border-left: 0;
}

.input-group .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
}

.input-group .form-control:focus {
    box-shadow: none;
}

.input-group-text {
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative {
    transition: box-shadow .15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.input-group-alternative .form-control,
.input-group-alternative .input-group-text {
    border: 0;
    box-shadow: none;
}

.focused .input-group-alternative {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group {
    box-shadow: none;
}

.focused .input-group-text {
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25);
    background-color: #fff;
}

.focused .form-control {
    border-color: rgba(50, 151, 211, .25);
}

.header {
    position: relative;
}

.input-group {
    transition: all .15s ease;
    border-radius: .375rem;
    box-shadow: none;
}

.input-group .form-control {
    box-shadow: none;
}

.input-group .form-control:not(:first-child) {
    padding-left: 0;
    border-left: 0;
}

.input-group .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
}

.input-group .form-control:focus {
    box-shadow: none;
}

.input-group-text {
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative {
    transition: box-shadow .15s ease;
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.input-group-alternative .form-control,
.input-group-alternative .input-group-text {
    border: 0;
    box-shadow: none;
}

.focused .input-group-alternative {
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group {
    box-shadow: none;
}

.focused .input-group-text {
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25);
    background-color: #fff;
}

.focused .form-control {
    border-color: rgba(50, 151, 211, .25);
}

.mask {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all .15s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
    .mask {
        transition: none;
    }
}

.nav-link {
    color: #525f7f;
}

.nav-link i.ni {
    position: relative;
    top: 2px;
}

.navbar-search .input-group {
    border: 2px solid;
    border-radius: 2rem;
    background-color: transparent;
}

.navbar-search .input-group .input-group-text {
    padding-left: 1rem;
    background-color: transparent;
}

.navbar-search .form-control {
    width: 270px;
    background-color: transparent;
}

.navbar-search-dark .input-group {
    border-color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .input-group-text {
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control {
    color: rgba(255, 255, 255, .9);
}

.navbar-search-dark .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control::-ms-input-placeholder {
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control::placeholder {
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .focused .input-group {
    border-color: rgba(255, 255, 255, .9);
}






@keyframes hide-navbar-collapse {
    from {
        transform: scale(1);
        transform-origin: 100% 0;
        opacity: 1;
    }

    to {
        transform: scale(.95);
        opacity: 0;
    }
}

.progress {
    overflow: hidden;
    height: 8px;
    margin-bottom: 1rem;
    border-radius: .25rem;
    background-color: #e9ecef;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

p {
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
}

.description {
    font-size: .875rem;
}

.heading {
    font-size: .95rem;
    font-weight: 600;
    letter-spacing: .025em;
    text-transform: uppercase;
}

.heading-small {
    font-size: .75rem;
    padding-top: .25rem;
    padding-bottom: .25rem;
    letter-spacing: .04em;
    text-transform: uppercase;
}

.display-2 span {
    font-weight: 300;
    display: block;
}

@media (max-width: 768px) {
    .btn {
        margin-bottom: 10px;
    }
}



    </style>
@endsection

@section('content')
    <div class="main-content">
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            style="min-height: 600px; background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hello {{ old('name', $user->name) }}</h1>
                        <h3 class="text-white mt-0 mb-5">Đây là trang quản lí tài khoản của bạn !</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <img src="{{ asset('storage/' . $user->hinh_anh) }}" style="width: 65px" id="defaultAvatar" class="rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    {{ $user->name }}<span class="font-weight-light">,
                                        {{ $user->ngay_sinh }}</span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ $user->dia_chi }} - {{ $user->gioi_tinh }}
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{ $user->role }}
                                </div>
                                <div>
                                    {{ $user->so_dien_thoai }}
                                </div>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Tài khoản của tôi</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Thông tin người dùng</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Họ và tên</label>
                                                <input type="text" id="input-username" name="name"
                                                    class="form-control form-control-alternative @error('name')
                                                        is-invalid
                                                    @enderror" placeholder="Họ và tên"
                                                    value="{{ $user->name }}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Địa chỉ email</label>
                                                <input type="email" id="input-email" name="email"
                                                    class="form-control form-control-alternative @error('email')
                                                        is-invalid
                                                    @enderror" placeholder="Email"
                                                    value="{{ $user->email }}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-ngay-sinh">Ngày sinh</label>
                                                <input type="date" id="input-ngay-sinh" name="ngay_sinh"
                                                    class="form-control form-control-alternative @error('ngay_sinh')
                                                        is-invalid
                                                    @enderror" placeholder="Ngày sinh"
                                                    value="{{ $user->ngay_sinh }}">
                                                    @error('ngay_sinh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-gioi-tinh">Giới tính</label>
                                                <select id="input-gioi-tinh" name="gioi_tinh" class="form-control form-control-alternative @error('gioi_tinh')
                                                    is-invalid
                                                @enderror">
                                                    <option value="Nam" {{ $user->gioi_tinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                                                    <option value="Nữ" {{ $user->gioi_tinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                                </select>
                                                @error('gioi_tinh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-trang-thai">Trạng thái</label>
                                                <input type="text" id="input-trang-thai" name="trang_thai"
                                                    class="form-control form-control-alternative" placeholder="Trạng thái"
                                                    value="{{ $user->trang_thai == '1' ? 'Đang hoạt động' : 'Dừng hoạt động' }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-hinh-anh">Hình ảnh</label>
                                                <input type="file" id="input-hinh-anh" name="hinh_anh"
                                                    class="form-control form-control-alternative @error('hinh_anh')
                                                        is-invalid
                                                    @enderror">
                                                    @error('hinh_anh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Thông tin liên lạc</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Địa chỉ</label>
                                                <input id="input-address" name="dia_chi" class="form-control form-control-alternative @error('dia_chi')
                                                    is-invalid
                                                @enderror"
                                                    placeholder="Địa chỉ" value="{{ $user->dia_chi }}" type="text">
                                                    @error('dia_chi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-so-dien-thoai">Số điện thoại</label>
                                                <input type="text" id="input-so-dien-thoai" name="so_dien_thoai"
                                                    class="form-control form-control-alternative @error('so_dien_thoai')
                                                        is-invalid
                                                    @enderror"
                                                    placeholder="Số điện thoại" value="{{ $user->so_dien_thoai }}">
                                                    @error('so_dien_thoai')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('hinh_anh');
            const profileImage = document.getElementById('profileImage');
            const defaultAvatar = document.getElementById('defaultAvatar');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                        profileImage.classList.remove('d-none');
                        defaultAvatar.classList.add('d-none');
                    }
                    reader.readAsDataURL(file);
                } else {
                    profileImage.src = '';
                    profileImage.classList.add('d-none');
                    defaultAvatar.classList.remove('d-none');
                }
            });
        });
    </script>
@endsection