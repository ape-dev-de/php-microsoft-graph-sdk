<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheet;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheetCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookWorksheetQueryOptions;

/**
 * Request builder for WorkbookWorksheet
 */
class WorksheetsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new WorkbookWorksheetQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param WorkbookWorksheetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookWorksheetCollectionResponse
     */
    public function get(?WorkbookWorksheetQueryOptions $options = null, ?array $queryParameters = null): WorkbookWorksheetCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookWorksheetCollectionResponse::class);
    }

    /**
     * Create a new WorkbookWorksheet
     *
     * @param WorkbookWorksheet $item The item to create
     * @return WorkbookWorksheet
     */
    public function post(WorkbookWorksheet $item): WorkbookWorksheet
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookWorksheet::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return WorkbookWorksheetItemRequestBuilder
     */
    public function byId(string $id): WorkbookWorksheetItemRequestBuilder
    {
        return new WorkbookWorksheetItemRequestBuilder($this->client, $this->buildPath($id));
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

}
