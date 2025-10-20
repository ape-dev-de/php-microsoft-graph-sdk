<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Directory;

/**
 * Request builder for individual Directory item
 */
class DirectoryItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Directory item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Directory
     */
    public function get(?array $queryParameters = null): Directory
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Directory::class);
    }

    /**
     * Update Directory item
     *
     * @param Directory $item The item with updated properties
     * @return Directory
     */
    public function patch(Directory $item): Directory
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Directory::class);
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
