<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\FeatureRolloutPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\FeatureRolloutPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\FeatureRolloutPolicies\AppliesToRequestBuilder;

/**
 * Request builder for /policies/featureRolloutPolicies/{featureRolloutPolicy-id}
 */
class FeatureRolloutPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get featureRolloutPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return FeatureRolloutPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): FeatureRolloutPolicy|null
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
     * Deserialize response to FeatureRolloutPolicy|null
     */
    private function deserializeGet(string $body): FeatureRolloutPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new FeatureRolloutPolicy($data);
    }
    /**
     * Update featurerolloutpolicy
     * @param FeatureRolloutPolicy $body Request body
     * @return FeatureRolloutPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(FeatureRolloutPolicy $body): FeatureRolloutPolicy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to FeatureRolloutPolicy|null
     */
    private function deserializePatch(string $body): FeatureRolloutPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new FeatureRolloutPolicy($data);
    }
    /**
     * Delete featureRolloutPolicy
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
     * Navigate to appliesTo
     *
     * @return AppliesToRequestBuilder
     */
    public function appliesTo(): AppliesToRequestBuilder
    {
        return new AppliesToRequestBuilder($this->client, $this->requestUrl . '/appliesTo');
    }
}
