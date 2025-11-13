<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\NamedLocationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\NamedLocation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\NamedLocations\NamedLocationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Identity\ConditionalAccess\NamedLocations\CountRequestBuilder;

/**
 * Request builder for /identity/conditionalAccess/namedLocations
 */
class NamedLocationsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List namedLocations
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return NamedLocationCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): NamedLocationCollectionResponse|null
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
     * Deserialize response to NamedLocationCollectionResponse|null
     */
    private function deserializeGet(string $body): NamedLocationCollectionResponse|null    {
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
            $items[] = new NamedLocation($item);
        }
        $collection = new NamedLocationCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create namedLocation
     * @param NamedLocation $body Request body
     * @return NamedLocation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(NamedLocation $body): NamedLocation|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to NamedLocation|null
     */
    private function deserializePost(string $body): NamedLocation|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new NamedLocation($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $namedLocationId The item ID
     * @return NamedLocationRequestBuilder
     */
    public function byId(string $namedLocationId): NamedLocationRequestBuilder
    {
        return new NamedLocationRequestBuilder($this->client, $this->requestUrl . '/' . $namedLocationId);
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
