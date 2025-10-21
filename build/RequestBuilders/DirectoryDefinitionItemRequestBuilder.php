<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryDefinition;

/**
 * Request builder for individual DirectoryDefinition item
 */
class DirectoryDefinitionItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryDefinition item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryDefinition
     */
    public function get(?array $queryParameters = null): DirectoryDefinition
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryDefinition::class);
    }

    /**
     * Update DirectoryDefinition item
     *
     * @param DirectoryDefinition $item The item with updated properties
     * @return DirectoryDefinition
     */
    public function patch(DirectoryDefinition $item): DirectoryDefinition
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryDefinition::class);
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
