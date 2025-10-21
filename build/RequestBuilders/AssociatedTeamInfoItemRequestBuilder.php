<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AssociatedTeamInfo;

/**
 * Request builder for individual AssociatedTeamInfo item
 */
class AssociatedTeamInfoItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get AssociatedTeamInfo item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return AssociatedTeamInfo
     */
    public function get(?array $queryParameters = null): AssociatedTeamInfo
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, AssociatedTeamInfo::class);
    }

    /**
     * Update AssociatedTeamInfo item
     *
     * @param AssociatedTeamInfo $item The item with updated properties
     * @return AssociatedTeamInfo
     */
    public function patch(AssociatedTeamInfo $item): AssociatedTeamInfo
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, AssociatedTeamInfo::class);
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
