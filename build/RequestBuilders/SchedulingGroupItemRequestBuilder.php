<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SchedulingGroup;

/**
 * Request builder for individual SchedulingGroup item
 */
class SchedulingGroupItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get SchedulingGroup item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return SchedulingGroup
     */
    public function get(?array $queryParameters = null): SchedulingGroup
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, SchedulingGroup::class);
    }

    /**
     * Update SchedulingGroup item
     *
     * @param SchedulingGroup $item The item with updated properties
     * @return SchedulingGroup
     */
    public function patch(SchedulingGroup $item): SchedulingGroup
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, SchedulingGroup::class);
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
