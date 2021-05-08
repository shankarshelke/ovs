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
class Migration_Install_products extends \CodeIgniter\Database\Migration
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

		// Drop table 'products' if it exists
		$this->forge->dropTable('products', true);

		// Table structure for table 'users'
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
			'short_desc' => [
				'type'       => 'TEXT',
				'null'       => true,
			],
			'long_desc' => [
				'type'       => 'MEDIUMTEXT',
				'null'       => true,
			],
			'colors' => [
				'type'       => 'VARCHAR',
				'constraint' => '254',
				'null'       => true,
			],
			'cat_ids' => [
				'type'       => 'VARCHAR',
				'constraint' => '254',
				'null'       => true,
			],
			'tags' => [
				'type'       => 'BLOB',
				'null'       => true,
			],
			'price' => [
				'type'       => 'FLOAT',
				'constraint' => '20',
				'null'       => true,
			],
			'sale_price' => [
				'type'       => 'FLOAT',
				'constraint' => '20',
				'null'       => true,
			],
			'sku' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
				'null'       => true,
			],
			'stock_status' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'null'       => true,
			],
			'quantity' => [
				'type'       => 'INT',
				'constraint' => '10',
				'null'       => true,
			],
			'created_at' => [
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => true,
				'null'       => true,
			],
			'updated_at' => [
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => true,
				'null'       => true,
			],
			'deleted_at' => [
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => true,
				'null'       => true,
			],
			'active' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'null'       => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id', 'NO ACTION', 'CASCADE');
		$this->forge->createTable('products', false);
	}

	/**
	 * Down
	 *
	 * @return void
	 */
	public function down()
	{
		$this->forge->dropTable('categories', true);
		$this->forge->dropTable('products', true);
	}
}
