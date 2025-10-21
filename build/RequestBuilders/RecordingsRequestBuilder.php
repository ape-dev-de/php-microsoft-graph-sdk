<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecording;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecordingCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CallRecordingQueryOptions;

/**
 * Request builder for CallRecording
 */
class RecordingsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CallRecordingQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CallRecordingQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CallRecordingCollectionResponse
     */
    public function get(?CallRecordingQueryOptions $options = null, ?array $queryParameters = null): CallRecordingCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CallRecordingCollectionResponse::class);
    }

    /**
     * Create a new CallRecording
     *
     * @param CallRecording $item The item to create
     * @return CallRecording
     */
    public function post(CallRecording $item): CallRecording
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CallRecording::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CallRecordingItemRequestBuilder
     */
    public function byId(string $id): CallRecordingItemRequestBuilder
    {
        return new CallRecordingItemRequestBuilder($this->client, $this->buildPath($id));
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
