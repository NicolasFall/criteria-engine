<?php

namespace CriteriaEngine\Classes;

trait FileDirectoryTrait{

	public function create_path_if_doesnt_exist($path){
		if (!file_exists($path)) {
		    mkdir($path, 0777, true);
		    echo "\nTarget path doesn't exists.\n";
		    echo "Creating {$path} folder. (used mkdir 0777).\n";
		}	
	}
}
