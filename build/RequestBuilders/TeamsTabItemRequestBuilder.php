<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsTab;

/**
 * Request builder for individual TeamsTab item
 */
class TeamsTabItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TeamsTab item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TeamsTab
     */
    public function get(?array $queryParameters = null): TeamsTab
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TeamsTab::class);
    }

    /**
     * Update TeamsTab item
     *
     * @param TeamsTab $item The item with updated properties
     * @return TeamsTab
     */
    public function patch(TeamsTab $item): TeamsTab
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamsTab::class);
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
