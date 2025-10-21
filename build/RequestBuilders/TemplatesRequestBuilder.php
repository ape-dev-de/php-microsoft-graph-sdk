<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationTemplate;
use ApeDevDe\MicrosoftGraphSdk\Models\SynchronizationTemplateCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SynchronizationTemplateQueryOptions;

/**
 * Request builder for SynchronizationTemplate
 */
class TemplatesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SynchronizationTemplateQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SynchronizationTemplateQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SynchronizationTemplateCollectionResponse
     */
    public function get(?SynchronizationTemplateQueryOptions $options = null, ?array $queryParameters = null): SynchronizationTemplateCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SynchronizationTemplateCollectionResponse::class);
    }

    /**
     * Create a new SynchronizationTemplate
     *
     * @param SynchronizationTemplate $item The item to create
     * @return SynchronizationTemplate
     */
    public function post(SynchronizationTemplate $item): SynchronizationTemplate
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SynchronizationTemplate::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SynchronizationTemplateItemRequestBuilder
     */
    public function byId(string $id): SynchronizationTemplateItemRequestBuilder
    {
        return new SynchronizationTemplateItemRequestBuilder($this->client, $this->buildPath($id));
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
