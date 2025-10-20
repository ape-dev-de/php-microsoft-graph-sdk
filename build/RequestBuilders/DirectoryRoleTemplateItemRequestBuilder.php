<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRoleTemplate;

/**
 * Request builder for individual DirectoryRoleTemplate item
 */
class DirectoryRoleTemplateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryRoleTemplate item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryRoleTemplate
     */
    public function get(?array $queryParameters = null): DirectoryRoleTemplate
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryRoleTemplate::class);
    }

    /**
     * Update DirectoryRoleTemplate item
     *
     * @param DirectoryRoleTemplate $item The item with updated properties
     * @return DirectoryRoleTemplate
     */
    public function patch(DirectoryRoleTemplate $item): DirectoryRoleTemplate
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryRoleTemplate::class);
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
