<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Teamwork;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeletedChatsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeletedTeamsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SendActivityNotificationToRecipientsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TeamsAppSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\WorkforceIntegrationsRequestBuilder;

/**
 * Request builder for teamwork
 */
class TeamworkRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get teamwork
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Teamwork
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Teamwork
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Teamwork
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
        return new Teamwork($data);
    }
    /**
     * Update teamwork
     * @param Teamwork $body Request body
     * @return Teamwork
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Teamwork $body): Teamwork
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Teamwork
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
        return new Teamwork($data);
    }
    /**
     * Navigate to deletedChats
     *
     * @return DeletedChatsRequestBuilder
     */
    public function deletedChats(): DeletedChatsRequestBuilder
    {
        return new DeletedChatsRequestBuilder($this->client, $this->requestUrl . '/deletedChats');
    }
    /**
     * Navigate to deletedTeams
     *
     * @return DeletedTeamsRequestBuilder
     */
    public function deletedTeams(): DeletedTeamsRequestBuilder
    {
        return new DeletedTeamsRequestBuilder($this->client, $this->requestUrl . '/deletedTeams');
    }
    /**
     * Navigate to sendActivityNotificationToRecipients
     *
     * @return SendActivityNotificationToRecipientsRequestBuilder
     */
    public function sendActivityNotificationToRecipients(): SendActivityNotificationToRecipientsRequestBuilder
    {
        return new SendActivityNotificationToRecipientsRequestBuilder($this->client, $this->requestUrl . '/sendActivityNotificationToRecipients');
    }
    /**
     * Navigate to teamsAppSettings
     *
     * @return TeamsAppSettingsRequestBuilder
     */
    public function teamsAppSettings(): TeamsAppSettingsRequestBuilder
    {
        return new TeamsAppSettingsRequestBuilder($this->client, $this->requestUrl . '/teamsAppSettings');
    }
    /**
     * Navigate to workforceIntegrations
     *
     * @return WorkforceIntegrationsRequestBuilder
     */
    public function workforceIntegrations(): WorkforceIntegrationsRequestBuilder
    {
        return new WorkforceIntegrationsRequestBuilder($this->client, $this->requestUrl . '/workforceIntegrations');
    }
}
