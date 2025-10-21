<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ContactFolder;

/**
 * Request builder for individual ContactFolder item
 */
class ContactFolderItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ContactFolder item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ContactFolder
     */
    public function get(?array $queryParameters = null): ContactFolder
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ContactFolder::class);
    }

    /**
     * Update ContactFolder item
     *
     * @param ContactFolder $item The item with updated properties
     * @return ContactFolder
     */
    public function patch(ContactFolder $item): ContactFolder
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ContactFolder::class);
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
