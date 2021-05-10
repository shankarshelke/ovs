<?php
namespace App\Database\Migrations;

/**
 * CodeIgniter IonAuth
 *
 * @package CodeIgniter-Ion-Auth
 * @author  Benoit VRIGNAUD <benoit.vrignaud@zaclys.net>
 * @license https://opensource.org/licenses/MIT	MIT License
 * @link    http://github.com/benedmunds/CodeIgniter-Ion-Auth
 */

/**
 * Migration class
 *
 * @package CodeIgniter-Ion-Auth
 */
class Migration_Install_categories extends \CodeIgniter\Database\Migration
{
	/**
	 * Tables
	 *
	 * @var array
	 */
	private $tables;

	/**
	 * Construct
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->tables = ['products','categories'];
	}

	/**
	 * Up
	 *
	 * @return void
	 */
	public function up()
	{
		// Drop table 'categories' if it exists
		$this->forge->dropTable('categories', true);

		// Table structure for table 'categories'
		$this->forge->addField([
			'id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id' => [
				'type'       => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned'   => true,
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'file_name' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'file_path' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'file_full_path' => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
				'null'       => true,
			],
			'description' => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
				'null'       => true,
			],
			'created_at DATETIME default CURRENT_TIMESTAMP',
			'updated_at DATETIME default CURRENT_TIMESTAMP',
			'deleted_at DATETIME default NULL',
			'active' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'null'       => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id', 'NO ACTION', 'CASCADE');
		$this->forge->createTable('categories');
	}

	/**
	 * Down
	 *
	 * @return void
	 */
	public function down()
	{
		$this->forge->dropTable('categories', true);
	}
}
