<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AndroidManagedAppProtection;

/**
 * Request builder for individual AndroidManagedAppProtection item
 */
class AndroidManagedAppProtectionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AndroidManagedAppProtection item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AndroidManagedAppProtection
     */
    public function get(?array $queryParameters = null): AndroidManagedAppProtection
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AndroidManagedAppProtection::class);
    }

    /**
     * Update AndroidManagedAppProtection item
     *
     * @param AndroidManagedAppProtection $item The item with updated properties
     * @return AndroidManagedAppProtection
     */
    public function patch(AndroidManagedAppProtection $item): AndroidManagedAppProtection
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AndroidManagedAppProtection::class);
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
