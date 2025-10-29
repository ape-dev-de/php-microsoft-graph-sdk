<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\B2xIdentityUserFlow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\ApiConnectorConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\IdentityProvidersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\LanguagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserAttributeAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\UserFlowIdentityProvidersRequestBuilder;

/**
 * Request builder for /identity/b2xUserFlows/{b2xIdentityUserFlow-id}
 */
class B2xIdentityUserFlowRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get b2xIdentityUserFlow
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return B2xIdentityUserFlow
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): B2xIdentityUserFlow
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
     * Deserialize response to B2xIdentityUserFlow
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
        return new B2xIdentityUserFlow($data);
    }
    /**
     * Update the navigation property b2xUserFlows in identity
     * @param B2xIdentityUserFlow $body Request body
     * @return B2xIdentityUserFlow
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(B2xIdentityUserFlow $body): B2xIdentityUserFlow
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to B2xIdentityUserFlow
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
        return new B2xIdentityUserFlow($data);
    }
    /**
     * Delete b2xIdentityUserFlow
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
     * Navigate to apiConnectorConfiguration
     *
     * @return ApiConnectorConfigurationRequestBuilder
     */
    public function apiConnectorConfiguration(): ApiConnectorConfigurationRequestBuilder
    {
        return new ApiConnectorConfigurationRequestBuilder($this->client, $this->requestUrl . '/apiConnectorConfiguration');
    }
    /**
     * Navigate to identityProviders
     *
     * @return IdentityProvidersRequestBuilder
     */
    public function identityProviders(): IdentityProvidersRequestBuilder
    {
        return new IdentityProvidersRequestBuilder($this->client, $this->requestUrl . '/identityProviders');
    }
    /**
     * Navigate to languages
     *
     * @return LanguagesRequestBuilder
     */
    public function languages(): LanguagesRequestBuilder
    {
        return new LanguagesRequestBuilder($this->client, $this->requestUrl . '/languages');
    }
    /**
     * Navigate to userAttributeAssignments
     *
     * @return UserAttributeAssignmentsRequestBuilder
     */
    public function userAttributeAssignments(): UserAttributeAssignmentsRequestBuilder
    {
        return new UserAttributeAssignmentsRequestBuilder($this->client, $this->requestUrl . '/userAttributeAssignments');
    }
    /**
     * Navigate to userFlowIdentityProviders
     *
     * @return UserFlowIdentityProvidersRequestBuilder
     */
    public function userFlowIdentityProviders(): UserFlowIdentityProvidersRequestBuilder
    {
        return new UserFlowIdentityProvidersRequestBuilder($this->client, $this->requestUrl . '/userFlowIdentityProviders');
    }
}
