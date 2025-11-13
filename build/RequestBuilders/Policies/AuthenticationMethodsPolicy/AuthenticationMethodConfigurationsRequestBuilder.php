<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationMethodsPolicy;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodConfigurationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\AuthenticationMethodConfiguration;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Policies\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\CountRequestBuilder;

/**
 * Request builder for /policies/authenticationMethodsPolicy/authenticationMethodConfigurations
 */
class AuthenticationMethodConfigurationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get authenticationMethodConfigurations from policies
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return AuthenticationMethodConfigurationCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): AuthenticationMethodConfigurationCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AuthenticationMethodConfigurationCollectionResponse|null
     */
    private function deserializeGet(string $body): AuthenticationMethodConfigurationCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new AuthenticationMethodConfiguration($item);
        }
        $collection = new AuthenticationMethodConfigurationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to authenticationMethodConfigurations for policies
     * @param AuthenticationMethodConfiguration $body Request body
     * @return AuthenticationMethodConfiguration|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(AuthenticationMethodConfiguration $body): AuthenticationMethodConfiguration|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to AuthenticationMethodConfiguration|null
     */
    private function deserializePost(string $body): AuthenticationMethodConfiguration|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AuthenticationMethodConfiguration($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $authenticationMethodConfigurationId The item ID
     * @return AuthenticationMethodConfigurationRequestBuilder
     */
    public function byId(string $authenticationMethodConfigurationId): AuthenticationMethodConfigurationRequestBuilder
    {
        return new AuthenticationMethodConfigurationRequestBuilder($this->client, $this->requestUrl . '/' . $authenticationMethodConfigurationId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
