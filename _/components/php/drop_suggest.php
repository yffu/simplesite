<div class='row' id='dropsuggest'>
	<div class="col-lg-6">
		<div class="input-group">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Suggestions
					<span class="caret">
					
					</span>
				</button>
				<ul class="dropdown-menu" role="menu" id="ziphint">
				</ul>
			</div> <!-- input group btn -->
			<input type="text" class="form-control" placeholder="zip code" onkeyup="invoke(showHint(this.value), 300)">
		</div> <!-- input group -->
	</div> <!-- column 6 -->
</div> <!-- row -->