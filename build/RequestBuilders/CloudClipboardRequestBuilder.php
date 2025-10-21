<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudClipboardRoot;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\CloudClipboardRootQueryOptions;

/**
 * Request builder for CloudClipboardRoot
 */
class CloudClipboardRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
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
     * @param CloudClipboardRootQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return CloudClipboardRoot
     */
    public function get(?CloudClipboardRootQueryOptions $options = null, ?array $queryParameters = null): CloudClipboardRoot
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, CloudClipboardRoot::class);
    }

    /**
     * Create a new CloudClipboardRoot
     *
     * @param CloudClipboardRoot $item The item to create
     * @return CloudClipboardRoot
     */
    public function post(CloudClipboardRoot $item): CloudClipboardRoot
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, CloudClipboardRoot::class);
    }
    /**
     * Get items request builder
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->buildPath('items'));
    }

}
