<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\B2xIdentityUserFlowCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\B2xIdentityUserFlow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\B2xIdentityUserFlowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\B2xUserFlows\CountRequestBuilder;

/**
 * Request builder for /identity/b2xUserFlows
 */
class B2xUserFlowsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List b2xIdentityUserFlows
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return B2xIdentityUserFlowCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): B2xIdentityUserFlowCollectionResponse|null
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
     * Deserialize response to B2xIdentityUserFlowCollectionResponse|null
     */
    private function deserializeGet(string $body): B2xIdentityUserFlowCollectionResponse|null    {
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
            $items[] = new B2xIdentityUserFlow($item);
        }
        $collection = new B2xIdentityUserFlowCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create b2xIdentityUserFlow
     * @param B2xIdentityUserFlow $body Request body
     * @return B2xIdentityUserFlow|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(B2xIdentityUserFlow $body): B2xIdentityUserFlow|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to B2xIdentityUserFlow|null
     */
    private function deserializePost(string $body): B2xIdentityUserFlow|null    {
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
     * Get request builder for specific item by ID
     *
     * @param string $b2xIdentityUserFlowId The item ID
     * @return B2xIdentityUserFlowRequestBuilder
     */
    public function byId(string $b2xIdentityUserFlowId): B2xIdentityUserFlowRequestBuilder
    {
        return new B2xIdentityUserFlowRequestBuilder($this->client, $this->requestUrl . '/' . $b2xIdentityUserFlowId);
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
