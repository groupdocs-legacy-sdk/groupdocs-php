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

class MgmtAPI {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}


	/**
	 * Get user profile
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetUserProfile($userId) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/profile";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Update user profile
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param postData  Info
   *  
	 * @return UpdateUserResponse {@link UpdateUserResponse} 
	 * @throws APIException 
	 */

	 public function UpdateUserProfile($userId, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/profile";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
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
		$responseObject = $this->apiClient->deserialize($response, 'UpdateUserResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Change user password
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param postData  Password
   *  
	 * @return ChangePasswordResponse {@link ChangePasswordResponse} 
	 * @throws APIException 
	 */

	 public function ChangeUserPassword($userId, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/profile/password";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
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
		$responseObject = $this->apiClient->deserialize($response, 'ChangePasswordResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get user profile by reset token
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param token  Token
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetUserProfileByResetToken($callerId, $token) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/reset-tokens?token={token}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($token != null) {
			$resourcePath = str_replace("{token}", $token, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get user profile by verif token
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param token  Token
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetUserProfileByVerifToken($callerId, $token) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/verif-tokens?token={token}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($token != null) {
			$resourcePath = str_replace("{token}", $token, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get user profile by claimed token
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param token  Token
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetUserProfileByClaimedToken($callerId, $token) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/claimed-tokens?token={token}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($token != null) {
			$resourcePath = str_replace("{token}", $token, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Get alien user profile
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param userId  User GUID
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function GetAlienUserProfile($callerId, $userId) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users/{userId}/profile";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Update alien user profile
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param userId  User GUID
   *  @param postData  Info
   *  
	 * @return UpdateUserResponse {@link UpdateUserResponse} 
	 * @throws APIException 
	 */

	 public function UpdateAlienUserProfile($callerId, $userId, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users/{userId}/profile";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UpdateUserResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Create user
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param postData  Payload
   *  
	 * @return CreateUserResponse {@link CreateUserResponse} 
	 * @throws APIException 
	 */

	 public function CreateUser($callerId, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'CreateUserResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Create user login
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param userId  User GUID
   *  @param password  Password
   *  
	 * @return UserInfoResponse {@link UserInfoResponse} 
	 * @throws APIException 
	 */

	 public function CreateUserLogin($callerId, $userId, $password) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users/{userId}/logins";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($password != null) {
			$resourcePath = str_replace("{password}", $password, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UserInfoResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Change alien user password
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param userId  User GUID
   *  @param postData  Password
   *  
	 * @return ChangePasswordResponse {@link ChangePasswordResponse} 
	 * @throws APIException 
	 */

	 public function ChangeAlienUserPassword($callerId, $userId, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users/{userId}/password";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ChangePasswordResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Reset user password
	 *
	 * 
	 * 
   * @param callerId  Caller GUID
   *  @param userId  User GUID
   *  
	 * @return ResetPasswordResponse {@link ResetPasswordResponse} 
	 * @throws APIException 
	 */

	 public function ResetUserPassword($callerId, $userId) {

		//parse inputs
		$resourcePath = "/mgmt/{callerId}/users/{userId}/password";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "DELETE";
        $queryParams = array();
        $headerParams = array();
    
		
		if($callerId != null) {
			$resourcePath = str_replace("{callerId}", $callerId, $resourcePath);
		}
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'ResetPasswordResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Returns user's storage providers.
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  
	 * @return GetStorageProvidersResponse {@link GetStorageProvidersResponse} 
	 * @throws APIException 
	 */

	 public function GetStorageProviders($userId) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/storages";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "GET";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, null, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'GetStorageProvidersResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Adds a new storage provider configuration.
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param provider  Storage provider name
   *  @param postData  Storage provider configuration details
   *  
	 * @return AddStorageProviderResponse {@link AddStorageProviderResponse} 
	 * @throws APIException 
	 */

	 public function AddStorageProvider($userId, $provider, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/storages/{provider}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "POST";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($provider != null) {
			$resourcePath = str_replace("{provider}", $provider, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'AddStorageProviderResponse');
		return $responseObject;
				
				
	 }


	/**
	 * Updates user's storage provider configuration.
	 *
	 * 
	 * 
   * @param userId  User GUID
   *  @param provider  Storage provider name
   *  @param postData  Storage provider configuration details
   *  
	 * @return UpdateStorageProviderResponse {@link UpdateStorageProviderResponse} 
	 * @throws APIException 
	 */

	 public function UpdateStorageProvider($userId, $provider, $postData) {

		//parse inputs
		$resourcePath = "/mgmt/{userId}/storages/{provider}";
		$resourcePath = str_replace("{format}", "json", $resourcePath);
		$resourcePath = str_replace("*", "", $resourcePath);
		$method = "PUT";
        $queryParams = array();
        $headerParams = array();
    
		
		if($userId != null) {
			$resourcePath = str_replace("{userId}", $userId, $resourcePath);
		}
		if($provider != null) {
			$resourcePath = str_replace("{provider}", $provider, $resourcePath);
		}

	
	

		//make the API Call
		$response = $this->apiClient->callAPI($resourcePath, $method, $queryParams, $postData, $headerParams);
    if(! $response){
        return null;
    }

		//create output objects if the response has more than one object
		$responseObject = $this->apiClient->deserialize($response, 'UpdateStorageProviderResponse');
		return $responseObject;
				
				
	 }



}