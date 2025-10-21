<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CallTranscript;
use ApeDevDe\MicrosoftGraphSdk\Models\CallTranscriptCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CallTranscriptQueryOptions;

/**
 * Request builder for CallTranscript
 */
class TranscriptsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new CallTranscriptQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param CallTranscriptQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CallTranscriptCollectionResponse
     */
    public function get(?CallTranscriptQueryOptions $options = null, ?array $queryParameters = null): CallTranscriptCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CallTranscriptCollectionResponse::class);
    }

    /**
     * Create a new CallTranscript
     *
     * @param CallTranscript $item The item to create
     * @return CallTranscript
     */
    public function post(CallTranscript $item): CallTranscript
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CallTranscript::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return CallTranscriptItemRequestBuilder
     */
    public function byId(string $id): CallTranscriptItemRequestBuilder
    {
        return new CallTranscriptItemRequestBuilder($this->client, $this->buildPath($id));
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
