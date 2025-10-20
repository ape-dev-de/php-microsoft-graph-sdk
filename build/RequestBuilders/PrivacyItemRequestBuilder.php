<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Privacy;

/**
 * Request builder for individual Privacy item
 */
class PrivacyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Privacy item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Privacy
     */
    public function get(?array $queryParameters = null): Privacy
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Privacy::class);
    }

    /**
     * Update Privacy item
     *
     * @param Privacy $item The item with updated properties
     * @return Privacy
     */
    public function patch(Privacy $item): Privacy
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Privacy::class);
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
