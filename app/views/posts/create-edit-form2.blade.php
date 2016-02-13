<div class="well colors col-sm-offset-2 col-sm-8 col-md-8">

	<div  class="form-group @if($errors->has('title')) has-error @endif">

		<label for="editModalTitle">Title</label>
		<input type="text" id="editModalTitle"  class="form-control" ng-model="post.title">

	</div>

	<div class="form-group @if($errors->has('body')) has-error @endif">

		<label for="editModalBody">Body</label>
		<input type="text" id="editModalBody"  class="form-control" ng-model="post.body">
		
	</div>

	<div>
		<button ng-click="update(post.id, index)" class="btn btn-primary pull-left"> Ramble On </button>
	</div>