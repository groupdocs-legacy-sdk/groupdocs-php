<?php 

class FileStream {
	
	private $fileName = null;
	private $contentType = null;
	private $size = null;
	private $inputStream = null;
	
	private function __construct($inputFilePath=null, $downloadDirectory=null, $outFileName=null){
		$this->filePath = $inputFilePath;
		$this->downloadDirectory = $downloadDirectory;
		$this->outFileName = $outFileName;
	}

	public static function fromFile($inFilePath){
		if(!file_exists($inFilePath)){
			throw new Exception("File $inFilePath doesn't exist.");
		}
		return new self($inFilePath);
	}
	
	/**
	 * by default filename is derived from content-disposition header or url
	 */
	public static function fromHttp($downloadDirectory, $outFileName=null){
		if(!file_exists($downloadDirectory)){
			throw new Exception("Directory $downloadDirectory doesn't exist.");
		}
		return new self(null, $downloadDirectory, $outFileName);
	}
	
	public function getFileName(){
        if ($this->fileName == null and $this->filePath != null)
            $this->fileName = basename($this->filePath);
		else if ($this->fileName == null and $this->downloadDirectory != null){
			if($this->outFileName != null){
				$this->fileName = $this->outFileName;
			}
		}
        return $this->fileName;
	}
	
	public function getContentType(){
        if ($this->contentType == null and $this->filePath != null)
            $this->contentType = APIClient::getMimeType($this->filePath);
		else if ($this->contentType == null and $this->downloadDirectory != null)
            $this->contentType = $this->headers["Content-Type"];
        return $this->contentType;
	}
	
	public function getSize(){
        if ($this->size == null and $this->filePath != null){
            $this->size = filesize($this->filePath);
		}
        return $this->size;
	}
	
	public function getInputStream(){
        if ($this->inputStream == null and $this->filePath != null)
            $this->inputStream = fopen($this->filePath, "rb");
		else if ($this->inputStream == null and $this->downloadDirectory != null){
			$outFilePath = $this->downloadDirectory."/".$this->getFileName();
            $this->inputStream = fopen($outFilePath, "wb");
		}
        return $this->inputStream;
	}
	
	public function headerCallback($ch, $string){
		// this method is called multiple times
		
		$len = strlen($string);
        if( !strstr($string, ':') ) {
            return $len;
        }
        
        list($name, $value) = explode(':', $string, 2);
		
		if($this->getFileName() == null){
	        if( strcasecmp($name, 'Content-Disposition') == 0) {
	            $parts = explode(';', $value);
	            if( count($parts) > 1 ) {
	                foreach($parts AS $crumb) {
	                    if( strstr($crumb, '=') ) {
	                        list($pname, $pval) = explode('=', $crumb);
	                        $pname = trim($pname);
	                        if( strcasecmp($pname, 'filename') == 0 ) {
	                            // Using basename to prevent path injection in malicious headers.
	                            $this->fileName = basename($this->unquote(trim($pval)));
	                        }
	                    }
	                }
	            }
	        } else {
	        	// guess from url
	        	$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
				var_dump($url);
	        	$this->fileName = basename(parse_url($url, PHP_URL_PATH));
	        }
		}

        $this->headers[$name] = trim($value);
        return $len;
	}

	public function bodyCallback($ch, $string) {
		// this method is called multiple times
        $len = fwrite($this->getInputStream(), $string);
        $this->size += $len;
        return $len;
    }

    private function unquote($string) {
        return str_replace(array("'", '"'), '', $string);
    }
	
}
