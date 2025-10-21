<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ContactFolder;
use ApeDevDe\MicrosoftGraphSdk\Models\ContactFolderCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ContactFolderQueryOptions;

/**
 * Request builder for ContactFolder
 */
class ChildFoldersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ContactFolderQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ContactFolderQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ContactFolderCollectionResponse
     */
    public function get(?ContactFolderQueryOptions $options = null, ?array $queryParameters = null): ContactFolderCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ContactFolderCollectionResponse::class);
    }

    /**
     * Create a new ContactFolder
     *
     * @param ContactFolder $item The item to create
     * @return ContactFolder
     */
    public function post(ContactFolder $item): ContactFolder
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ContactFolder::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ContactFolderItemRequestBuilder
     */
    public function byId(string $id): ContactFolderItemRequestBuilder
    {
        return new ContactFolderItemRequestBuilder($this->client, $this->buildPath($id));
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
