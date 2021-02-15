<style>
.slider {
  max-width: 1000px;
  margin: 0 auto;
}
.slick-slide {
  margin: 0 5px;
}
.slick-list {
  margin: 0px -5px 0px -5px;
}
button.slick-next, button.slick-next:hover {
  position: absolute;
  top: 41%;
  right: 54px;
  width: 47px;
  height: 75px;
  background-image: url("http://maggiesadler.com/wp-content/uploads/2015/10/left-right-arrow.png");
  background-size: 95px;
}
button.slick-prev, button.slick-prev:hover {
  position: absolute;
  top: 41%;
  left: 15px;
  z-index: 1;
  width: 47px;
  height: 75px;
  background-image: url("http://maggiesadler.com/wp-content/uploads/2015/10/left-right-arrow.png");
  background-size: 95px;
      background-position-x: right;
}
.slick-prev:before, .slick-next:before {
  font-size: 70px;
  color: #EA8496;
  line-height: inherit;
  font-weight: bold;
}
.slider img {
  height: 324px;
}

/* Slick Slider Styles -- Provided by https://kenwheeler.github.io/slick/ */
/* Slider */
.slick-slider
{
    position: relative;

    display: block;

    -moz-box-sizing: border-box;
         box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
@charset 'UTF-8';
/* Slider */
.slick-loading .slick-list
{
    background: #fff url('http://maggiesadler.com/wp-content/uploads/2015/10/ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.eot');
    src: url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.eot?#iefix') format('embedded-opentype'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.woff') format('woff'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.ttf') format('truetype'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    margin-top: -10px;
    padding: 0;

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '';
}
[dir='rtl'] .slick-prev:before
{
    content: '';
    font-weight: bold;
    font-size: 20px;
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '';
}
[dir='rtl'] .slick-next:before
{
    content: '';
}

/* Dots */
.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -45px;

    display: block;

    width: 100%;
    padding: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 10px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: #650865;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: #650865;
}


</style>

<div class="fondo2 p-start-end"  id="equipo">
    <div class="ui container mt-5">
        <div class="ui center aligned segment off-border-shadows">
            <h2 class="text-services"><strong>Miembros de nuestra empresa</strong></h2>
            <h2 class="text-gray-dark"><strong>Conoce a nuestro equipo</strong></h2>
        </div>        
    </div>
</div>

<div style="background: url('{{asset('assets/img/sistema/fondo-miembros.webp')}}'); width: 100%; background-repeat: no-repeat;background-size: cover;">
    <div class="slider" style="top: 20px;">
        @foreach ($members as $member)
            <div class="">
                <!--FLIP CARD-->
                <div class="column">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="ui card employer off-border-shadows bg-transparent">
                                    <div class="image">
                                        <img src="{{asset('assets/img/sistema/02.png')}}">
                                    </div>
                                    <div class="content">
                                        <h4 class="center aligned text-white header">{{$member->name}}</h4>
                                        <div class="center aligned text-white description">
                                            Web development
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <div class="ui card employer off-border-shadows bg-transparent">
                                    <div class="image">
                                        <img src="{{asset('assets/img/sistema/02.png')}}">
                                    </div>
                                    <div class="content">
                                        <p class="ui text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna libero, consequat non turpis non, porta ornare eros.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END FLIP CARD-->
            </div>
        @endforeach
    </div>
</div>