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

class AsyncAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * Get job
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  
	 * @return GetJobResponse {@link GetJobResponse} 
	 * @throws APIException 
	 */

	 public function GetJob($userId, $jobId) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}?format=xml";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetJobResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get job json
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  
	 * @return GetJobResponse {@link GetJobResponse} 
	 * @throws APIException 
	 */

	 public function GetJobJson($userId, $jobId) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}?format=json";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetJobResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get job documents
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  
	 * @return GetJobDocumentsResponse {@link GetJobDocumentsResponse} 
	 * @throws APIException 
	 */

	 public function GetJobDocuments($userId, $jobId) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}/documents?format={format}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetJobDocumentsResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Create job
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param postData  Job
   *  
	 * @return CreateJobResponse {@link CreateJobResponse} 
	 * @throws APIException 
	 */

	 public function CreateJob($userId, $postData) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreateJobResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Add job document
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  @param fileId  File GUID
   *  @param formats  Formats
   *  
	 * @return AddJobDocumentResponse {@link AddJobDocumentResponse} 
	 * @throws APIException 
	 */

	 public function AddJobDocument($userId, $jobId, $fileId, $formats) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}/files/{fileId}?out_formats={formats}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}
		if($fileId != null) {
			$resourcePath = str_replace("{fileId}", $fileId, $resourcePath);
		}
		if($formats != null) {
			$resourcePath = str_replace("{formats}", $formats, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddJobDocumentResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Add job document url
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  @param absoluteUrl  Absolute Url
   *  @param formats  Formats
   *  
	 * @return AddJobDocumentResponse {@link AddJobDocumentResponse} 
	 * @throws APIException 
	 */

	 public function AddJobDocumentUrl($userId, $jobId, $absoluteUrl, $formats) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}/urls?absolute_url={absoluteUrl}&out_formats={formats}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}
		if($absoluteUrl != null) {
			$resourcePath = str_replace("{absoluteUrl}", $absoluteUrl, $resourcePath);
		}
		if($formats != null) {
			$resourcePath = str_replace("{formats}", $formats, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddJobDocumentResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Update job
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param jobId  Job id
   *  @param postData  Job
   *  
	 * @return UpdateJobResponse {@link UpdateJobResponse} 
	 * @throws APIException 
	 */

	 public function UpdateJob($userId, $jobId, $postData) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/{jobId}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($jobId != null) {
			$resourcePath = str_replace("{jobId}", $jobId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UpdateJobResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get jobs
	 *
	 * 
	 * 
   * @param asyncAsyncInput  
   *  
	 * @return GetJobsResponse {@link GetJobsResponse} 
	 * @throws APIException 
	 */

	 public function GetJobs($asyncAsyncInput) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs?page={pageIndex}&count={pageSize}&actions={actions}&excluded_actions={excludedActions}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
	
		
		if($asyncAsyncInput != null && $asyncAsyncInput->userId != null) {
		 	$resourcePath = str_replace("{userId}", $asyncAsyncInput->userId, $resourcePath);	
		}
		if($asyncAsyncInput != null && $asyncAsyncInput->pageIndex != null) {
		 	$resourcePath = str_replace("{pageIndex}", $asyncAsyncInput->pageIndex, $resourcePath);	
		}
		if($asyncAsyncInput != null && $asyncAsyncInput->pageSize != null) {
		 	$resourcePath = str_replace("{pageSize}", $asyncAsyncInput->pageSize, $resourcePath);	
		}
		if($asyncAsyncInput != null && $asyncAsyncInput->actions != null) {
		 	$resourcePath = str_replace("{actions}", $asyncAsyncInput->actions, $resourcePath);	
		}
		if($asyncAsyncInput != null && $asyncAsyncInput->excludedActions != null) {
		 	$resourcePath = str_replace("{excludedActions}", $asyncAsyncInput->excludedActions, $resourcePath);	
		}

	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetJobsResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get job documents
	 *
	 * 
	 * 
   * @param asyncAsyncInputJobsInput  
   *  
	 * @return GetJobsDocumentsResponse {@link GetJobsDocumentsResponse} 
	 * @throws APIException 
	 */

	 public function GetJobsDocuments($asyncAsyncInputJobsInput) {

		//parse inputs
		$resourcePath = "/async/{userId}/jobs/documents?page={pageIndex}&count={pageSize}&actions={actions}&excluded_actions={excludedActions}&order_by={orderBy}&order_asc={orderAsc}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
	
		
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->userId != null) {
		 	$resourcePath = str_replace("{userId}", $asyncAsyncInputJobsInput->userId, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->pageIndex != null) {
		 	$resourcePath = str_replace("{pageIndex}", $asyncAsyncInputJobsInput->pageIndex, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->pageSize != null) {
		 	$resourcePath = str_replace("{pageSize}", $asyncAsyncInputJobsInput->pageSize, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->actions != null) {
		 	$resourcePath = str_replace("{actions}", $asyncAsyncInputJobsInput->actions, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->excludedActions != null) {
		 	$resourcePath = str_replace("{excludedActions}", $asyncAsyncInputJobsInput->excludedActions, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->orderBy != null) {
		 	$resourcePath = str_replace("{orderBy}", $asyncAsyncInputJobsInput->orderBy, $resourcePath);	
		}
		if($asyncAsyncInputJobsInput != null && $asyncAsyncInputJobsInput->orderAsc != null) {
		 	$resourcePath = str_replace("{orderAsc}", $asyncAsyncInputJobsInput->orderAsc, $resourcePath);	
		}

	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetJobsDocumentsResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Convert
	 *
	 * 
	 * 
   * @param asyncAsyncInputFilesInput  
   *  
	 * @return ConvertResponse {@link ConvertResponse} 
	 * @throws APIException 
	 */

	 public function Convert($asyncAsyncInputFilesInput) {

		//parse inputs
		$resourcePath = "/async/{userId}/files/{fileId}?new_type={targetType}&email_results={emailResults}&new_description={description}&print_script={printScript}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
	
		
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->userId != null) {
		 	$resourcePath = str_replace("{userId}", $asyncAsyncInputFilesInput->userId, $resourcePath);	
		}
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->fileId != null) {
		 	$resourcePath = str_replace("{fileId}", $asyncAsyncInputFilesInput->fileId, $resourcePath);	
		}
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->targetType != null) {
		 	$resourcePath = str_replace("{targetType}", $asyncAsyncInputFilesInput->targetType, $resourcePath);	
		}
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->emailResults != null) {
		 	$resourcePath = str_replace("{emailResults}", $asyncAsyncInputFilesInput->emailResults, $resourcePath);	
		}
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->description != null) {
		 	$resourcePath = str_replace("{description}", $asyncAsyncInputFilesInput->description, $resourcePath);	
		}
		if($asyncAsyncInputFilesInput != null && $asyncAsyncInputFilesInput->printScript != null) {
		 	$resourcePath = str_replace("{printScript}", $asyncAsyncInputFilesInput->printScript, $resourcePath);	
		}

	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ConvertResponse');
		return $responseObject;
				
				
	 }



}