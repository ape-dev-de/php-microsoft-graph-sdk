<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Storage;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\StorageQueryOptions;

/**
 * Request builder for Storage
 */
class StorageRequestBuilder extends BaseRequestBuilder
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
     * @param StorageQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Storage
     */
    public function get(?StorageQueryOptions $options = null, ?array $queryParameters = null): Storage
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Storage::class);
    }

    /**
     * Create a new Storage
     *
     * @param Storage $item The item to create
     * @return Storage
     */
    public function post(Storage $item): Storage
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Storage::class);
    }

}
