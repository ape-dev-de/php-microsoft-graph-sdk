<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupLifecyclePolicy;

/**
 * Request builder for individual GroupLifecyclePolicy item
 */
class GroupLifecyclePolicyItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get GroupLifecyclePolicy item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return GroupLifecyclePolicy
     */
    public function get(?array $queryParameters = null): GroupLifecyclePolicy
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, GroupLifecyclePolicy::class);
    }

    /**
     * Update GroupLifecyclePolicy item
     *
     * @param GroupLifecyclePolicy $item The item with updated properties
     * @return GroupLifecyclePolicy
     */
    public function patch(GroupLifecyclePolicy $item): GroupLifecyclePolicy
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupLifecyclePolicy::class);
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

    /**
     * Get addGroup request builder
     *
     * @return AddGroupRequestBuilder
     */
    public function addGroup(): AddGroupRequestBuilder
    {
        return new AddGroupRequestBuilder($this->client, $this->buildPath('addGroup'));
    }

    /**
     * Get removeGroup request builder
     *
     * @return RemoveGroupRequestBuilder
     */
    public function removeGroup(): RemoveGroupRequestBuilder
    {
        return new RemoveGroupRequestBuilder($this->client, $this->buildPath('removeGroup'));
    }

}
