<?php

class CadastroController extends \HXPHP\System\Controller
{
	public function cadastrarAction()
	{
		$this->view->setFile('index');

		$this->request->setCustomFilters([
			'email' => FILTER_VALIDATE_EMAIL
			]);
		$post = $this->request->post();

		if(!empty($post)){
			$cadastrarUsuario = User::cadastrar($post);

			if($cadastrarUsuario->status == false){
				$this->load('Helpers\Alert', array(
					'danger',
					'Ops! Nâo foi possível efetuar seu cadastro. Verifique os erros abaixo:',
					$cadastrarUsuario->errors
				));
			}

		}

		//$username = $this->request->post('username');

		//echo $username;

		//Gerar Senha
		//Obter role_id

	}
}