<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Report;

/**
 * Request builder for individual Report item
 */
class ReportItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Report item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Report
     */
    public function get(?array $queryParameters = null): Report
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Report::class);
    }

    /**
     * Update Report item
     *
     * @param Report $item The item with updated properties
     * @return Report
     */
    public function patch(Report $item): Report
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Report::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

}
