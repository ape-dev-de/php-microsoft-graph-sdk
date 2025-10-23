<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Presence;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ClearPresenceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ClearUserPreferredPresenceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetPresenceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetStatusMessageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetUserPreferredPresenceRequestBuilder;

/**
 * Request builder for {presence-id}
 */
class PresenceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get presence
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Presence
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Presence
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
     * Deserialize response to Presence
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
        return new Presence($data);
    }
    /**
     * Update the navigation property presences in communications
     * @param Presence $body Request body
     * @return Presence
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Presence $body): Presence
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Presence
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
        return new Presence($data);
    }
    /**
     * Delete navigation property presences for communications
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
     * Navigate to clearPresence
     *
     * @return ClearPresenceRequestBuilder
     */
    public function clearPresence(): ClearPresenceRequestBuilder
    {
        return new ClearPresenceRequestBuilder($this->client, $this->requestUrl . '/clearPresence');
    }
    /**
     * Navigate to clearUserPreferredPresence
     *
     * @return ClearUserPreferredPresenceRequestBuilder
     */
    public function clearUserPreferredPresence(): ClearUserPreferredPresenceRequestBuilder
    {
        return new ClearUserPreferredPresenceRequestBuilder($this->client, $this->requestUrl . '/clearUserPreferredPresence');
    }
    /**
     * Navigate to setPresence
     *
     * @return SetPresenceRequestBuilder
     */
    public function setPresence(): SetPresenceRequestBuilder
    {
        return new SetPresenceRequestBuilder($this->client, $this->requestUrl . '/setPresence');
    }
    /**
     * Navigate to setStatusMessage
     *
     * @return SetStatusMessageRequestBuilder
     */
    public function setStatusMessage(): SetStatusMessageRequestBuilder
    {
        return new SetStatusMessageRequestBuilder($this->client, $this->requestUrl . '/setStatusMessage');
    }
    /**
     * Navigate to setUserPreferredPresence
     *
     * @return SetUserPreferredPresenceRequestBuilder
     */
    public function setUserPreferredPresence(): SetUserPreferredPresenceRequestBuilder
    {
        return new SetUserPreferredPresenceRequestBuilder($this->client, $this->requestUrl . '/setUserPreferredPresence');
    }
}
