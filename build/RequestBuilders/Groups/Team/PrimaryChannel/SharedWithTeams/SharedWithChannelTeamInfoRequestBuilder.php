<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\PrimaryChannel\SharedWithTeams;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SharedWithChannelTeamInfo;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\PrimaryChannel\SharedWithTeams\AllowedMembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\PrimaryChannel\SharedWithTeams\TeamRequestBuilder;

/**
 * Request builder for /groups/{group-id}/team/primaryChannel/sharedWithTeams/{sharedWithChannelTeamInfo-id}
 */
class SharedWithChannelTeamInfoRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get sharedWithTeams from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SharedWithChannelTeamInfo
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SharedWithChannelTeamInfo
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
     * Deserialize response to SharedWithChannelTeamInfo
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
        return new SharedWithChannelTeamInfo($data);
    }
    /**
     * Update the navigation property sharedWithTeams in groups
     * @param SharedWithChannelTeamInfo $body Request body
     * @return SharedWithChannelTeamInfo
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SharedWithChannelTeamInfo $body): SharedWithChannelTeamInfo
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SharedWithChannelTeamInfo
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
        return new SharedWithChannelTeamInfo($data);
    }
    /**
     * Delete navigation property sharedWithTeams for groups
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
