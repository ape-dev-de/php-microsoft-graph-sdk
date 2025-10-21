<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Channel;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ChannelQueryOptions;

/**
 * Request builder for Channel
 */
class PrimaryChannelRequestBuilder extends BaseRequestBuilder
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
     * @param ChannelQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Channel
     */
    public function get(?ChannelQueryOptions $options = null, ?array $queryParameters = null): Channel
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Channel::class);
    }

    /**
     * Create a new Channel
     *
     * @param Channel $item The item to create
     * @return Channel
     */
    public function post(Channel $item): Channel
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Channel::class);
    }
    /**
     * Get allMembers request builder
     *
     * @return AllMembersRequestBuilder
     */
    public function allMembers(): AllMembersRequestBuilder
    {
        return new AllMembersRequestBuilder($this->client, $this->buildPath('allMembers'));
    }

    /**
     * Get filesFolder request builder
     *
     * @return FilesFolderRequestBuilder
     */
    public function filesFolder(): FilesFolderRequestBuilder
    {
        return new FilesFolderRequestBuilder($this->client, $this->buildPath('filesFolder'));
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
     * Get messages request builder
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->buildPath('messages'));
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
     * Get completeMigration request builder
     *
     * @return CompleteMigrationRequestBuilder
     */
    public function completeMigration(): CompleteMigrationRequestBuilder
    {
        return new CompleteMigrationRequestBuilder($this->client, $this->buildPath('completeMigration'));
    }

    /**
     * Get provisionEmail request builder
     *
     * @return ProvisionEmailRequestBuilder
     */
    public function provisionEmail(): ProvisionEmailRequestBuilder
    {
        return new ProvisionEmailRequestBuilder($this->client, $this->buildPath('provisionEmail'));
    }

    /**
     * Get removeEmail request builder
     *
     * @return RemoveEmailRequestBuilder
     */
    public function removeEmail(): RemoveEmailRequestBuilder
    {
        return new RemoveEmailRequestBuilder($this->client, $this->buildPath('removeEmail'));
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
     * Get sharedWithTeams request builder
     *
     * @return SharedWithTeamsRequestBuilder
     */
    public function sharedWithTeams(): SharedWithTeamsRequestBuilder
    {
        return new SharedWithTeamsRequestBuilder($this->client, $this->buildPath('sharedWithTeams'));
    }

    /**
     * Get tabs request builder
     *
     * @return TabsRequestBuilder
     */
    public function tabs(): TabsRequestBuilder
    {
        return new TabsRequestBuilder($this->client, $this->buildPath('tabs'));
    }

}
