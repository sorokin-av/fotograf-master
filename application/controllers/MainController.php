<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

	public function indexAction() {
		/*$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];*/
		$this->view->render('Главная страница');
	}

	public function aboutAction() {
		$this->view->render('Обо мне');
	}
public function lovestoryAction() {
		$this->view->renderfoto('Любовная история ');
	}
	public function peddingAction() {
		$this->view->renderfoto('В ожидании');
	}
	public function familyAction() {
		$this->view->renderfoto('Семнйное');
	}
	public function eventsAction() {
		$this->view->renderfoto('Мероприятие');
	}
	public function artdressAction() {
		$this->view->renderfoto('АРТ');
	}
	public function carAction() {
		$this->view->renderfoto('Автомероприятие');
	}
	public function weddingAction() {
		$this->view->renderfoto('Свадьба');
	}
	public function portretAction() {

		$this->view->renderfoto('Портрет');
			
	}



	public function contactAction() {
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			mail('titef@p33.org', 'Сообщение из блога', $_POST['name'].'|'.$_POST['phone'].'|'.$_POST['text']);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		}



		$this->view->render('Контакты');
	}

	/*public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост');
	*/

}