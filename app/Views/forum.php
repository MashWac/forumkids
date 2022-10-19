<button id="create_forum" class="btn btn-info">Create forum</button>
<div class="container-fluid gy-5">
<div class="container-sm" style="width: 50rem;">
<div class="container-fluid" style="width:100%;" ;>    
	</div>
		<div class="card-body">
			<table class="table">
				<tr>
					<thead>
						<th></th>
						<th scope="col">time</th>
						<th scope="col">title</th>
						<th scope="col">main</th>	
						<th></th>					
					</thead>
				</tr>
				<?php foreach($forum as $item):?>
				<tr>
					<tbody>
						<th scope="row">
						<td>
							<?php echo $item['created_at'];?>
						</td>
						<td>
							<?php echo $item['title'];?>
						</td>
						<td>
							<?php echo $item['main_comment'];?>
						</td>
						<td>
							<a href="forum/forumdetails/<?=$item['forum_id']?>">View Forum</a>	
						</td>
					</th>
					</tbody>
									
				</tr>
					<?php endforeach;?>	
	
			</table>			
		</div>
</div>
				</div>
				<div class="sm-modal">
	            <div class="modal-contents">
		            <div class="done">+</div>
                <div class="forum-wrap">
                <h2>Create a forum</h2>
	<form method="post" action="/forum/addforum">
      <div class="mb-3">
 				<label for="exampleFormControlInput1" class="form-label">Create Forum</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="What is on your mind?" name="title">
			</div>
			<div>
        <label>Genre</label>
          <select name="genre">
            <option value="Games">
              Games
            </option>
            <option value="climate">
              climate
            </option>
            <option value="Science">
              Science
            </option>
            <option value="Technology">
              Technology
            </option>
            <option value="Space">
              Space
            </option>
          </select>
        </div>
		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Forum</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="main_comment"></textarea>
		</div>
		<div>
			<button type="submit" class="btn btn-primary">MAKE FORUM</button>
		</div>
    </form>
			<script src="assets/js/forum.js"></script>
</div>
</div>
</div>
</div>
<script type="text/javascript">

	function getData($results) {
		alert('pressed')
	}
	
</script>
