<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreRelation;
use ApeDevDe\MicrosoftGraphSdk\Models\TermStoreRelationCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TermStoreRelationQueryOptions;

/**
 * Request builder for TermStoreRelation
 */
class RelationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TermStoreRelationQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TermStoreRelationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TermStoreRelationCollectionResponse
     */
    public function get(?TermStoreRelationQueryOptions $options = null, ?array $queryParameters = null): TermStoreRelationCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TermStoreRelationCollectionResponse::class);
    }

    /**
     * Create a new TermStoreRelation
     *
     * @param TermStoreRelation $item The item to create
     * @return TermStoreRelation
     */
    public function post(TermStoreRelation $item): TermStoreRelation
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TermStoreRelation::class);
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
