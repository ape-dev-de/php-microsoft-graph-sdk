<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryReviewSetQuery;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityApplyTagsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityExportRequestBuilder;

/**
 * Request builder for {ediscoveryReviewSetQuery-id}
 */
class EdiscoveryReviewSetQueryRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ediscoveryReviewSetQuery
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoveryReviewSetQuery
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoveryReviewSetQuery
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
     * Deserialize response to SecurityEdiscoveryReviewSetQuery
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
        return new SecurityEdiscoveryReviewSetQuery($data);
    }
    /**
     * Update ediscoveryReviewSetQuery
     * @param SecurityEdiscoveryReviewSetQuery $body Request body
     * @return SecurityEdiscoveryReviewSetQuery
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoveryReviewSetQuery $body): SecurityEdiscoveryReviewSetQuery
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryReviewSetQuery
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
        return new SecurityEdiscoveryReviewSetQuery($data);
    }
    /**
     * Delete ediscoveryReviewSetQuery
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
     * Navigate to microsoft.graph.security.applyTags
     *
     * @return SecurityApplyTagsRequestBuilder
     */
    public function securityApplyTags(): SecurityApplyTagsRequestBuilder
    {
        return new SecurityApplyTagsRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.applyTags');
    }
    /**
     * Navigate to microsoft.graph.security.export
     *
     * @return SecurityExportRequestBuilder
     */
    public function securityExport(): SecurityExportRequestBuilder
    {
        return new SecurityExportRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.export');
    }
}
