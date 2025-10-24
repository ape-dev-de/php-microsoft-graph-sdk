<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Participant;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\MuteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\StartHoldMusicRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\Calls\Participants\StopHoldMusicRequestBuilder;

/**
 * Request builder for /communications/calls/{call-id}/participants/{participant-id}
 */
class ParticipantRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get participant
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Participant
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Participant
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
     * Deserialize response to Participant
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
        return new Participant($data);
    }
    /**
     * Update the navigation property participants in communications
     * @param Participant $body Request body
     * @return Participant
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Participant $body): Participant
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Participant
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
        return new Participant($data);
    }
    /**
     * Delete participant
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
     * Navigate to mute
     *
     * @return MuteRequestBuilder
     */
    public function mute(): MuteRequestBuilder
    {
        return new MuteRequestBuilder($this->client, $this->requestUrl . '/mute');
    }
    /**
     * Navigate to startHoldMusic
     *
     * @return StartHoldMusicRequestBuilder
     */
    public function startHoldMusic(): StartHoldMusicRequestBuilder
    {
        return new StartHoldMusicRequestBuilder($this->client, $this->requestUrl . '/startHoldMusic');
    }
    /**
     * Navigate to stopHoldMusic
     *
     * @return StopHoldMusicRequestBuilder
     */
    public function stopHoldMusic(): StopHoldMusicRequestBuilder
    {
        return new StopHoldMusicRequestBuilder($this->client, $this->requestUrl . '/stopHoldMusic');
    }
}
