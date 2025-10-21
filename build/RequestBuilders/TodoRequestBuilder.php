<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Todo;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TodoQueryOptions;

/**
 * Request builder for Todo
 */
class TodoRequestBuilder extends BaseRequestBuilder
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
     * @param TodoQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Todo
     */
    public function get(?TodoQueryOptions $options = null, ?array $queryParameters = null): Todo
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Todo::class);
    }

    /**
     * Create a new Todo
     *
     * @param Todo $item The item to create
     * @return Todo
     */
    public function post(Todo $item): Todo
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Todo::class);
    }
    /**
     * Get lists request builder
     *
     * @return ListsRequestBuilder
     */
    public function lists(): ListsRequestBuilder
    {
        return new ListsRequestBuilder($this->client, $this->buildPath('lists'));
    }

}
