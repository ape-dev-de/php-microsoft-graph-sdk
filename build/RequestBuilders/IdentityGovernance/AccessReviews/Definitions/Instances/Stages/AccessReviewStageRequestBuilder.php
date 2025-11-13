<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Stages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewStage;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Stages\DecisionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\Stages\StopRequestBuilder;

/**
 * Request builder for /identityGovernance/accessReviews/definitions/{accessReviewScheduleDefinition-id}/instances/{accessReviewInstance-id}/stages/{accessReviewStage-id}
 */
class AccessReviewStageRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get accessReviewStage
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessReviewStage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessReviewStage|null
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
     * Deserialize response to AccessReviewStage|null
     */
    private function deserializeGet(string $body): AccessReviewStage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessReviewStage($data);
    }
    /**
     * Update accessReviewStage
     * @param AccessReviewStage $body Request body
     * @return AccessReviewStage|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessReviewStage $body): AccessReviewStage|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessReviewStage|null
     */
    private function deserializePatch(string $body): AccessReviewStage|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessReviewStage($data);
    }
    /**
     * Delete navigation property stages for identityGovernance
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
     * Navigate to decisions
     *
     * @return DecisionsRequestBuilder
     */
    public function decisions(): DecisionsRequestBuilder
    {
        return new DecisionsRequestBuilder($this->client, $this->requestUrl . '/decisions');
    }
    /**
     * Navigate to stop
     *
     * @return StopRequestBuilder
     */
    public function stop(): StopRequestBuilder
    {
        return new StopRequestBuilder($this->client, $this->requestUrl . '/stop');
    }
}
