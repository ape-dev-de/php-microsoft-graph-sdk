<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsApp;

/**
 * Request builder for individual TeamsApp item
 */
class TeamsAppItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TeamsApp item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TeamsApp
     */
    public function get(?array $queryParameters = null): TeamsApp
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TeamsApp::class);
    }

    /**
     * Update TeamsApp item
     *
     * @param TeamsApp $item The item with updated properties
     * @return TeamsApp
     */
    public function patch(TeamsApp $item): TeamsApp
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamsApp::class);
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
