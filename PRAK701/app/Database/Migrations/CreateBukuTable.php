<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'BIGINT', 'constraint' => 20, 'unsigned' => true, 'auto_increment' => true], // [cite: 27, 28]
            'judul'        => ['type' => 'VARCHAR', 'constraint' => 255], // [cite: 31, 32]
            'penulis'      => ['type' => 'VARCHAR', 'constraint' => 255], // [cite: 35, 36]
            'penerbit'     => ['type' => 'VARCHAR', 'constraint' => 255], // [cite: 39, 40]
            'tahun_terbit' => ['type' => 'YEAR', 'constraint' => 4], // [cite: 43, 44]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down() { $this->forge->dropTable('buku'); }
}