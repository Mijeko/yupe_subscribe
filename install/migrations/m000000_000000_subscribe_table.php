<?php

class m000000_000000_subscribe_table extends yupe\components\DbMigration
{
	public function safeUp()
	{
		$this->createTable(
			'{{subscribe}}',
			[
				'id' => 'pk',
				'email' => 'varchar(255) NOT NULL',
			],
			$this->getOptions()
		);

		$this->execute('ALTER TABLE `alttur_subscribe` ADD `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `email`, ADD `updated_at` TIMESTAMP NOT NULL AFTER `created_at`;');
		$this->execute('ALTER TABLE `alttur_subscribe` ADD UNIQUE(`email`);');
	}

	public function safeDown()
	{
		$this->dropTable('{{subscribe}}');
	}
}
