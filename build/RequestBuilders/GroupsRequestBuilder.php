<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalGroup;
use ApeDevDe\MicrosoftGraphSdk\Models\ExternalConnectorsExternalGroupCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExternalConnectorsExternalGroupQueryOptions;

/**
 * Request builder for ExternalConnectorsExternalGroup
 */
class GroupsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExternalConnectorsExternalGroupQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExternalConnectorsExternalGroupQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExternalConnectorsExternalGroupCollectionResponse
     */
    public function get(?ExternalConnectorsExternalGroupQueryOptions $options = null, ?array $queryParameters = null): ExternalConnectorsExternalGroupCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExternalConnectorsExternalGroupCollectionResponse::class);
    }

    /**
     * Create a new ExternalConnectorsExternalGroup
     *
     * @param ExternalConnectorsExternalGroup $item The item to create
     * @return ExternalConnectorsExternalGroup
     */
    public function post(ExternalConnectorsExternalGroup $item): ExternalConnectorsExternalGroup
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExternalConnectorsExternalGroup::class);
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
