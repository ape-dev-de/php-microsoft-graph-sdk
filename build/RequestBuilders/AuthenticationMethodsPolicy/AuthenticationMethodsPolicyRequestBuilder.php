<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationMethodsPolicy;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsPolicy;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationMethodsPolicy\AuthenticationMethodConfigurationsRequestBuilder;

/**
 * Request builder for /authenticationMethodsPolicy
 */
class AuthenticationMethodsPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationMethodsPolicy
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationMethodsPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationMethodsPolicy|null
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
     * Deserialize response to AuthenticationMethodsPolicy|null
     */
    private function deserializeGet(string $body): AuthenticationMethodsPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethodsPolicy($data);
    }
    /**
     * Update authenticationMethodsPolicy
     * @param AuthenticationMethodsPolicy $body Request body
     * @return AuthenticationMethodsPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationMethodsPolicy $body): AuthenticationMethodsPolicy|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationMethodsPolicy|null
     */
    private function deserializePatch(string $body): AuthenticationMethodsPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethodsPolicy($data);
    }
    /**
     * Navigate to authenticationMethodConfigurations
     *
     * @return AuthenticationMethodConfigurationsRequestBuilder
     */
    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder
    {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->client, $this->requestUrl . '/authenticationMethodConfigurations');
    }
}
