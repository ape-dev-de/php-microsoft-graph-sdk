<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\AccessReviews\HistoryDefinitions\Instances;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewHistoryInstance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\AccessReviews\HistoryDefinitions\Instances\GenerateDownloadUriRequestBuilder;

/**
 * Request builder for /identityGovernance/accessReviews/historyDefinitions/{accessReviewHistoryDefinition-id}/instances/{accessReviewHistoryInstance-id}
 */
class AccessReviewHistoryInstanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get instances from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessReviewHistoryInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessReviewHistoryInstance
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
     * Deserialize response to AccessReviewHistoryInstance
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
        return new AccessReviewHistoryInstance($data);
    }
    /**
     * Update the navigation property instances in identityGovernance
     * @param AccessReviewHistoryInstance $body Request body
     * @return AccessReviewHistoryInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessReviewHistoryInstance $body): AccessReviewHistoryInstance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessReviewHistoryInstance
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
        return new AccessReviewHistoryInstance($data);
    }
    /**
     * Delete navigation property instances for identityGovernance
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
     * Navigate to generateDownloadUri
     *
     * @return GenerateDownloadUriRequestBuilder
     */
    public function generateDownloadUri(): GenerateDownloadUriRequestBuilder
    {
        return new GenerateDownloadUriRequestBuilder($this->client, $this->requestUrl . '/generateDownloadUri');
    }
}
