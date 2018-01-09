<?php
/**
 * MerchantGatewaysApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant Gateway API
 *
 * Merchant Gateway API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\MerchantGateway;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * MerchantGatewaysApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantGatewaysApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return MerchantGatewaysApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation chooseGateway
     *
     * Choose a gateway
     *
     * @param string $clientId  (required)
     * @param string $method  (required)
     * @param string $country  (required)
     * @param string $currency  (required)
     * @param string $hasAffiliation  (required)
     * @param string $version  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function chooseGateway($clientId, $method, $country, $currency, $hasAffiliation, $version = null)
    {
        list($response) = $this->chooseGatewayWithHttpInfo($clientId, $method, $country, $currency, $hasAffiliation, $version);
        return $response;
    }

    /**
     * Operation chooseGatewayWithHttpInfo
     *
     * Choose a gateway
     *
     * @param string $clientId  (required)
     * @param string $method  (required)
     * @param string $country  (required)
     * @param string $currency  (required)
     * @param string $hasAffiliation  (required)
     * @param string $version  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function chooseGatewayWithHttpInfo($clientId, $method, $country, $currency, $hasAffiliation, $version = null)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $clientId when calling chooseGateway');
        }
        // verify the required parameter 'method' is set
        if ($method === null) {
            throw new \InvalidArgumentException('Missing the required parameter $method when calling chooseGateway');
        }
        // verify the required parameter 'country' is set
        if ($country === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country when calling chooseGateway');
        }
        // verify the required parameter 'currency' is set
        if ($currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency when calling chooseGateway');
        }
        // verify the required parameter 'hasAffiliation' is set
        if ($hasAffiliation === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hasAffiliation when calling chooseGateway');
        }
        // parse inputs
        $resourcePath = "/merchants/{clientId}/choose-gateway";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($method !== null) {
            $queryParams['method'] = $this->apiClient->getSerializer()->toQueryValue($method);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }
        // query params
        if ($currency !== null) {
            $queryParams['currency'] = $this->apiClient->getSerializer()->toQueryValue($currency);
        }
        // query params
        if ($version !== null) {
            $queryParams['version'] = $this->apiClient->getSerializer()->toQueryValue($version);
        }
        // query params
        if ($hasAffiliation !== null) {
            $queryParams['hasAffiliation'] = $this->apiClient->getSerializer()->toQueryValue($hasAffiliation);
        }
        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                "{" . "clientId" . "}",
                $this->apiClient->getSerializer()->toPathValue($clientId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-API-KEY'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Authorization-JWT');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Authorization-JWT'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/merchants/{clientId}/choose-gateway'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}