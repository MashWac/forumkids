<style type="text/css">
	.new
	{
		position: absolute;
		top: 30%;
		background-color: white;
		position: absolute;
		width: 70%;
		padding: 5%;
	}
	.blog
	{
		position: absolute;
		top: 90%;
		
		width: 80%;
		background-color: white;
		flex-grow: 1;
	}
</style>

<div class="new">
	<form method="post" action="/forum/addforum">
       <div class="mb-3">
 			<label for="exampleFormControlInput1" class="form-label">Title</label>
			<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="How are you feeling?" name="title">
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
</div>
<div class="blog">
		<div class="card-body">
			<table class="table">
				<tr>
					<thead>
						<th></th>
						<th scope="col">initiator</th>
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
							<?php echo $item['initiator'];?>
						</td>
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
<script type="text/javascript">

	function getData($results) {
		alert('pressed')
	}
	
	
</script>
