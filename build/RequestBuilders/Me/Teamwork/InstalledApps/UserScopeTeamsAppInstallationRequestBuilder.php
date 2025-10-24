<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Teamwork\InstalledApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserScopeTeamsAppInstallation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Teamwork\InstalledApps\ChatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Teamwork\InstalledApps\TeamsAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Teamwork\InstalledApps\TeamsAppDefinitionRequestBuilder;

/**
 * Request builder for /me/teamwork/installedApps/{userScopeTeamsAppInstallation-id}
 */
class UserScopeTeamsAppInstallationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get installedApps from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserScopeTeamsAppInstallation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserScopeTeamsAppInstallation
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
     * Deserialize response to UserScopeTeamsAppInstallation
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
        return new UserScopeTeamsAppInstallation($data);
    }
    /**
     * Update the navigation property installedApps in me
     * @param UserScopeTeamsAppInstallation $body Request body
     * @return UserScopeTeamsAppInstallation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserScopeTeamsAppInstallation $body): UserScopeTeamsAppInstallation
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserScopeTeamsAppInstallation
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
        return new UserScopeTeamsAppInstallation($data);
    }
    /**
     * Delete navigation property installedApps for me
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
     * Navigate to chat
     *
     * @return ChatRequestBuilder
     */
    public function chat(): ChatRequestBuilder
    {
        return new ChatRequestBuilder($this->client, $this->requestUrl . '/chat');
    }
    /**
     * Navigate to teamsApp
     *
     * @return TeamsAppRequestBuilder
     */
    public function teamsApp(): TeamsAppRequestBuilder
    {
        return new TeamsAppRequestBuilder($this->client, $this->requestUrl . '/teamsApp');
    }
    /**
     * Navigate to teamsAppDefinition
     *
     * @return TeamsAppDefinitionRequestBuilder
     */
    public function teamsAppDefinition(): TeamsAppDefinitionRequestBuilder
    {
        return new TeamsAppDefinitionRequestBuilder($this->client, $this->requestUrl . '/teamsAppDefinition');
    }
}
