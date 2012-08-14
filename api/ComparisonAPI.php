<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
 
/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

class ComparisonAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * Download comparison result file
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param resultFileId  Comparison result file GUID
   *  
	 * @return string {@link string} 
	 * @throws APIException 
	 */

	 public function DownloadResult($userId, $resultFileId) {

		//parse inputs
		$resourcePath = "/comparison/{userId}/comparison/download?resultFileId={resultFileId}&format={format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($resultFileId != null) {
			$resourcePath = str_replace("{resultFileId}", $resultFileId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'string');
		return $responseObject;
				
				
	 }



}