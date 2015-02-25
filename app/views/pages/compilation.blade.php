@extends('layouts.default')

@section('content')

<div class="postcontent">
    <h2 class="ui header">
      <i class="fa fa-book"></i>
      <div class="content">Research Compilation<div class="sub header">All research compilations</div></div>
    </h2>


     <div class="content" style="text-align: center;">
					    <div class="col-md-12">

					      <div class="panel">
					        <div class="panel-body" id="research_compilation_body">


					          <!--/stories-->
					<!-- 		  <div class="row">
					            <br>
					            <div class="col-md-2 col-sm-3 text-center">
					              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
					            </div>
					            <div class="col-md-10 col-sm-9">
					              <h3>Post Entry Title</h3>
					              <div class="row">
					                <div class="col-xs-9">
					                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
					                  Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
					                  dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
					                  Aliquam in felis sit amet augue.</p>
					                  <p class="lead"><button class="btn btn-default">Read More</button></p>
					                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
					                  <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
					                  </div>
					                <div class="col-xs-3"></div>
					              </div>
					              <br><br>
					            </div>
					          </div>
					          <hr>

							  <div class="row">
					            <br>
					            <div class="col-md-2 col-sm-3 text-center">
					              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
					            </div>
					            <div class="col-md-10 col-sm-9">
					              <h3>Story Title Here</h3>
					              <div class="row">
					                <div class="col-xs-9">
					                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
					                  Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
					                  dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
					                  Aliquam in felis sit amet augue.</p>
					                  <p class="lead"><button class="btn btn-default">Read More</button></p>
					                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
					                  <ul class="list-inline"><li><a href="#">3 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 1 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
					                  </div>
					                <div class="col-xs-3"></div>
					              </div>
					              <br><br>
					            </div>
					          </div>
					          <hr>

					          <div class="row">
					            <br>
					            <div class="col-md-2 col-sm-3 text-center">
					              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
					            </div>
					            <div class="col-md-10 col-sm-9">
					              <h3>Post Heading Here</h3>
					              <div class="row">
					                <div class="col-xs-9">
					                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
					                  Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
					                  dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
					                  Aliquam in felis sit amet augue.</p>
					                  <p class="lead"><button class="btn btn-default">Read More</button></p>
					                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
					                  <ul class="list-inline"><li><a href="#">5 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 0 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 45 Shares</a></li></ul>
					                  </div>
					                <div class="col-xs-3"></div>
					              </div>
					              <br><br>
					            </div>
					          </div>
					          <hr>

					          <div class="row">
					            <br>
					            <div class="col-md-2 col-sm-3 text-center">
					              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
					            </div>
					            <div class="col-md-10 col-sm-9">
					              <h3>Another Entry Title</h3>
					              <div class="row">
					                <div class="col-xs-9">
					                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
					                  Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
					                  dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
					                  Aliquam in felis sit amet augue.</p>
					                  <p class="lead"><button class="btn btn-default">Read More</button></p>
					                  <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
					                  <ul class="list-inline"><li><a href="#">1 Week Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
					                  </div>
					                <div class="col-xs-3"></div>
					              </div>
					              <br><br>
					            </div>
					          </div>
					          <hr> -->
					          <!--/stories-->

					          <a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>


					        </div><!--end of panel body-->
					      </div>

					   	</div><!--/col-12-->

     </div>


</div>


@stop