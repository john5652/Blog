				<!-- Button trigger modal -->
<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">
 <i class="fa fa-trash-o"> Delete Posts</i>
</button>

	<div class='delete'>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Delete Post</h4> 
		      </div>
		      <div class="modal-body">
		        Are you sure you wish to delete this post? 
		      </div>
		      <div class="modal-footer">
		        {{ Form::open(array('method' => 'DELETE', 'action' => array('PostsController@destroy', $post->id))) }} <button class="deletee"><i class="fa fa-trash-o"> Delete Posts</i></button>  
				{{Form::close()}}
		      </div>
		    </div>
		  </div>
		</div>
	<div>
</div>