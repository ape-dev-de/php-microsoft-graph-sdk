<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Site;

/**
 * Request builder for individual Site item
 */
class SiteItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Site item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Site
     */
    public function get(?array $queryParameters = null): Site
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Site::class);
    }

    /**
     * Update Site item
     *
     * @param Site $item The item with updated properties
     * @return Site
     */
    public function patch(Site $item): Site
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Site::class);
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
