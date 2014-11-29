<?php
class BaseContact extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('contact');
        $this->hasColumn('nom_cont',   'string',  64,  array('notnull' => true));
        $this->hasColumn('prenom', 'string',  64, array('notnull' => true));
        $this->hasColumn('telephone', 'string',  64, array());
        $this->hasColumn('email', 'string',  256, array());
        $this->hasColumn('groupe', 'string',  64, array('notnull' => true));
        $this->hasColumn('id_ent', 'integer',  null, array());

    }

    public function setUp()
    {
        $this->hasOne('Entreprise as Entreprise', array('local' => 'id_ent', 'foreign' => 'id'));
		$this->hasMany('Rapport as Rapports', array('local' => 'id', 'foreign' => 'id_cont'));
    }
}