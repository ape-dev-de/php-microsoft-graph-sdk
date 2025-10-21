<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartGridlines;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartGridlinesQueryOptions;

/**
 * Request builder for WorkbookChartGridlines
 */
class MinorGridlinesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartGridlinesQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartGridlines
     */
    public function get(?WorkbookChartGridlinesQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartGridlines
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartGridlines::class);
    }

    /**
     * Create a new WorkbookChartGridlines
     *
     * @param WorkbookChartGridlines $item The item to create
     * @return WorkbookChartGridlines
     */
    public function post(WorkbookChartGridlines $item): WorkbookChartGridlines
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartGridlines::class);
    }
    /**
     * Get format request builder
     *
     * @return FormatRequestBuilder
     */
    public function format(): FormatRequestBuilder
    {
        return new FormatRequestBuilder($this->client, $this->buildPath('format'));
    }

}
