<?php 

class zip{
	private $version="1.0";
	
	private $zipfile='';
	private $destination='';
	private $source='';
	private $fileslist=[];

	public function __construct(){

	}

	###########################
	# METHODS #################
	###########################

	# create
	###########################
	public function create($source=null,$destination=null){
		if (
			  empty($source)
			&&empty($destination)
			&&empty($this->source)
			&&empty($this->destination)
			&&(empty($this->fileslist)||!is_array($this->fileslist))
		){
			return false;
		}

		$source         =empty($source)?$this->source:$source;
		$source         =tools::addSlash($source);
		$destination    =empty($destination)?$this->destination:$destination;
		$this->fileslist=empty($this->fileslist)?tools::recursiveDirContent($source):$this->fileslist;
		
		$zip = new ZipArchive();
		if (is_file($destination)){
			unlink($destination);
		}
		if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
			throw new Exception("Error creating zipArchive", 1);			
			return false;
		}

		foreach ($this->fileslist as $file) {
			$file=str_replace('./', '', $file);
			if (
				$file!=$source
				&&is_file($file)	
			){
				$zip->addFile($file);
			}elseif (
				$file!=$source
				&&is_dir($file)	
			){
				$zip->addEmptyDir($file);
			}
		}
		
		$this->zipfile=$destination;
	}

	# unzip
	###########################
	public function unzip($file,$destination){
		if (
			  empty($source)
			&&empty($destination)
			&&empty($this->source)
			&&empty($this->destination)
		){
			return false;
		}
		$zip = new ZipArchive() ;
	    if ($zip->open($file) !== TRUE) {return false;} 
	   	$zip->extractTo($destination); 
	    $zip->close(); 
	    return true; 
	}
	
	# download
	###########################
	public function download(){
		header("Location: ".$this->zipfile);
		exit;
	}

	# getters
	public function getVersion(){return $this->version;}
	public function getDestination(){return $this->destination;}
	public function getSource(){return $this->source;}
	public function getFilesList(){return $this->fileslist;}

	# setters
	public function setVersion($value=null){$this->version=$value;}
	public function setDestination($value=null){$this->destination=$value;}
	public function setSource($value=null){$this->source=$value;}
	public function setFilesList($value=null){$this->fileslist=$value;}
}
