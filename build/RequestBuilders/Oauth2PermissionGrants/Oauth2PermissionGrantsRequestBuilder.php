<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OAuth2PermissionGrantCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\OAuth2PermissionGrant;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrants\Oauth2PermissionGrants\OAuth2PermissionGrantRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrants\Oauth2PermissionGrants\CountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrants\Oauth2PermissionGrants\DeltaRequestBuilder;

/**
 * Request builder for /oauth2PermissionGrants
 */
class Oauth2PermissionGrantsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List oauth2PermissionGrants (delegated permission grants)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return OAuth2PermissionGrantCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): OAuth2PermissionGrantCollectionResponse
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
     * Deserialize response to OAuth2PermissionGrantCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new OAuth2PermissionGrant($item);
        }
        $collection = new OAuth2PermissionGrantCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create oAuth2PermissionGrant (a delegated permission grant)
     * @param OAuth2PermissionGrant $body Request body
     * @return OAuth2PermissionGrant
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(OAuth2PermissionGrant $body): OAuth2PermissionGrant
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to OAuth2PermissionGrant
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new OAuth2PermissionGrant($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $oAuth2PermissionGrantId The item ID
     * @return OAuth2PermissionGrantRequestBuilder
     */
    public function byId(string $oAuth2PermissionGrantId): OAuth2PermissionGrantRequestBuilder
    {
        return new OAuth2PermissionGrantRequestBuilder($this->client, $this->requestUrl . '/' . $oAuth2PermissionGrantId);
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
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
}
