<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxisFormat;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartAxisFormatQueryOptions;

/**
 * Request builder for WorkbookChartAxisFormat
 */
class FormatRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartAxisFormatQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartAxisFormat
     */
    public function get(?WorkbookChartAxisFormatQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartAxisFormat
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartAxisFormat::class);
    }

    /**
     * Create a new WorkbookChartAxisFormat
     *
     * @param WorkbookChartAxisFormat $item The item to create
     * @return WorkbookChartAxisFormat
     */
    public function post(WorkbookChartAxisFormat $item): WorkbookChartAxisFormat
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartAxisFormat::class);
    }
    /**
     * Get font request builder
     *
     * @return FontRequestBuilder
     */
    public function font(): FontRequestBuilder
    {
        return new FontRequestBuilder($this->client, $this->buildPath('font'));
    }

    /**
     * Get line request builder
     *
     * @return LineRequestBuilder
     */
    public function line(): LineRequestBuilder
    {
        return new LineRequestBuilder($this->client, $this->buildPath('line'));
    }

}
