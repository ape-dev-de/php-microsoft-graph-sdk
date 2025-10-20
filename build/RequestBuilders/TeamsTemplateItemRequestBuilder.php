<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsTemplate;

/**
 * Request builder for individual TeamsTemplate item
 */
class TeamsTemplateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TeamsTemplate item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TeamsTemplate
     */
    public function get(?array $queryParameters = null): TeamsTemplate
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TeamsTemplate::class);
    }

    /**
     * Update TeamsTemplate item
     *
     * @param TeamsTemplate $item The item with updated properties
     * @return TeamsTemplate
     */
    public function patch(TeamsTemplate $item): TeamsTemplate
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamsTemplate::class);
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
