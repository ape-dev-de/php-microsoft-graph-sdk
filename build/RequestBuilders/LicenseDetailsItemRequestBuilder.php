<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\LicenseDetails;

/**
 * Request builder for individual LicenseDetails item
 */
class LicenseDetailsItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get LicenseDetails item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return LicenseDetails
     */
    public function get(?array $queryParameters = null): LicenseDetails
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, LicenseDetails::class);
    }

    /**
     * Update LicenseDetails item
     *
     * @param LicenseDetails $item The item with updated properties
     * @return LicenseDetails
     */
    public function patch(LicenseDetails $item): LicenseDetails
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, LicenseDetails::class);
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
