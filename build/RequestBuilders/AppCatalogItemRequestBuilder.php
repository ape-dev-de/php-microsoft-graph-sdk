<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AppCatalog;

/**
 * Request builder for individual AppCatalog item
 */
class AppCatalogItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AppCatalog item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AppCatalog
     */
    public function get(?array $queryParameters = null): AppCatalog
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AppCatalog::class);
    }

    /**
     * Update AppCatalog item
     *
     * @param AppCatalog $item The item with updated properties
     * @return AppCatalog
     */
    public function patch(AppCatalog $item): AppCatalog
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AppCatalog::class);
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
