<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Chats\InstalledApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsAppInstallation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Chats\InstalledApps\UpgradeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Chats\InstalledApps\TeamsAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Chats\InstalledApps\TeamsAppDefinitionRequestBuilder;

/**
 * Request builder for /users/{user-id}/chats/{chat-id}/installedApps/{teamsAppInstallation-id}
 */
class TeamsAppInstallationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get installedApps from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TeamsAppInstallation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TeamsAppInstallation
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
     * Deserialize response to TeamsAppInstallation
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
        return new TeamsAppInstallation($data);
    }
    /**
     * Update the navigation property installedApps in users
     * @param TeamsAppInstallation $body Request body
     * @return TeamsAppInstallation
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TeamsAppInstallation $body): TeamsAppInstallation
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TeamsAppInstallation
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
        return new TeamsAppInstallation($data);
    }
    /**
     * Delete navigation property installedApps for users
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
     * Navigate to upgrade
     *
     * @return UpgradeRequestBuilder
     */
    public function upgrade(): UpgradeRequestBuilder
    {
        return new UpgradeRequestBuilder($this->client, $this->requestUrl . '/upgrade');
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
