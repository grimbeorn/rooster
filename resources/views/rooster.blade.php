@extends('layouts.app')

@section('content')

<!-- Section 2 -->
<section class="section background-green background-transparent text-center" data-image-src="img/parallax-05.jpg">
<div class="line">
  <div class="s-12 m-10 l-8 center">
    <h2 class="headline text-thin text-s-size-30">Responsive Parallax Background</h2>
    <p class="text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
  </div>
</div>  
</section>

<!-- Section 3 -->
<section class="section background-white">
<div class="full-width text-center">
  <img class="center margin-bottom-30" style="margin-top: -210px; position:relative;" src="img/bio.png" alt="">
  <div class="line">
    <h2 class="headline text-thin text-s-size-30">Fully <span class="text-green">Responsive</span> HTML5 Template</h2>
    <p class="text-size-20 text-s-size-16 text-thin">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
    <i class="icon-more_node_links icon2x text-green margin-top-bottom-10"></i>
    <p class="text-size-20 text-s-size-16 text-thin text-green">Try resize your browser window</p>
  </div>  
</div>  
</section>
<hr class="break margin-top-bottom-0">

<!-- Section 4 -->
<section class="section background-white"> 
<div class="line">
  <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-30">Animated <span class="text-green">Skill Bars</span></h2>
  <div class="margin">
    <div class="s-12 m-12 l-6 text-right">        
      <p class="text-size-16 margin-bottom-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      <p class="margin-m-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
    </div>                                                                                                                                                                                          
    <div class="s-12 m-12 l-6">        
      <div class="skillbar" data-percent="71%">
      	<div class="skillbar-title text-white"><i class="icon-paperplane_ico"> </i> <span class="text-size-16">jQuery <b>71%</b></span></div>
      	<div class="skillbar-bar background-green"></div>
      </div>
      <div class="skillbar" data-percent="93%">
      	<div class="skillbar-title text-white"><i class="icon-heart"> </i> <span class="text-size-16">WordPress <b>93%</b></span></div>
      	<div class="skillbar-bar background-green"></div>
      </div>
      <div class="skillbar" data-percent="82%">
      	<div class="skillbar-title text-white"><i class="icon-cloud"> </i> <span class="text-size-16">Web design <b>82%</b></span></div>
      	<div class="skillbar-bar background-green"></div>
      </div>
      <div class="skillbar" data-percent="73%">
      	<div class="skillbar-title text-white"><i class="icon-globe_black"> </i> <span class="text-size-16">Graphic Design <b>73%</b></span></div>
      	<div class="skillbar-bar background-green"></div>
      </div>
    </div>
  </div>     
</div>
</section>
  
@endsection
