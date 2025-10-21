<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\FileStorageContainer;

/**
 * Request builder for individual FileStorageContainer item
 */
class FileStorageContainerItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get FileStorageContainer item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return FileStorageContainer
     */
    public function get(?array $queryParameters = null): FileStorageContainer
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, FileStorageContainer::class);
    }

    /**
     * Update FileStorageContainer item
     *
     * @param FileStorageContainer $item The item with updated properties
     * @return FileStorageContainer
     */
    public function patch(FileStorageContainer $item): FileStorageContainer
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, FileStorageContainer::class);
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
