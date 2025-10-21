<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\MailFolder;

/**
 * Request builder for individual MailFolder item
 */
class MailFolderItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get MailFolder item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return MailFolder
     */
    public function get(?array $queryParameters = null): MailFolder
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, MailFolder::class);
    }

    /**
     * Update MailFolder item
     *
     * @param MailFolder $item The item with updated properties
     * @return MailFolder
     */
    public function patch(MailFolder $item): MailFolder
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, MailFolder::class);
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
