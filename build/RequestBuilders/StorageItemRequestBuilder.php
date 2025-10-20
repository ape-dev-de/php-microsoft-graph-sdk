<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Storage;

/**
 * Request builder for individual Storage item
 */
class StorageItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Storage item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Storage
     */
    public function get(?array $queryParameters = null): Storage
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Storage::class);
    }

    /**
     * Update Storage item
     *
     * @param Storage $item The item with updated properties
     * @return Storage
     */
    public function patch(Storage $item): Storage
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Storage::class);
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
