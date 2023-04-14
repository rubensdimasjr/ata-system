<?php

include_once __DIR__ . '/tbs_class.php';
include_once __DIR__ . '/plugins/tbs_plugin_opentbs.php';

$inputs = $_POST['input'];
$detalhes = array($_POST['detalhes']);
$assinaturas = $_POST['ass'];

$array_type1 = combineArrays($inputs, "input");
$array_type2 = array_combine(array("detalhes"), $detalhes);
$array_type3 = combineArrays($assinaturas, "assinatura");

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
$template = 'Modelo de Ata.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
$TBS->MergeBlock('blk1', $array_type1);
$TBS->MergeBlock('blk2', $array_type2);
$TBS->MergeBlock('blk3', $array_type3);

$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as']) !== '') && ($_SERVER['SERVER_NAME'] == 'localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_' . date('Y-m-d') . $save_as . '.', $template);
if ($save_as === '') {
  $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name);
  exit();
} else {
  $TBS->Show(OPENTBS_FILE, $output_file_name);
  exit("Arquivo [$output_file_name] já foi criado.");
}