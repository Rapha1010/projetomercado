
		<h1>Produtos</h1>
		<table class="table">
		<?php
		foreach($produtos as $produto) {
		echo '
		<tr>
			<td>'.anchor("produtos/{$produto['id']}",$produto['nome']).'<td/>
			<td>'.character_limiter($produto['descricao'],10).'<td/>
			<td>'.numeroEmReais($produto['preco']).'</td>
		</tr>';
		}
		?>
		</table>
		<h1>Login</h1>

	<?php if($this->session->userdata("usuario_logado")) : ?>
		<?= anchor('produtos/formulario',"Cadastrar novo Produto",array("class"=>"btn btn-primary")); ?>
		<?= anchor('login/logout','Logout', array("class"=>"btn btn-primary")); ?>

	<?php else :?>

		<?php
		echo form_open("login/autenticar");

		echo form_label("E-mail","email");
		echo form_input(array(
			"id"=>"email",
			"name"=>"email",
			"type"=>"email",
			"class"=>"form-control",
			"maxlength"=>"255"
			));
		echo form_label("Senha","senha");
		echo form_password(array(
			"id"=>"senha",
			"name"=>"senha",
			"class"=>"form-control",
			"maxlength"=>"255"));

		echo form_button(array(
			"class"=>"btn btn-primary",
			"content" =>"Login",
			"type" =>"submit"
			));
		echo form_close();



		?>


		<h1>Cadastro</h1>
		<?php
		echo form_open("usuarios/novo");

		echo form_label("Nome","nome");
		echo form_input(array(
			"id"=>"nome",
			"name"=>"nome",
			"class"=>"form-control",
			"maxlength"=>"255"
			));
		echo form_label("E-Mail","email");
		echo form_input(array(
			"id"=>"email",
			"name"=>"email",
			"type"=>"email",
			"class"=>"form-control",
			"maxlength"=>"255"));
		echo form_label("Senha","senha");
		echo form_password(array(
			"id"=>"senha",
			"name"=>"senha",
			"class"=>"form-control",
			"maxlength"=>"255"));

		echo form_button(array(
			"class"=>"btn btn-primary",
			"content" =>"Cadastrar",
			"type" =>"submit"
			));


		echo form_close();
		?>

	<?php endif ?>
