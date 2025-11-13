<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\InstalledApps;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TeamsAppInstallation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\InstalledApps\UpgradeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\InstalledApps\TeamsAppRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\InstalledApps\TeamsAppDefinitionRequestBuilder;

/**
 * Request builder for /teams/{team-id}/installedApps/{teamsAppInstallation-id}
 */
class TeamsAppInstallationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get installed app in team
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TeamsAppInstallation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TeamsAppInstallation|null
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
     * Deserialize response to TeamsAppInstallation|null
     */
    private function deserializeGet(string $body): TeamsAppInstallation|null    {
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
     * Update the navigation property installedApps in teams
     * @param TeamsAppInstallation $body Request body
     * @return TeamsAppInstallation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TeamsAppInstallation $body): TeamsAppInstallation|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TeamsAppInstallation|null
     */
    private function deserializePatch(string $body): TeamsAppInstallation|null    {
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
     * Remove app from team
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
