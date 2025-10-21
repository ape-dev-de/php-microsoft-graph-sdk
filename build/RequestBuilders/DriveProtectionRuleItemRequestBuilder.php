<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveProtectionRule;

/**
 * Request builder for individual DriveProtectionRule item
 */
class DriveProtectionRuleItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DriveProtectionRule item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DriveProtectionRule
     */
    public function get(?array $queryParameters = null): DriveProtectionRule
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DriveProtectionRule::class);
    }

    /**
     * Update DriveProtectionRule item
     *
     * @param DriveProtectionRule $item The item with updated properties
     * @return DriveProtectionRule
     */
    public function patch(DriveProtectionRule $item): DriveProtectionRule
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DriveProtectionRule::class);
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
