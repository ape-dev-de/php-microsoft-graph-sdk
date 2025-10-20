<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Team;

/**
 * Request builder for individual Team item
 */
class TeamItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Team item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Team
     */
    public function get(?array $queryParameters = null): Team
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Team::class);
    }

    /**
     * Update Team item
     *
     * @param Team $item The item with updated properties
     * @return Team
     */
    public function patch(Team $item): Team
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Team::class);
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
