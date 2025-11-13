<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationEventsFlow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\ConditionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}
 */
class AuthenticationEventsFlowRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationEventsFlow
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AuthenticationEventsFlow|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AuthenticationEventsFlow|null
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
     * Deserialize response to AuthenticationEventsFlow|null
     */
    private function deserializeGet(string $body): AuthenticationEventsFlow|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationEventsFlow($data);
    }
    /**
     * Update authenticationEventsFlow
     * @param AuthenticationEventsFlow $body Request body
     * @return AuthenticationEventsFlow|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AuthenticationEventsFlow $body): AuthenticationEventsFlow|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AuthenticationEventsFlow|null
     */
    private function deserializePatch(string $body): AuthenticationEventsFlow|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationEventsFlow($data);
    }
    /**
     * Delete authenticationEventsFlow
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
     * Navigate to conditions
     *
     * @return ConditionsRequestBuilder
     */
    public function conditions(): ConditionsRequestBuilder
    {
        return new ConditionsRequestBuilder($this->client, $this->requestUrl . '/conditions');
    }
    /**
     * Navigate to graph.externalUsersSelfServiceSignUpEventsFlow
     *
     * @return GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder
     */
    public function graphExternalUsersSelfServiceSignUpEventsFlow(): GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder
    {
        return new GraphExternalUsersSelfServiceSignUpEventsFlowRequestBuilder($this->client, $this->requestUrl . '/graph.externalUsersSelfServiceSignUpEventsFlow');
    }
}
