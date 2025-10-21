<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Directory;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryQueryOptions;

/**
 * Request builder for Directory
 */
class DirectoryRequestBuilder extends BaseRequestBuilder
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
     * @param DirectoryQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Directory
     */
    public function get(?DirectoryQueryOptions $options = null, ?array $queryParameters = null): Directory
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Directory::class);
    }

    /**
     * Create a new Directory
     *
     * @param Directory $item The item to create
     * @return Directory
     */
    public function post(Directory $item): Directory
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Directory::class);
    }

}
