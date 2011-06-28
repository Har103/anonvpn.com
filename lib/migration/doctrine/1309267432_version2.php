<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('order', 'order_server_id_server_id', array(
             'name' => 'order_server_id_server_id',
             'local' => 'server_id',
             'foreign' => 'id',
             'foreignTable' => 'server',
             'onUpdate' => 'CASCADE',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('order', 'order_server_id', array(
             'fields' => 
             array(
              0 => 'server_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('order', 'order_server_id_server_id');
        $this->removeIndex('order', 'order_server_id', array(
             'fields' => 
             array(
              0 => 'server_id',
             ),
             ));
    }
}