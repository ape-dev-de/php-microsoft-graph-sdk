<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartFill;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartFillQueryOptions;

/**
 * Request builder for WorkbookChartFill
 */
class FillRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartFillQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartFill
     */
    public function get(?WorkbookChartFillQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartFill
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartFill::class);
    }

    /**
     * Create a new WorkbookChartFill
     *
     * @param WorkbookChartFill $item The item to create
     * @return WorkbookChartFill
     */
    public function post(WorkbookChartFill $item): WorkbookChartFill
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookChartFill::class);
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
     * Get setSolidColor request builder
     *
     * @return SetSolidColorRequestBuilder
     */
    public function setSolidColor(): SetSolidColorRequestBuilder
    {
        return new SetSolidColorRequestBuilder($this->client, $this->buildPath('setSolidColor'));
    }

}
