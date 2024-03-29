<?php

include_once 'tbs_class.php';
include_once 'plugins/tbs_plugin_opentbs.php';

if (empty($_POST)) {
  echo "Sem variáveis de POST!";
  exit;
}

$inputs = $_POST['input'];
$detalhes = array($_POST['detalhes']);
$titulo = array($_POST['titulo']);
$assinaturas = $_POST['ass'];

$array_type1 = combineArrays($inputs, "input");
$array_type2 = array_combine(array("detalhes"), $detalhes);
$array_type3 = combineArrays($assinaturas, "assinatura");
$array_type4 = array_combine(array("titulo"), $titulo);

function combineArrays($tipoArray, $nomeArray)
{
  $arr = [];
  for ($i = 1; $i <= count($tipoArray); $i++) {
    array_push($arr, "$nomeArray$i");
  }
  return array_combine($arr, $tipoArray);
}

$TBS = new clsTinyButStrong;
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
$template = __DIR__ . '/../Modelo de Ata.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
$TBS->MergeBlock('blk1', $array_type1);
$TBS->MergeBlock('blk2', $array_type2);
$TBS->MergeBlock('blk3', $array_type3);
$TBS->MergeBlock('blk4', $array_type4);

$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as']) !== '') && ($_SERVER['SERVER_NAME'] == 'localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_' . date('Y-m-d') . $save_as . '.', 'Modelo de Ata.docx');
if ($save_as === '') {
  $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);
  exit();
} else {
  $TBS->Show(OPENTBS_FILE, $output_file_name);
  exit("Arquivo [$output_file_name] já foi criado.");
}