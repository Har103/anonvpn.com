<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('server', 'price', 'float', '5', array(
             'unsigned' => '1',
             'notnull' => '1',
             ));
    }

    public function down()
    {

    }
}