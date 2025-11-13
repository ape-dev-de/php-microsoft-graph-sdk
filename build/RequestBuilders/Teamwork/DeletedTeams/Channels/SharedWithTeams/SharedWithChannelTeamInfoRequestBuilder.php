<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\Channels\SharedWithTeams;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedWithChannelTeamInfo;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\Channels\SharedWithTeams\AllowedMembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teamwork\DeletedTeams\Channels\SharedWithTeams\TeamRequestBuilder;

/**
 * Request builder for /teamwork/deletedTeams/{deletedTeam-id}/channels/{channel-id}/sharedWithTeams/{sharedWithChannelTeamInfo-id}
 */
class SharedWithChannelTeamInfoRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sharedWithTeams from teamwork
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SharedWithChannelTeamInfo|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SharedWithChannelTeamInfo|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SharedWithChannelTeamInfo|null
     */
    private function deserializeGet(string $body): SharedWithChannelTeamInfo|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SharedWithChannelTeamInfo($data);
    }
    /**
     * Update the navigation property sharedWithTeams in teamwork
     * @param SharedWithChannelTeamInfo $body Request body
     * @return SharedWithChannelTeamInfo|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SharedWithChannelTeamInfo $body): SharedWithChannelTeamInfo|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SharedWithChannelTeamInfo|null
     */
    private function deserializePatch(string $body): SharedWithChannelTeamInfo|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SharedWithChannelTeamInfo($data);
    }
    /**
     * Delete navigation property sharedWithTeams for teamwork
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to allowedMembers
     *
     * @return AllowedMembersRequestBuilder
     */
    public function allowedMembers(): AllowedMembersRequestBuilder
    {
        return new AllowedMembersRequestBuilder($this->client, $this->requestUrl . '/allowedMembers');
    }
    /**
     * Navigate to team
     *
     * @return TeamRequestBuilder
     */
    public function team(): TeamRequestBuilder
    {
        return new TeamRequestBuilder($this->client, $this->requestUrl . '/team');
    }
}
