<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Extension;

/**
 * Request builder for individual Extension item
 */
class ExtensionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Extension item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Extension
     */
    public function get(?array $queryParameters = null): Extension
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Extension::class);
    }

    /**
     * Update Extension item
     *
     * @param Extension $item The item with updated properties
     * @return Extension
     */
    public function patch(Extension $item): Extension
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Extension::class);
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
