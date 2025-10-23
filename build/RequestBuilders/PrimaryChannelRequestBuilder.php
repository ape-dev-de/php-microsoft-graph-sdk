<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Channel;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AllMembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FilesFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MessagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ArchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CompleteMigrationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DoesUserHaveAccessRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ProvisionEmailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RemoveEmailRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UnarchiveRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SharedWithTeamsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TabsRequestBuilder;

/**
 * Request builder for primaryChannel
 */
class PrimaryChannelRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get primaryChannel from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Channel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Channel
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
     * Deserialize response to Channel
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
        return new Channel($data);
    }
    /**
     * Update the navigation property primaryChannel in groups
     * @param Channel $body Request body
     * @return Channel
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Channel $body): Channel
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Channel
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Channel($data);
    }
    /**
     * Delete navigation property primaryChannel for groups
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
     * Navigate to allMembers
     *
     * @return AllMembersRequestBuilder
     */
    public function allMembers(): AllMembersRequestBuilder
    {
        return new AllMembersRequestBuilder($this->client, $this->requestUrl . '/allMembers');
    }
    /**
     * Navigate to filesFolder
     *
     * @return FilesFolderRequestBuilder
     */
    public function filesFolder(): FilesFolderRequestBuilder
    {
        return new FilesFolderRequestBuilder($this->client, $this->requestUrl . '/filesFolder');
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
     * Navigate to messages
     *
     * @return MessagesRequestBuilder
     */
    public function messages(): MessagesRequestBuilder
    {
        return new MessagesRequestBuilder($this->client, $this->requestUrl . '/messages');
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
     * Navigate to completeMigration
     *
     * @return CompleteMigrationRequestBuilder
     */
    public function completeMigration(): CompleteMigrationRequestBuilder
    {
        return new CompleteMigrationRequestBuilder($this->client, $this->requestUrl . '/completeMigration');
    }
    /**
     * Navigate to provisionEmail
     *
     * @return ProvisionEmailRequestBuilder
     */
    public function provisionEmail(): ProvisionEmailRequestBuilder
    {
        return new ProvisionEmailRequestBuilder($this->client, $this->requestUrl . '/provisionEmail');
    }
    /**
     * Navigate to removeEmail
     *
     * @return RemoveEmailRequestBuilder
     */
    public function removeEmail(): RemoveEmailRequestBuilder
    {
        return new RemoveEmailRequestBuilder($this->client, $this->requestUrl . '/removeEmail');
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
     * Navigate to sharedWithTeams
     *
     * @return SharedWithTeamsRequestBuilder
     */
    public function sharedWithTeams(): SharedWithTeamsRequestBuilder
    {
        return new SharedWithTeamsRequestBuilder($this->client, $this->requestUrl . '/sharedWithTeams');
    }
    /**
     * Navigate to tabs
     *
     * @return TabsRequestBuilder
     */
    public function tabs(): TabsRequestBuilder
    {
        return new TabsRequestBuilder($this->client, $this->requestUrl . '/tabs');
    }
}
