<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartAxisTitle;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartAxisTitleQueryOptions;

/**
 * Request builder for WorkbookChartAxisTitle
 */
class TitleRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartAxisTitleQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartAxisTitle
     */
    public function get(?WorkbookChartAxisTitleQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartAxisTitle
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartAxisTitle::class);
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
