<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\InferenceClassificationOverride;
use ApeDevDe\MicrosoftGraphSdk\Models\InferenceClassificationOverrideCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\InferenceClassificationOverrideQueryOptions;

/**
 * Request builder for InferenceClassificationOverride
 */
class OverridesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new InferenceClassificationOverrideQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param InferenceClassificationOverrideQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return InferenceClassificationOverrideCollectionResponse
     */
    public function get(?InferenceClassificationOverrideQueryOptions $options = null, ?array $queryParameters = null): InferenceClassificationOverrideCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, InferenceClassificationOverrideCollectionResponse::class);
    }

    /**
     * Create a new InferenceClassificationOverride
     *
     * @param InferenceClassificationOverride $item The item to create
     * @return InferenceClassificationOverride
     */
    public function post(InferenceClassificationOverride $item): InferenceClassificationOverride
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, InferenceClassificationOverride::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return InferenceClassificationOverrideItemRequestBuilder
     */
    public function byId(string $id): InferenceClassificationOverrideItemRequestBuilder
    {
        return new InferenceClassificationOverrideItemRequestBuilder($this->client, $this->buildPath($id));
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
