<template>
    <div class="uper-content">
        <nav-bar></nav-bar>
        <div class="col-9 start-conent">
            <div class="text-dis">
                <h2>
                    <vue-typer text='Welcom In' 
                    :repeat='0' 
                    :type-delay='200' 
                    :pre-type-delay='800' 
                    caret-animation='expand' >
                    </vue-typer>
                </h2>
                <p>
                    <span class="logo"><span class="b">B</span><span class="y">Y</span></span>
                    <vue-typer text='Brand Yourself' 
                    :repeat='0' 
                    :type-delay='200'
                    :pre-type-delay='2900' 
                    caret-animation='expand' >
                    </vue-typer>
                </p>
                <p style="padding-left: 120px;">
                    <vue-typer text='to build your professional CV.' 
                    :repeat='0' 
                    :type-delay='200'
                    :pre-type-delay='6900' 
                    caret-animation='expand' >
                    </vue-typer>
                </p>
                <p class="discr">
                    <vue-typer text='Use professional field-tested resume templates that follow the exact ‘resume rules’ employers look for. Easy to use & done within minutes - try now for free!.' 
                    :repeat='0' 
                    :type-delay='100'
                    :pre-type-delay='12900' 
                    caret-animation='expand' >
                    </vue-typer>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(1)  {
  color: gold;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(2)  {
  color: yellow;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(3)  {
  color: red;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(4)  {
  color: #FF5722;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(5)  {
  color: #ffc136;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(6)  {
  color: #8BC34A;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(8)  {
  color: #009688;
  font-size:40px
}
.text-dis h2 .vue-typer .custom.char.typed:nth-of-type(9)  {
  color: #2196F3;
  font-size:40px
}
</style>