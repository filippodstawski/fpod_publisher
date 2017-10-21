<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="header">
				<h4 class="title">Rejestracja</h4>
			</div>
			<div class="content">
				<?php echo form_open('access/register'); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Adres e-mail</label>
								<input type="email" class="form-control" placeholder="Email" name="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Hasło</label>
								<input type="password" class="form-control" placeholder="Hasło" value="" name="password" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Powtórz hasło</label>
								<input type="password" class="form-control" placeholder="Powtórz hasło" value="" name="repeat_password" required>
							</div>
						</div>
					</div>
					
					<button type="submit" class="btn btn-info btn-fill pull-right">Rejestracja</button>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>