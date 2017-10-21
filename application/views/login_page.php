<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Logowanie</h4>
			</div>
			<div class="content">
			
				<?php if (isset($error)) : ?>
					<div class="alert alert-danger">
						<button type="button" aria-hidden="true" class="close" id="close-button">×</button>
						<span><b> Błąd! </b> nieudane logowanie</span>
					</div>
				<?php else : ?>
				<?php endif; ?>
				
					<div class="alert alert-danger" id="fill-all-field" style="display: none">
						<button type="button" aria-hidden="true" class="close" id="close-button">×</button>
						<span>Wypełnij wszystkie pola!</span>
					</div>
				
				<?php 
					$attributes = array('id' => 'login-form');
					echo form_open('access/login',$attributes); 
				?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Login lub e-mail</label>
								<input type="email" class="form-control" placeholder="Login lub e-mail" value="" name="email" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Hasło</label>
								<input type="password" class="form-control" placeholder="Hasło" value="" name="password" id="password" required>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info btn-fill pull-right" id="login-submit">Loguj</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>