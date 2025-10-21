<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OrgContact;
use ApeDevDe\MicrosoftGraphSdk\Models\OrgContactCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\OrgContactQueryOptions;

/**
 * Request builder for OrgContact
 */
class ContactsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new OrgContactQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param OrgContactQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return OrgContactCollectionResponse
     */
    public function get(?OrgContactQueryOptions $options = null, ?array $queryParameters = null): OrgContactCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, OrgContactCollectionResponse::class);
    }

    /**
     * Create a new OrgContact
     *
     * @param OrgContact $item The item to create
     * @return OrgContact
     */
    public function post(OrgContact $item): OrgContact
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, OrgContact::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return OrgContactItemRequestBuilder
     */
    public function byId(string $id): OrgContactItemRequestBuilder
    {
        return new OrgContactItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
