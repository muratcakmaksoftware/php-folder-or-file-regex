<?php
/**
 * If fileName have this characters \,/,:,*,?,",<,>,| return false but if not return true.
 * @param $fileName
 * @return string
 */
function folderOrFileNameRegex($fileName){
	return !preg_match('/[\\\\,\/,:,*,?,",<,>,|]/', $fileName);
}

var_dump(folderOrFileNameRegex('test1\\')); // false
var_dump(folderOrFileNameRegex('tes/t1')); // false
var_dump(folderOrFileNameRegex('<test1')); // false
var_dump(folderOrFileNameRegex('test')); // true