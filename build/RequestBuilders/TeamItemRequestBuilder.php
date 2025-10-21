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

    /**
     * Get allChannels request builder
     *
     * @return AllChannelsRequestBuilder
     */
    public function allChannels(): AllChannelsRequestBuilder
    {
        return new AllChannelsRequestBuilder($this->client, $this->buildPath('allChannels'));
    }

    /**
     * Get channels request builder
     *
     * @return ChannelsRequestBuilder
     */
    public function channels(): ChannelsRequestBuilder
    {
        return new ChannelsRequestBuilder($this->client, $this->buildPath('channels'));
    }

    /**
     * Get group request builder
     *
     * @return GroupRequestBuilder
     */
    public function group(): GroupRequestBuilder
    {
        return new GroupRequestBuilder($this->client, $this->buildPath('group'));
    }

    /**
     * Get incomingChannels request builder
     *
     * @return IncomingChannelsRequestBuilder
     */
    public function incomingChannels(): IncomingChannelsRequestBuilder
    {
        return new IncomingChannelsRequestBuilder($this->client, $this->buildPath('incomingChannels'));
    }

    /**
     * Get installedApps request builder
     *
     * @return InstalledAppsRequestBuilder
     */
    public function installedApps(): InstalledAppsRequestBuilder
    {
        return new InstalledAppsRequestBuilder($this->client, $this->buildPath('installedApps'));
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
     * Get archive request builder
     *
     * @return ArchiveRequestBuilder
     */
    public function archive(): ArchiveRequestBuilder
    {
        return new ArchiveRequestBuilder($this->client, $this->buildPath('archive'));
    }

    /**
     * Get clone request builder
     *
     * @return CloneRequestBuilder
     */
    public function clone(): CloneRequestBuilder
    {
        return new CloneRequestBuilder($this->client, $this->buildPath('clone'));
    }

    /**
     * Get completeMigration request builder
     *
     * @return CompleteMigrationRequestBuilder
     */
    public function completeMigration(): CompleteMigrationRequestBuilder
    {
        return new CompleteMigrationRequestBuilder($this->client, $this->buildPath('completeMigration'));
    }

    /**
     * Get sendActivityNotification request builder
     *
     * @return SendActivityNotificationRequestBuilder
     */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder
    {
        return new SendActivityNotificationRequestBuilder($this->client, $this->buildPath('sendActivityNotification'));
    }

    /**
     * Get unarchive request builder
     *
     * @return UnarchiveRequestBuilder
     */
    public function unarchive(): UnarchiveRequestBuilder
    {
        return new UnarchiveRequestBuilder($this->client, $this->buildPath('unarchive'));
    }

    /**
     * Get operations request builder
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->buildPath('operations'));
    }

    /**
     * Get permissionGrants request builder
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->buildPath('permissionGrants'));
    }

    /**
     * Get photo request builder
     *
     * @return PhotoRequestBuilder
     */
    public function photo(): PhotoRequestBuilder
    {
        return new PhotoRequestBuilder($this->client, $this->buildPath('photo'));
    }

    /**
     * Get primaryChannel request builder
     *
     * @return PrimaryChannelRequestBuilder
     */
    public function primaryChannel(): PrimaryChannelRequestBuilder
    {
        return new PrimaryChannelRequestBuilder($this->client, $this->buildPath('primaryChannel'));
    }

    /**
     * Get schedule request builder
     *
     * @return ScheduleRequestBuilder
     */
    public function schedule(): ScheduleRequestBuilder
    {
        return new ScheduleRequestBuilder($this->client, $this->buildPath('schedule'));
    }

    /**
     * Get tags request builder
     *
     * @return TagsRequestBuilder
     */
    public function tags(): TagsRequestBuilder
    {
        return new TagsRequestBuilder($this->client, $this->buildPath('tags'));
    }

    /**
     * Get template request builder
     *
     * @return TemplateRequestBuilder
     */
    public function template(): TemplateRequestBuilder
    {
        return new TemplateRequestBuilder($this->client, $this->buildPath('template'));
    }

}
