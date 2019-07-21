			<!--sort 開始-->
					<?php
					 //セッションの有効期限を60分に設定
					 session_set_cookie_params(60 * 60);
					 session_start();
					 $sort = $_POST["sort"];
					 //$sortの初期値がNULLなので、その時はセッションにはDESCを引き渡す
					 if($sort==="DESC" || $_SESSION['sort']===NULL){
					   $_SESSION['sort'] = "DESC";
					 }else if($sort==="ASC"){
					   $_SESSION['sort'] = "ASC";
					 }					
					?>
					<form action ="" method ="post"> 
					   <div>
							<h5><p class="category"></p></h5>
							<!--onchange="submit(this.form)"は、セレクトボタンを選択したらサブミット-->
							<select name="sort" onchange="submit(this.form)">
							<option  value="DESC" <?= ($_POST["sort"]==="DESC" || $_SESSION["sort"] === "DESC")? 'selected = "selected"': '' ;?>>
							降順
							</option>
							<option  value="ASC"  <?= ($_POST["sort"]==="ASC"  || $_SESSION["sort"] === "ASC" )? 'selected = "selected"': '' ;?>>
							昇順
							</option>
							</select>	
					   </div>
					</form>
					<?php // var_dump($_POST["sort"]); var_dump($_SESSION["sort"]);
					$sort = $_SESSION["sort"];
					?>
			<!--sort 終了-->