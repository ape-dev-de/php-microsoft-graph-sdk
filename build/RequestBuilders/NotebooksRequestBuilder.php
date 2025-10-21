<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Notebook;
use ApeDevDe\MicrosoftGraphSdk\Models\NotebookCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\NotebookQueryOptions;

/**
 * Request builder for Notebook
 */
class NotebooksRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new NotebookQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param NotebookQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return NotebookCollectionResponse
     */
    public function get(?NotebookQueryOptions $options = null, ?array $queryParameters = null): NotebookCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, NotebookCollectionResponse::class);
    }

    /**
     * Create a new Notebook
     *
     * @param Notebook $item The item to create
     * @return Notebook
     */
    public function post(Notebook $item): Notebook
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Notebook::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return NotebookItemRequestBuilder
     */
    public function byId(string $id): NotebookItemRequestBuilder
    {
        return new NotebookItemRequestBuilder($this->client, $this->buildPath($id));
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
    /**
     * Get getNotebookFromWebUrl request builder
     *
     * @return GetNotebookFromWebUrlRequestBuilder
     */
    public function getNotebookFromWebUrl(): GetNotebookFromWebUrlRequestBuilder
    {
        return new GetNotebookFromWebUrlRequestBuilder($this->client, $this->buildPath('getNotebookFromWebUrl'));
    }

}
