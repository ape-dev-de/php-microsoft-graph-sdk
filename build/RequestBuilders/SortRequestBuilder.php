<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookTableSort;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookTableSortQueryOptions;

/**
 * Request builder for WorkbookTableSort
 */
class SortRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookTableSortQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookTableSort
     */
    public function get(?WorkbookTableSortQueryOptions $options = null, ?array $queryParameters = null): WorkbookTableSort
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookTableSort::class);
    }

    /**
     * Create a new WorkbookTableSort
     *
     * @param WorkbookTableSort $item The item to create
     * @return WorkbookTableSort
     */
    public function post(WorkbookTableSort $item): WorkbookTableSort
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookTableSort::class);
    }
    /**
     * Get apply request builder
     *
     * @return ApplyRequestBuilder
     */
    public function apply(): ApplyRequestBuilder
    {
        return new ApplyRequestBuilder($this->client, $this->buildPath('apply'));
    }

    /**
     * Get clear request builder
     *
     * @return ClearRequestBuilder
     */
    public function clear(): ClearRequestBuilder
    {
        return new ClearRequestBuilder($this->client, $this->buildPath('clear'));
    }

    /**
     * Get reapply request builder
     *
     * @return ReapplyRequestBuilder
     */
    public function reapply(): ReapplyRequestBuilder
    {
        return new ReapplyRequestBuilder($this->client, $this->buildPath('reapply'));
    }

}
