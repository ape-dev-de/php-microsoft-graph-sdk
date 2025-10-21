<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceStorageQuotaBreakdown;

/**
 * Request builder for individual ServiceStorageQuotaBreakdown item
 */
class ServiceStorageQuotaBreakdownItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ServiceStorageQuotaBreakdown item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ServiceStorageQuotaBreakdown
     */
    public function get(?array $queryParameters = null): ServiceStorageQuotaBreakdown
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ServiceStorageQuotaBreakdown::class);
    }

    /**
     * Update ServiceStorageQuotaBreakdown item
     *
     * @param ServiceStorageQuotaBreakdown $item The item with updated properties
     * @return ServiceStorageQuotaBreakdown
     */
    public function patch(ServiceStorageQuotaBreakdown $item): ServiceStorageQuotaBreakdown
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ServiceStorageQuotaBreakdown::class);
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
