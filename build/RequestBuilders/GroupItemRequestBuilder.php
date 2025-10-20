<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;

/**
 * Request builder for individual Group item
 */
class GroupItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Group item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Group
     */
    public function get(?array $queryParameters = null): Group
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Group::class);
    }

    /**
     * Update Group item
     *
     * @param Group $item The item with updated properties
     * @return Group
     */
    public function patch(Group $item): Group
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Group::class);
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
