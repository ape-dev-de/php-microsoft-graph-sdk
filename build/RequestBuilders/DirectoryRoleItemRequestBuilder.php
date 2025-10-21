<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryRole;

/**
 * Request builder for individual DirectoryRole item
 */
class DirectoryRoleItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get DirectoryRole item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return DirectoryRole
     */
    public function get(?array $queryParameters = null): DirectoryRole
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, DirectoryRole::class);
    }

    /**
     * Update DirectoryRole item
     *
     * @param DirectoryRole $item The item with updated properties
     * @return DirectoryRole
     */
    public function patch(DirectoryRole $item): DirectoryRole
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryRole::class);
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
     * Get members request builder
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->buildPath('members'));
    }

    /**
     * Get checkMemberGroups request builder
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->buildPath('checkMemberGroups'));
    }

    /**
     * Get checkMemberObjects request builder
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->buildPath('checkMemberObjects'));
    }

    /**
     * Get getMemberGroups request builder
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->buildPath('getMemberGroups'));
    }

    /**
     * Get getMemberObjects request builder
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->buildPath('getMemberObjects'));
    }

    /**
     * Get restore request builder
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->buildPath('restore'));
    }

    /**
     * Get scopedMembers request builder
     *
     * @return ScopedMembersRequestBuilder
     */
    public function scopedMembers(): ScopedMembersRequestBuilder
    {
        return new ScopedMembersRequestBuilder($this->client, $this->buildPath('scopedMembers'));
    }

}
