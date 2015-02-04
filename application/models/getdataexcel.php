<?php
class Getdataexcel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        //$this->load->library('Excel');
        parent::__construct();


    }

    function get_step1()
    {
        //$this->load->library('Excel');
        $fx_excel="D:/Adene/Para Testar/1.xlsx";
        $inputFileType = PHPExcel_IOFactory::identify($fx_excel);

        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objReader->setLoadSheetsOnly("Introdução de Dados");
        //$objReader->setReadDataOnly(true);

        /**  Load $inputFileName to a PHPExcel Object  **/
        $objPHPExcel = $objReader->load($fx_excel);

        //$total_sheets=$objPHPExcel->getSheetCount();
        $total_sheets=$objPHPExcel->getActiveSheet()->getCell('B49')->getValue();
      
        return $total_sheets;
    }


}
