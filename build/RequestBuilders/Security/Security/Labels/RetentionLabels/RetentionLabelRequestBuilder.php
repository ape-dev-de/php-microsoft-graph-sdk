<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Labels\RetentionLabels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityRetentionLabel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Labels\RetentionLabels\DescriptorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Labels\RetentionLabels\DispositionReviewStagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Security\Labels\RetentionLabels\RetentionEventTypeRequestBuilder;

/**
 * Request builder for /security/labels/retentionLabels/{retentionLabel-id}
 */
class RetentionLabelRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get retentionLabels from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityRetentionLabel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityRetentionLabel
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
     * Deserialize response to SecurityRetentionLabel
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
        return new SecurityRetentionLabel($data);
    }
    /**
     * Update retentionLabel
     * @param SecurityRetentionLabel $body Request body
     * @return SecurityRetentionLabel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityRetentionLabel $body): SecurityRetentionLabel
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityRetentionLabel
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
        return new SecurityRetentionLabel($data);
    }
    /**
     * Delete retentionLabel
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
     * Navigate to descriptors
     *
     * @return DescriptorsRequestBuilder
     */
    public function descriptors(): DescriptorsRequestBuilder
    {
        return new DescriptorsRequestBuilder($this->client, $this->requestUrl . '/descriptors');
    }
    /**
     * Navigate to dispositionReviewStages
     *
     * @return DispositionReviewStagesRequestBuilder
     */
    public function dispositionReviewStages(): DispositionReviewStagesRequestBuilder
    {
        return new DispositionReviewStagesRequestBuilder($this->client, $this->requestUrl . '/dispositionReviewStages');
    }
    /**
     * Navigate to retentionEventType
     *
     * @return RetentionEventTypeRequestBuilder
     */
    public function retentionEventType(): RetentionEventTypeRequestBuilder
    {
        return new RetentionEventTypeRequestBuilder($this->client, $this->requestUrl . '/retentionEventType');
    }
}
