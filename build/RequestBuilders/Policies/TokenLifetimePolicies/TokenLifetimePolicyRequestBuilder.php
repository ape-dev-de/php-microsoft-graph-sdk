<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\TokenLifetimePolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TokenLifetimePolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\TokenLifetimePolicies\AppliesToRequestBuilder;

/**
 * Request builder for /policies/tokenLifetimePolicies/{tokenLifetimePolicy-id}
 */
class TokenLifetimePolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get tokenLifetimePolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TokenLifetimePolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TokenLifetimePolicy|null
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
     * Deserialize response to TokenLifetimePolicy|null
     */
    private function deserializeGet(string $body): TokenLifetimePolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TokenLifetimePolicy($data);
    }
    /**
     * Update tokenlifetimepolicy
     * @param TokenLifetimePolicy $body Request body
     * @return TokenLifetimePolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TokenLifetimePolicy $body): TokenLifetimePolicy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TokenLifetimePolicy|null
     */
    private function deserializePatch(string $body): TokenLifetimePolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TokenLifetimePolicy($data);
    }
    /**
     * Delete tokenLifetimePolicy
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
