<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Team;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TeamQueryOptions;

/**
 * Request builder for Team
 */
class TeamRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param TeamQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Team
     */
    public function get(?TeamQueryOptions $options = null, ?array $queryParameters = null): Team
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Team::class);
    }

    /**
     * Create a new Team
     *
     * @param Team $item The item to create
     * @return Team
     */
    public function post(Team $item): Team
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Team::class);
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
