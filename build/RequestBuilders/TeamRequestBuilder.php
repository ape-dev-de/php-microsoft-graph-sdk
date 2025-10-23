<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Team;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AllChannelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ChannelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IncomingChannelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\InstalledAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ArchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CloneRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CompleteMigrationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SendActivityNotificationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnarchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PhotoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PrimaryChannelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ScheduleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TagsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TemplateRequestBuilder;

/**
 * Request builder for team
 */
class TeamRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get team from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Team
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Team
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Team
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Team($data);
    }
    /**
     * Create team from group
     * @param Team $body Request body
     * @return Team
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(Team $body): Team
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->put($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to Team
     */
    private function deserializePut(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Team($data);
    }
    /**
     * Delete navigation property team for groups
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to allChannels
     *
     * @return AllChannelsRequestBuilder
     */
    public function allChannels(): AllChannelsRequestBuilder
    {
        return new AllChannelsRequestBuilder($this->client, $this->requestUrl . '/allChannels');
    }
    /**
     * Navigate to channels
     *
     * @return ChannelsRequestBuilder
     */
    public function channels(): ChannelsRequestBuilder
    {
        return new ChannelsRequestBuilder($this->client, $this->requestUrl . '/channels');
    }
    /**
     * Navigate to group
     *
     * @return GroupRequestBuilder
     */
    public function group(): GroupRequestBuilder
    {
        return new GroupRequestBuilder($this->client, $this->requestUrl . '/group');
    }
    /**
     * Navigate to incomingChannels
     *
     * @return IncomingChannelsRequestBuilder
     */
    public function incomingChannels(): IncomingChannelsRequestBuilder
    {
        return new IncomingChannelsRequestBuilder($this->client, $this->requestUrl . '/incomingChannels');
    }
    /**
     * Navigate to installedApps
     *
     * @return InstalledAppsRequestBuilder
     */
    public function installedApps(): InstalledAppsRequestBuilder
    {
        return new InstalledAppsRequestBuilder($this->client, $this->requestUrl . '/installedApps');
    }
    /**
     * Navigate to members
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->requestUrl . '/members');
    }
    /**
     * Navigate to archive
     *
     * @return ArchiveRequestBuilder
     */
    public function archive(): ArchiveRequestBuilder
    {
        return new ArchiveRequestBuilder($this->client, $this->requestUrl . '/archive');
    }
    /**
     * Navigate to clone
     *
     * @return CloneRequestBuilder
     */
    public function clone(): CloneRequestBuilder
    {
        return new CloneRequestBuilder($this->client, $this->requestUrl . '/clone');
    }
    /**
     * Navigate to completeMigration
     *
     * @return CompleteMigrationRequestBuilder
     */
    public function completeMigration(): CompleteMigrationRequestBuilder
    {
        return new CompleteMigrationRequestBuilder($this->client, $this->requestUrl . '/completeMigration');
    }
    /**
     * Navigate to sendActivityNotification
     *
     * @return SendActivityNotificationRequestBuilder
     */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder
    {
        return new SendActivityNotificationRequestBuilder($this->client, $this->requestUrl . '/sendActivityNotification');
    }
    /**
     * Navigate to unarchive
     *
     * @return UnarchiveRequestBuilder
     */
    public function unarchive(): UnarchiveRequestBuilder
    {
        return new UnarchiveRequestBuilder($this->client, $this->requestUrl . '/unarchive');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to permissionGrants
     *
     * @return PermissionGrantsRequestBuilder
     */
    public function permissionGrants(): PermissionGrantsRequestBuilder
    {
        return new PermissionGrantsRequestBuilder($this->client, $this->requestUrl . '/permissionGrants');
    }
    /**
     * Navigate to photo
     *
     * @return PhotoRequestBuilder
     */
    public function photo(): PhotoRequestBuilder
    {
        return new PhotoRequestBuilder($this->client, $this->requestUrl . '/photo');
    }
    /**
     * Navigate to primaryChannel
     *
     * @return PrimaryChannelRequestBuilder
     */
    public function primaryChannel(): PrimaryChannelRequestBuilder
    {
        return new PrimaryChannelRequestBuilder($this->client, $this->requestUrl . '/primaryChannel');
    }
    /**
     * Navigate to schedule
     *
     * @return ScheduleRequestBuilder
     */
    public function schedule(): ScheduleRequestBuilder
    {
        return new ScheduleRequestBuilder($this->client, $this->requestUrl . '/schedule');
    }
    /**
     * Navigate to tags
     *
     * @return TagsRequestBuilder
     */
    public function tags(): TagsRequestBuilder
    {
        return new TagsRequestBuilder($this->client, $this->requestUrl . '/tags');
    }
    /**
     * Navigate to template
     *
     * @return TemplateRequestBuilder
     */
    public function template(): TemplateRequestBuilder
    {
        return new TemplateRequestBuilder($this->client, $this->requestUrl . '/template');
    }
}
