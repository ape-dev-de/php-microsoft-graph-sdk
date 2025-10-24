<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Cases\EdiscoveryCases\ReviewSets;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryReviewSet;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Cases\EdiscoveryCases\ReviewSets\SecurityAddToReviewSetRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Cases\EdiscoveryCases\ReviewSets\SecurityExportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Cases\EdiscoveryCases\ReviewSets\QueriesRequestBuilder;

/**
 * Request builder for /security/cases/ediscoveryCases/{ediscoveryCase-id}/reviewSets/{ediscoveryReviewSet-id}
 */
class EdiscoveryReviewSetRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ediscoveryReviewSet
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoveryReviewSet
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoveryReviewSet
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryReviewSet
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
        return new SecurityEdiscoveryReviewSet($data);
    }
    /**
     * Update the navigation property reviewSets in security
     * @param SecurityEdiscoveryReviewSet $body Request body
     * @return SecurityEdiscoveryReviewSet
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoveryReviewSet $body): SecurityEdiscoveryReviewSet
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryReviewSet
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
        return new SecurityEdiscoveryReviewSet($data);
    }
    /**
     * Delete navigation property reviewSets for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to microsoft.graph.security.addToReviewSet
     *
     * @return SecurityAddToReviewSetRequestBuilder
     */
    public function securityAddToReviewSet(): SecurityAddToReviewSetRequestBuilder
    {
        return new SecurityAddToReviewSetRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.addToReviewSet');
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
    /**
     * Navigate to queries
     *
     * @return QueriesRequestBuilder
     */
    public function queries(): QueriesRequestBuilder
    {
        return new QueriesRequestBuilder($this->client, $this->requestUrl . '/queries');
    }
}
