--TEST--
Check for vtiful presence
--SKIPIF--
<?php if (!extension_loaded("excel_writer")) print "skip"; ?>
--FILE--
<?php 
$config = ['path' => './tests'];
$excel = new \Vtiful\Kernel\Excel($config);
$filePath = $excel->fileName('tutorial01.xlsx')
    ->header(['Item', 'Cost'])
    ->output();
var_dump($filePath);
?>
--EXPECT--
string(23) "./tests/tutorial01.xlsx"
