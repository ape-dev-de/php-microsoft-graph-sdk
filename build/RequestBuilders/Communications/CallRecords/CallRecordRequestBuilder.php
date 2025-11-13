<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallRecords;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CallRecordsCallRecord;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallRecords\OrganizerV2RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallRecords\ParticipantsV2RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallRecords\SessionsRequestBuilder;

/**
 * Request builder for /communications/callRecords/{callRecord-id}
 */
class CallRecordRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get callRecord
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CallRecordsCallRecord|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CallRecordsCallRecord|null
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
     * Deserialize response to CallRecordsCallRecord|null
     */
    private function deserializeGet(string $body): CallRecordsCallRecord|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CallRecordsCallRecord($data);
    }
    /**
     * Update the navigation property callRecords in communications
     * @param CallRecordsCallRecord $body Request body
     * @return CallRecordsCallRecord|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CallRecordsCallRecord $body): CallRecordsCallRecord|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CallRecordsCallRecord|null
     */
    private function deserializePatch(string $body): CallRecordsCallRecord|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new CallRecordsCallRecord($data);
    }
    /**
     * Delete navigation property callRecords for communications
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
     * Navigate to organizer_v2
     *
     * @return OrganizerV2RequestBuilder
     */
    public function organizerV2(): OrganizerV2RequestBuilder
    {
        return new OrganizerV2RequestBuilder($this->client, $this->requestUrl . '/organizer_v2');
    }
    /**
     * Navigate to participants_v2
     *
     * @return ParticipantsV2RequestBuilder
     */
    public function participantsV2(): ParticipantsV2RequestBuilder
    {
        return new ParticipantsV2RequestBuilder($this->client, $this->requestUrl . '/participants_v2');
    }
    /**
     * Navigate to sessions
     *
     * @return SessionsRequestBuilder
     */
    public function sessions(): SessionsRequestBuilder
    {
        return new SessionsRequestBuilder($this->client, $this->requestUrl . '/sessions');
    }
}
