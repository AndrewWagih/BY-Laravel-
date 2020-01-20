<template>
    <div class="row" style="padding:0;margin:0">
            <div class="col-4">
                <span class="logo-nav"><span class="b">B</span><span class="y">Y</span></span>
            </div>
            <ul class="col-8">
                <li><router-link to="/home">Home</router-link></li>
                <li><router-link to="/templates">Templates</router-link> </li>
                <li><a href="/login">Log In</a> </li>
                <li><router-link to="/signup">Sign Up</router-link></li>
            </ul>
    </div>
</template>

<script>
export default {

}
</script>

<style>
.logo-nav{
      /* font-family: BY;
    color: #252525;
    letter-spacing: 0;
    font-size: 71px;
    border: 13px solid white;
    border-bottom-left-radius: 110px;
    border-top-left-radius: 110px;
    position: relative;
    top: -20px;
    left: -9px;
    padding: 0px 90px 15px 0;
    background-color: white;
        cursor: pointer; */
    font-family: BY;
    color: #252525;
    letter-spacing: 0;
    font-size: 55px;
    position: relative;
    top: -30px;
    left: 8px;
    cursor: pointer;
    width: 105px;
}
.logo-nav::after{
  /* content: 'Brand Yourself';
    position: absolute;
    font-family: mainFont;
    font-size: 12px;
    line-height: 12px;
    bottom: -9px;
    left: 18px; */
    content: 'Brand Yourself';
    position: absolute;
    font-family: mainFont;
    font-size: 12px;
    line-height: 17px;
    left: 3px;
    top: 66px;
    color: white;
}
.logo-nav .b{
      /* color: #27293c;
    position: absolute;
    left: 15px;
    font-weight: bolder; */
    color: #f3f3f7;
    position: absolute;
    font-weight: bolder;
    left: 6px;
    top: 0;
}
.logo-nav .y{
  /* color: #48b382;
    position: absolute;
    right: 9px;
    font-weight: bolder;
    bottom: -28px;
    -webkit-transform: rotate(14deg);
    transform: rotate(14deg); */
    
    color: #ffffff;
    position: absolute;
    top: 18px;
    left: 35px;
    font-weight: bolder;
    -webkit-transform: rotate(14deg);
    transform: rotate(14deg);
}
</style>