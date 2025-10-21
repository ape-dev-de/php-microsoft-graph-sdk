<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookChartFont;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookChartFontQueryOptions;

/**
 * Request builder for WorkbookChartFont
 */
class FontRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookChartFontQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookChartFont
     */
    public function get(?WorkbookChartFontQueryOptions $options = null, ?array $queryParameters = null): WorkbookChartFont
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookChartFont::class);
    }

}
