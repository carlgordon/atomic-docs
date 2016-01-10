<?php


function renameScssFile($catName, $fileName, $oldName)
{	
	$config = getConfig();
	$cssDir = $config['cssDir'];
    $cssExt = $config['cssExt'];

    rename ("../../$cssDir/$catName/_$oldName.$cssExt", "../../$cssDir/$catName/_$fileName.$cssExt");
}

function renameCompFile($catName, $fileName, $oldName)
{	
	$config = getConfig();
	$compExt = $config['compExt'];

    rename ("../../components/$catName/$oldName.$compExt", "../../components/$catName/$fileName.$compExt");
}

function changeCommentString($catName, $fileName, $oldName)
{	

	$config = getConfig();
	$compExt = $config['compExt'];

    $oldString = '<!--components/'.$catName.'/'.$oldName.'.'.$compExt.'-->';
    $newString = '<!--components/'.$catName.'/'.$fileName.'.'.$compExt.'-->';

	//Place contents of file into variable
	$contents = file_get_contents('../../components/'.$catName.'/'.$oldName.'.'.$compExt.'');
	$contents = str_replace($oldString, $newString , $contents);
	$contents = file_put_contents('../../components/'.$catName.'/'.$oldName.'.'.$compExt.'', $contents);
    

}

	


?>