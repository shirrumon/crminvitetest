<?php

use App\Controller\Action;
use App\Db;
use App\Request;

class Cars_GenerateRates_Action extends Action
{
    public function checkPermission(Request $request)
    {
        $moduleName = $request->getModule();
        $userPrivilegesModel =Users_Privileges_Model::getCurrentUserPrivilegesModel();
        if(!$userPrivilegesModel->hasModuleActionPermission($moduleName, 'EditView')){
            throw new \App\Exceptions\NoPermitted('LBL_PERMISSION_DENIED', 406);
        }
    }

    public function process(Request $request){
        $response = new Vtiger_Response();
        $response->setResult(['res' => 'success']);
        $response->emit();

        $id = intval($request->get('id'));
        $name = $request->get('module');
        $paliwo = intval($request->get('fuel'));
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');


        $records = (new Db\Query())->select('sum_of_km')
            ->from('u_yf_departures')
            ->where(['samochod' => $id])
            ->andWhere(['between', 'departure_date', $startDate, $endDate])
            ->all();

        $sum = 0;
        $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($records));
        foreach ($it as $key => $value) {
            $sum += $value;
        }

        $cost = $sum / 100 * $paliwo * 5;

        $record = Vtiger_Record_Model::getInstanceById($id, $name);
        $record->set('koszt_eksp', $cost);
        $record->save();
    }
}