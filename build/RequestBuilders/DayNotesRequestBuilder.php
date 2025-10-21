<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DayNote;
use ApeDevDe\MicrosoftGraphSdk\Models\DayNoteCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DayNoteQueryOptions;

/**
 * Request builder for DayNote
 */
class DayNotesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DayNoteQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DayNoteQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DayNoteCollectionResponse
     */
    public function get(?DayNoteQueryOptions $options = null, ?array $queryParameters = null): DayNoteCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DayNoteCollectionResponse::class);
    }

    /**
     * Create a new DayNote
     *
     * @param DayNote $item The item to create
     * @return DayNote
     */
    public function post(DayNote $item): DayNote
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DayNote::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DayNoteItemRequestBuilder
     */
    public function byId(string $id): DayNoteItemRequestBuilder
    {
        return new DayNoteItemRequestBuilder($this->client, $this->buildPath($id));
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
