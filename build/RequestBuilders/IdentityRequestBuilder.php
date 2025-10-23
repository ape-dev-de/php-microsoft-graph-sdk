<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityContainer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ApiConnectorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationEventListenersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AuthenticationEventsFlowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\B2xUserFlowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CustomAuthenticationExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProvidersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserFlowAttributesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ConditionalAccessRequestBuilder;

/**
 * Request builder for identity
 */
class IdentityRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get identity
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityContainer
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityContainer
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
        return new IdentityContainer($data);
    }
    /**
     * Update identity
     * @param IdentityContainer $body Request body
     * @return IdentityContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityContainer $body): IdentityContainer
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityContainer
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
        return new IdentityContainer($data);
    }
    /**
     * Navigate to apiConnectors
     *
     * @return ApiConnectorsRequestBuilder
     */
    public function apiConnectors(): ApiConnectorsRequestBuilder
    {
        return new ApiConnectorsRequestBuilder($this->client, $this->requestUrl . '/apiConnectors');
    }
    /**
     * Navigate to authenticationEventListeners
     *
     * @return AuthenticationEventListenersRequestBuilder
     */
    public function authenticationEventListeners(): AuthenticationEventListenersRequestBuilder
    {
        return new AuthenticationEventListenersRequestBuilder($this->client, $this->requestUrl . '/authenticationEventListeners');
    }
    /**
     * Navigate to authenticationEventsFlows
     *
     * @return AuthenticationEventsFlowsRequestBuilder
     */
    public function authenticationEventsFlows(): AuthenticationEventsFlowsRequestBuilder
    {
        return new AuthenticationEventsFlowsRequestBuilder($this->client, $this->requestUrl . '/authenticationEventsFlows');
    }
    /**
     * Navigate to b2xUserFlows
     *
     * @return B2xUserFlowsRequestBuilder
     */
    public function b2xUserFlows(): B2xUserFlowsRequestBuilder
    {
        return new B2xUserFlowsRequestBuilder($this->client, $this->requestUrl . '/b2xUserFlows');
    }
    /**
     * Navigate to customAuthenticationExtensions
     *
     * @return CustomAuthenticationExtensionsRequestBuilder
     */
    public function customAuthenticationExtensions(): CustomAuthenticationExtensionsRequestBuilder
    {
        return new CustomAuthenticationExtensionsRequestBuilder($this->client, $this->requestUrl . '/customAuthenticationExtensions');
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
     * Navigate to userFlowAttributes
     *
     * @return UserFlowAttributesRequestBuilder
     */
    public function userFlowAttributes(): UserFlowAttributesRequestBuilder
    {
        return new UserFlowAttributesRequestBuilder($this->client, $this->requestUrl . '/userFlowAttributes');
    }
    /**
     * Navigate to conditionalAccess
     *
     * @return ConditionalAccessRequestBuilder
     */
    public function conditionalAccess(): ConditionalAccessRequestBuilder
    {
        return new ConditionalAccessRequestBuilder($this->client, $this->requestUrl . '/conditionalAccess');
    }
}
