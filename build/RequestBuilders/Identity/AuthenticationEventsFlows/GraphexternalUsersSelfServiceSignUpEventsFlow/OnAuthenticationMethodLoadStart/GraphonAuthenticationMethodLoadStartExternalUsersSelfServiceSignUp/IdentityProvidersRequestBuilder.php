<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphonAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderBaseCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProviderBase;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphonAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp\IdentityProviders\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphonAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp\IdentityProviders\RefRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\AuthenticationEventsFlows\GraphexternalUsersSelfServiceSignUpEventsFlow\OnAuthenticationMethodLoadStart\GraphonAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp\IdentityProviders\IdentityProviderBaseRequestBuilder;

/**
 * Request builder for /identity/authenticationEventsFlows/{authenticationEventsFlow-id}/graph.externalUsersSelfServiceSignUpEventsFlow/onAuthenticationMethodLoadStart/graph.onAuthenticationMethodLoadStartExternalUsersSelfServiceSignUp/identityProviders
 */
class IdentityProvidersRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List identityProviders (in a user flow)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IdentityProviderBaseCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IdentityProviderBaseCollectionResponse|null
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
     * Deserialize response to IdentityProviderBaseCollectionResponse|null
     */
    private function deserializeGet(string $body): IdentityProviderBaseCollectionResponse|null    {
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
            $items[] = new IdentityProviderBase($item);
        }
        $collection = new IdentityProviderBaseCollectionResponse($data);
        $collection->value = $items;
        return $collection;
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
    /**
     * Navigate to $ref
     *
     * @return RefRequestBuilder
     */
    public function ref(): RefRequestBuilder
    {
        return new RefRequestBuilder($this->client, $this->requestUrl . '/$ref');
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $identityProviderBaseId The item ID
     * @return IdentityProviderBaseRequestBuilder
     */
    public function byId(string $identityProviderBaseId): IdentityProviderBaseRequestBuilder
    {
        return new IdentityProviderBaseRequestBuilder($this->client, $this->requestUrl . '/' . $identityProviderBaseId);
    }
}
