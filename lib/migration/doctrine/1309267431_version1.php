<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('order', 'server_id', 'integer', '1', array(
             'unsigned' => '1',
             'comment' => 'Associated server',
             ));
    }

    public function down()
    {
        $this->removeColumn('order', 'server_id');
    }
}