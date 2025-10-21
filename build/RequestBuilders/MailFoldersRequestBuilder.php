<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolderCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\MailFolderQueryOptions;

/**
 * Request builder for MailFolder
 */
class MailFoldersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new MailFolderQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param MailFolderQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return MailFolderCollectionResponse
     */
    public function get(?MailFolderQueryOptions $options = null, ?array $queryParameters = null): MailFolderCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, MailFolderCollectionResponse::class);
    }

    /**
     * Create a new MailFolder
     *
     * @param MailFolder $item The item to create
     * @return MailFolder
     */
    public function post(MailFolder $item): MailFolder
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, MailFolder::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return MailFolderItemRequestBuilder
     */
    public function byId(string $id): MailFolderItemRequestBuilder
    {
        return new MailFolderItemRequestBuilder($this->client, $this->buildPath($id));
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
