<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartLineFormat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartLineFormatQueryOptions;

/**
 * Request builder for WorkbookChartLineFormat
 */
class LineRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartLineFormatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartLineFormat
     */
    public function get(?WorkbookChartLineFormatQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartLineFormat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartLineFormat::class);
    }

    /**
     * Create a new WorkbookChartLineFormat
     *
     * @param WorkbookChartLineFormat $item The item to create
     * @return WorkbookChartLineFormat
     */
    public function post(WorkbookChartLineFormat $item): WorkbookChartLineFormat
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartLineFormat::class);
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

}
