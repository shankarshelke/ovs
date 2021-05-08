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
class Migration_Install_Members extends \CodeIgniter\Database\Migration
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

		$this->tables = ['elections','members'];
	}

	/**
	 * Up
	 *
	 * @return void
	 */
	public function up()
	{
		// Drop table 'categories' if it exists
		$this->forge->dropTable('elections', true);

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
			'election_type' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'start_date_time' => [
				'type'       => 'DATETIME',
				'constraint' => '6',
			],
			'end_date_time' => [
				'type'       => 'DATETIME',
				'constraint' => '6',
			],
			'description' => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
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
		$this->forge->createTable('elections');

		// Drop table 'members' if it exists
		$this->forge->dropTable('members', true);

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
			'election_id' => [
				'type'       => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned'   => true,
			],
			'name' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'null'       => true,
			],
			'aadhar_no' => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
				'null'       => true,
			],
			'contact' => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
				'null'       => true,
			],
			'email' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'pincode' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'taluka' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
				'null'       => true,
			],
			'district' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
				'null'       => true,
			],
			'state' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
				'null'       => true,
			],
			'short_desc' => [
				'type'       => 'TEXT',
				'null'       => true,
			],
			'profile_name' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'profile_path' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'profile_full_path' => [
				'type'       => 'VARCHAR',
				'constraint' => '1000',
				'null'       => true,
			],
			'parti_logo_name' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'parti_logo_path' => [
				'type'       => 'VARCHAR',
				'constraint' => '500',
				'null'       => true,
			],
			'parti_logo_full_path' => [
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
		$this->forge->addForeignKey('election_id', 'elections', 'id', 'NO ACTION', 'CASCADE');
		$this->forge->createTable('members', false);
	}

	/**
	 * Down
	 *
	 * @return void
	 */
	public function down()
	{
		$this->forge->dropTable('members', true);
		$this->forge->dropTable('elections', true);
	}
}
