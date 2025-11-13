<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\Methods;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethod;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Authentication\Methods\ResetPasswordRequestBuilder;

/**
 * Request builder for /me/authentication/methods/{authenticationMethod-id}
 */
class AuthenticationMethodRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationMethod
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationMethod|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationMethod|null
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
     * Deserialize response to AuthenticationMethod|null
     */
    private function deserializeGet(string $body): AuthenticationMethod|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethod($data);
    }
    /**
     * Update the navigation property methods in me
     * @param AuthenticationMethod $body Request body
     * @return AuthenticationMethod|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationMethod $body): AuthenticationMethod|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationMethod|null
     */
    private function deserializePatch(string $body): AuthenticationMethod|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethod($data);
    }
    /**
     * Navigate to resetPassword
     *
     * @return ResetPasswordRequestBuilder
     */
    public function resetPassword(): ResetPasswordRequestBuilder
    {
        return new ResetPasswordRequestBuilder($this->client, $this->requestUrl . '/resetPassword');
    }
}
