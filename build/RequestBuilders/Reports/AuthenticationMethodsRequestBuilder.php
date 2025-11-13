<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethods\UsersRegisteredByFeatureRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethods\UsersRegisteredByMethodRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Reports\AuthenticationMethods\UserRegistrationDetailsRequestBuilder;

/**
 * Request builder for /reports/authenticationMethods
 */
class AuthenticationMethodsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationMethods from reports
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationMethodsRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationMethodsRoot|null
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
     * Deserialize response to AuthenticationMethodsRoot|null
     */
    private function deserializeGet(string $body): AuthenticationMethodsRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethodsRoot($data);
    }
    /**
     * Update the navigation property authenticationMethods in reports
     * @param AuthenticationMethodsRoot $body Request body
     * @return AuthenticationMethodsRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationMethodsRoot $body): AuthenticationMethodsRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationMethodsRoot|null
     */
    private function deserializePatch(string $body): AuthenticationMethodsRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethodsRoot($data);
    }
    /**
     * Delete navigation property authenticationMethods for reports
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
     * Navigate to usersRegisteredByFeature()
     *
     * @return UsersRegisteredByFeatureRequestBuilder
     */
    public function usersRegisteredByFeature(): UsersRegisteredByFeatureRequestBuilder
    {
        return new UsersRegisteredByFeatureRequestBuilder($this->client, $this->requestUrl . '/usersRegisteredByFeature()');
    }
    /**
     * Navigate to usersRegisteredByMethod()
     *
     * @return UsersRegisteredByMethodRequestBuilder
     */
    public function usersRegisteredByMethod(): UsersRegisteredByMethodRequestBuilder
    {
        return new UsersRegisteredByMethodRequestBuilder($this->client, $this->requestUrl . '/usersRegisteredByMethod()');
    }
    /**
     * Navigate to userRegistrationDetails
     *
     * @return UserRegistrationDetailsRequestBuilder
     */
    public function userRegistrationDetails(): UserRegistrationDetailsRequestBuilder
    {
        return new UserRegistrationDetailsRequestBuilder($this->client, $this->requestUrl . '/userRegistrationDetails');
    }
}
