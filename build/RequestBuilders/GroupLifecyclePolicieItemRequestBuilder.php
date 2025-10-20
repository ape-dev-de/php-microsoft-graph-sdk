<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicie;

/**
 * Request builder for individual GroupLifecyclePolicie item
 */
class GroupLifecyclePolicieItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get GroupLifecyclePolicie item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return GroupLifecyclePolicie
     */
    public function get(?array $queryParameters = null): GroupLifecyclePolicie
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, GroupLifecyclePolicie::class);
    }

    /**
     * Update GroupLifecyclePolicie item
     *
     * @param GroupLifecyclePolicie $item The item with updated properties
     * @return GroupLifecyclePolicie
     */
    public function patch(GroupLifecyclePolicie $item): GroupLifecyclePolicie
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupLifecyclePolicie::class);
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
