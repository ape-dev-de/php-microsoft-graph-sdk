<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamworkTag;

/**
 * Request builder for individual TeamworkTag item
 */
class TeamworkTagItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get TeamworkTag item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return TeamworkTag
     */
    public function get(?array $queryParameters = null): TeamworkTag
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, TeamworkTag::class);
    }

    /**
     * Update TeamworkTag item
     *
     * @param TeamworkTag $item The item with updated properties
     * @return TeamworkTag
     */
    public function patch(TeamworkTag $item): TeamworkTag
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, TeamworkTag::class);
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
