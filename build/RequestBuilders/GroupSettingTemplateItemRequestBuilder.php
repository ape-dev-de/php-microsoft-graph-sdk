<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\GroupSettingTemplate;

/**
 * Request builder for individual GroupSettingTemplate item
 */
class GroupSettingTemplateItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get GroupSettingTemplate item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return GroupSettingTemplate
     */
    public function get(?array $queryParameters = null): GroupSettingTemplate
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, GroupSettingTemplate::class);
    }

    /**
     * Update GroupSettingTemplate item
     *
     * @param GroupSettingTemplate $item The item with updated properties
     * @return GroupSettingTemplate
     */
    public function patch(GroupSettingTemplate $item): GroupSettingTemplate
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, GroupSettingTemplate::class);
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

}
