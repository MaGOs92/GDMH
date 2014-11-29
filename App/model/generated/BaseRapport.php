<?php
class BaseRapport extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('rapport');
        
        $this->hasColumn('nom_rapport',   'string',  256,  array('unique' => true, 'notnull' => true));
        $this->hasColumn('id_cont',   'integer',  null,  array('notnull' => true));
    }

    public function setUp()
    {
		$this->hasMany('Contact as Contacts', array('local' => 'id_cont', 'foreign' => 'id'));
    }
}