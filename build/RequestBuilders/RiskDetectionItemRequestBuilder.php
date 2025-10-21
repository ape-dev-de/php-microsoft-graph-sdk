<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\RiskDetection;

/**
 * Request builder for individual RiskDetection item
 */
class RiskDetectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get RiskDetection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return RiskDetection
     */
    public function get(?array $queryParameters = null): RiskDetection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, RiskDetection::class);
    }

    /**
     * Update RiskDetection item
     *
     * @param RiskDetection $item The item with updated properties
     * @return RiskDetection
     */
    public function patch(RiskDetection $item): RiskDetection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, RiskDetection::class);
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
