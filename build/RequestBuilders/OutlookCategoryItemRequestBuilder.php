<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\OutlookCategory;

/**
 * Request builder for individual OutlookCategory item
 */
class OutlookCategoryItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get OutlookCategory item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return OutlookCategory
     */
    public function get(?array $queryParameters = null): OutlookCategory
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, OutlookCategory::class);
    }

    /**
     * Update OutlookCategory item
     *
     * @param OutlookCategory $item The item with updated properties
     * @return OutlookCategory
     */
    public function patch(OutlookCategory $item): OutlookCategory
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, OutlookCategory::class);
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
