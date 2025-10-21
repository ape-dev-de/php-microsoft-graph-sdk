<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\BrowserSiteList;

/**
 * Request builder for individual BrowserSiteList item
 */
class BrowserSiteListItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get BrowserSiteList item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return BrowserSiteList
     */
    public function get(?array $queryParameters = null): BrowserSiteList
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, BrowserSiteList::class);
    }

    /**
     * Update BrowserSiteList item
     *
     * @param BrowserSiteList $item The item with updated properties
     * @return BrowserSiteList
     */
    public function patch(BrowserSiteList $item): BrowserSiteList
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, BrowserSiteList::class);
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
