<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;

/**
 * Request builder for individual DirectoryObject item
 */
class DirectoryObjectItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryObject item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryObject
     */
    public function get(?array $queryParameters = null): DirectoryObject
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryObject::class);
    }

    /**
     * Update DirectoryObject item
     *
     * @param DirectoryObject $item The item with updated properties
     * @return DirectoryObject
     */
    public function patch(DirectoryObject $item): DirectoryObject
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryObject::class);
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
