<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Stages\Decisions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewInstanceDecisionItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Stages\Decisions\InsightsRequestBuilder;

/**
 * Request builder for /identityGovernance/accessReviews/definitions/{accessReviewScheduleDefinition-id}/instances/{accessReviewInstance-id}/stages/{accessReviewStage-id}/decisions/{accessReviewInstanceDecisionItem-id}
 */
class AccessReviewInstanceDecisionItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get accessReviewInstanceDecisionItem
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessReviewInstanceDecisionItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessReviewInstanceDecisionItem|null
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
     * Deserialize response to AccessReviewInstanceDecisionItem|null
     */
    private function deserializeGet(string $body): AccessReviewInstanceDecisionItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessReviewInstanceDecisionItem($data);
    }
    /**
     * Update accessReviewInstanceDecisionItem
     * @param AccessReviewInstanceDecisionItem $body Request body
     * @return AccessReviewInstanceDecisionItem|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessReviewInstanceDecisionItem $body): AccessReviewInstanceDecisionItem|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessReviewInstanceDecisionItem|null
     */
    private function deserializePatch(string $body): AccessReviewInstanceDecisionItem|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessReviewInstanceDecisionItem($data);
    }
    /**
     * Delete navigation property decisions for identityGovernance
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to insights
     *
     * @return InsightsRequestBuilder
     */
    public function insights(): InsightsRequestBuilder
    {
        return new InsightsRequestBuilder($this->client, $this->requestUrl . '/insights');
    }
}
