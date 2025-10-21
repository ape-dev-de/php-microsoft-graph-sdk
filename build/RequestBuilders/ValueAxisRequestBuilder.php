<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxis;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartAxisQueryOptions;

/**
 * Request builder for WorkbookChartAxis
 */
class ValueAxisRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartAxisQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartAxis
     */
    public function get(?WorkbookChartAxisQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartAxis
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartAxis::class);
    }

    /**
     * Create a new WorkbookChartAxis
     *
     * @param WorkbookChartAxis $item The item to create
     * @return WorkbookChartAxis
     */
    public function post(WorkbookChartAxis $item): WorkbookChartAxis
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartAxis::class);
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

    /**
     * Get majorGridlines request builder
     *
     * @return MajorGridlinesRequestBuilder
     */
    public function majorGridlines(): MajorGridlinesRequestBuilder
    {
        return new MajorGridlinesRequestBuilder($this->client, $this->buildPath('majorGridlines'));
    }

    /**
     * Get minorGridlines request builder
     *
     * @return MinorGridlinesRequestBuilder
     */
    public function minorGridlines(): MinorGridlinesRequestBuilder
    {
        return new MinorGridlinesRequestBuilder($this->client, $this->buildPath('minorGridlines'));
    }

    /**
     * Get title request builder
     *
     * @return TitleRequestBuilder
     */
    public function title(): TitleRequestBuilder
    {
        return new TitleRequestBuilder($this->client, $this->buildPath('title'));
    }

}
