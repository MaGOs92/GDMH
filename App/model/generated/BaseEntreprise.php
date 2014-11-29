<?php
class BaseEntreprise extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('entreprise');
        $this->hasColumn('nom_ent',   'string',  64,  array('unique' => true, 'notnull' => true));
        $this->hasColumn('adresse', 'string',  256, array());
        $this->hasColumn('ville', 'string',  64, array());
        $this->hasColumn('codepostal', 'string',  64, array());
        $this->hasColumn('pays', 'string',  64, array());

    }

    public function setUp()
    {
        $this->hasMany('Contact as Contacts', array('local' => 'id', 'foreign' => 'ent_id'));
    }
}