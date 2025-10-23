<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryNoncustodialDataSource;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DataSourceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastIndexOperationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityApplyHoldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityReleaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityRemoveHoldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityUpdateIndexRequestBuilder;

/**
 * Request builder for {ediscoveryNoncustodialDataSource-id}
 */
class EdiscoveryNoncustodialDataSourceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get noncustodialDataSources from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoveryNoncustodialDataSource
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoveryNoncustodialDataSource
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryNoncustodialDataSource
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SecurityEdiscoveryNoncustodialDataSource($data);
    }
    /**
     * Update the navigation property noncustodialDataSources in security
     * @param SecurityEdiscoveryNoncustodialDataSource $body Request body
     * @return SecurityEdiscoveryNoncustodialDataSource
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoveryNoncustodialDataSource $body): SecurityEdiscoveryNoncustodialDataSource
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryNoncustodialDataSource
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SecurityEdiscoveryNoncustodialDataSource($data);
    }
    /**
     * Delete navigation property noncustodialDataSources for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to dataSource
     *
     * @return DataSourceRequestBuilder
     */
    public function dataSource(): DataSourceRequestBuilder
    {
        return new DataSourceRequestBuilder($this->client, $this->requestUrl . '/dataSource');
    }
    /**
     * Navigate to lastIndexOperation
     *
     * @return LastIndexOperationRequestBuilder
     */
    public function lastIndexOperation(): LastIndexOperationRequestBuilder
    {
        return new LastIndexOperationRequestBuilder($this->client, $this->requestUrl . '/lastIndexOperation');
    }
    /**
     * Navigate to microsoft.graph.security.applyHold
     *
     * @return SecurityApplyHoldRequestBuilder
     */
    public function securityApplyHold(): SecurityApplyHoldRequestBuilder
    {
        return new SecurityApplyHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.applyHold');
    }
    /**
     * Navigate to microsoft.graph.security.release
     *
     * @return SecurityReleaseRequestBuilder
     */
    public function securityRelease(): SecurityReleaseRequestBuilder
    {
        return new SecurityReleaseRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.release');
    }
    /**
     * Navigate to microsoft.graph.security.removeHold
     *
     * @return SecurityRemoveHoldRequestBuilder
     */
    public function securityRemoveHold(): SecurityRemoveHoldRequestBuilder
    {
        return new SecurityRemoveHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.removeHold');
    }
    /**
     * Navigate to microsoft.graph.security.updateIndex
     *
     * @return SecurityUpdateIndexRequestBuilder
     */
    public function securityUpdateIndex(): SecurityUpdateIndexRequestBuilder
    {
        return new SecurityUpdateIndexRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.updateIndex');
    }
}
