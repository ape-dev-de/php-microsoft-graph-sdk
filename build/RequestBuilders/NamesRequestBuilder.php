<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookNamedItem;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookNamedItemCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookNamedItemQueryOptions;

/**
 * Request builder for WorkbookNamedItem
 */
class NamesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WorkbookNamedItemQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WorkbookNamedItemQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookNamedItemCollectionResponse
     */
    public function get(?WorkbookNamedItemQueryOptions $options = null, ?array $queryParameters = null): WorkbookNamedItemCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookNamedItemCollectionResponse::class);
    }

    /**
     * Create a new WorkbookNamedItem
     *
     * @param WorkbookNamedItem $item The item to create
     * @return WorkbookNamedItem
     */
    public function post(WorkbookNamedItem $item): WorkbookNamedItem
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookNamedItem::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WorkbookNamedItemItemRequestBuilder
     */
    public function byId(string $id): WorkbookNamedItemItemRequestBuilder
    {
        return new WorkbookNamedItemItemRequestBuilder($this->client, $this->buildPath($id));
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
     * Get add request builder
     *
     * @return AddRequestBuilder
     */
    public function add(): AddRequestBuilder
    {
        return new AddRequestBuilder($this->client, $this->buildPath('add'));
    }

    /**
     * Get addFormulaLocal request builder
     *
     * @return AddFormulaLocalRequestBuilder
     */
    public function addFormulaLocal(): AddFormulaLocalRequestBuilder
    {
        return new AddFormulaLocalRequestBuilder($this->client, $this->buildPath('addFormulaLocal'));
    }

}
