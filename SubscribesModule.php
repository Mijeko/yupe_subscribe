<?php

use yupe\components\WebModule;

class SubscribesModule extends WebModule
{
	public function getDependencies()
	{
		return [];
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getCategory()
	{
		return 'Сервисы';
	}

	public function getName()
	{
		return "Подписки";
	}

	public function getDescription()
	{
		return "Позволяет размещать виджет для отправки формы на запрос подписки. Собирает Email посетителей, с которыми можно взаимодействовать в дальнейшем.";
	}

	public function getAuthor()
	{
		return "Developer";
	}

	public function getIcon()
	{
		return "";
	}

	public function getAdminPageLink()
	{
		return "/subscribes/subscribeBackend/index";
	}

	public function getNavigation()
	{
		return [
			[
				'icon' => 'fa fa-fw fa-list-alt',
				'label' => 'Список подписок',
				'url' => ['/subscribes/subscribeBackend/index']
			],
			[
				'icon' => 'fa fa-fw fa-plus-square',
				'label' => 'Добавить подписку',
				'url' => ['/subscribes/subscribeBackend/create']
			],
		];
	}
}