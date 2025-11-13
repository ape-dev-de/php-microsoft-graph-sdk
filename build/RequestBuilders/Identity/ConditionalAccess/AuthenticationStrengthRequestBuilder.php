<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationStrengthRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength\AuthenticationMethodModesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\AuthenticationStrength\PoliciesRequestBuilder;

/**
 * Request builder for /identity/conditionalAccess/authenticationStrength
 */
class AuthenticationStrengthRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationStrength from identity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationStrengthRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationStrengthRoot|null
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
     * Deserialize response to AuthenticationStrengthRoot|null
     */
    private function deserializeGet(string $body): AuthenticationStrengthRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationStrengthRoot($data);
    }
    /**
     * Update the navigation property authenticationStrength in identity
     * @param AuthenticationStrengthRoot $body Request body
     * @return AuthenticationStrengthRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationStrengthRoot $body): AuthenticationStrengthRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationStrengthRoot|null
     */
    private function deserializePatch(string $body): AuthenticationStrengthRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationStrengthRoot($data);
    }
    /**
     * Delete navigation property authenticationStrength for identity
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
     * Navigate to authenticationMethodModes
     *
     * @return AuthenticationMethodModesRequestBuilder
     */
    public function authenticationMethodModes(): AuthenticationMethodModesRequestBuilder
    {
        return new AuthenticationMethodModesRequestBuilder($this->client, $this->requestUrl . '/authenticationMethodModes');
    }
    /**
     * Navigate to policies
     *
     * @return PoliciesRequestBuilder
     */
    public function policies(): PoliciesRequestBuilder
    {
        return new PoliciesRequestBuilder($this->client, $this->requestUrl . '/policies');
    }
}
