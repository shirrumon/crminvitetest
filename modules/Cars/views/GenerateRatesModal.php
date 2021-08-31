<?php

use App\Controller\Modal;
use App\Db;
use App\Request;

class Cars_GenerateRatesModal_View extends Modal
{
    protected $pageTitle = 'OBLICZENIE';
    public $modalIcon = 'fas fa-plus';
    public $successBtn = 'LBL_SEND';

    public function checkPermission(Request $request)
    {
        $this->recordModel = $request->isEmpty('record') ?
            null:
            Vtiger_Record_Model::getInstanceById($request->getInteger('record'), $request->getModule());
        if(!$this->recordModel || !($this->recordModel->isEditable() && \App\Privilege::isPermitted('Cars'))) {
            throw new \App\Exceptions\NoPermittedToRecord('ERR_NO_PERMISSIONS_FOR_THE_RECORD', 406);
        }
    }

    public function process(Request $request)
    {
        $moduleName = $request->getModule();
        $id = $request->getInteger('record');
        $recordInstance = Vtiger_Record_Model::getInstanceById($id, $moduleName);

        $viewer = $this->getViewer($request);
        $viewer->assign('MODULE_NAME', $moduleName);
        $viewer->assign('KOSZT', $recordInstance->get('koszt_eksp'));
        $viewer->assign('PALIWO', $recordInstance->get('uzycie_paliwa'));
        $viewer->assign('ID', $id);
        $viewer->assign('NAME', $recordInstance->get('car_name'));
        $viewer->assign('MODEL', $recordInstance->get('nazwa_samochodu'));
        $viewer->assign('USER_ID', $recordInstance->getId());

        $viewer->view('GenerateRatesModal.tpl', $request->getModule());

    }
}