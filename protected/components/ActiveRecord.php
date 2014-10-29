<?php
class ActiveRecord extends CActiveRecord{

    public function getId($sData){
        $aResult = array();

        $aoData = $this->findAll('name LIKE "%'.$sData.'%"');

        foreach($aoData as $oData)
        {
            $aResult[] = $oData->id;
        }

        return $aResult;
    }
}