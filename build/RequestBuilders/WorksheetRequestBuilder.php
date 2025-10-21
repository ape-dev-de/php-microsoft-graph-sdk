<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheet;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookWorksheetQueryOptions;

/**
 * Request builder for WorkbookWorksheet
 */
class WorksheetRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookWorksheetQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookWorksheet
     */
    public function get(?WorkbookWorksheetQueryOptions $options = null, ?array $queryParameters = null): WorkbookWorksheet
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookWorksheet::class);
    }

}
