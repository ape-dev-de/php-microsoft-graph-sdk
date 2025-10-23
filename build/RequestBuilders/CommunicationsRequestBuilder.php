<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudCommunications;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CallRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CallsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetPresencesByUserIdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OnlineMeetingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PresencesRequestBuilder;

/**
 * Request builder for communications
 */
class CommunicationsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get communications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return CloudCommunications
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): CloudCommunications
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
     * Deserialize response to CloudCommunications
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
        return new CloudCommunications($data);
    }
    /**
     * Update communications
     * @param CloudCommunications $body Request body
     * @return CloudCommunications
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(CloudCommunications $body): CloudCommunications
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to CloudCommunications
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
        return new CloudCommunications($data);
    }
    /**
     * Navigate to callRecords
     *
     * @return CallRecordsRequestBuilder
     */
    public function callRecords(): CallRecordsRequestBuilder
    {
        return new CallRecordsRequestBuilder($this->client, $this->requestUrl . '/callRecords');
    }
    /**
     * Navigate to calls
     *
     * @return CallsRequestBuilder
     */
    public function calls(): CallsRequestBuilder
    {
        return new CallsRequestBuilder($this->client, $this->requestUrl . '/calls');
    }
    /**
     * Navigate to getPresencesByUserId
     *
     * @return GetPresencesByUserIdRequestBuilder
     */
    public function getPresencesByUserId(): GetPresencesByUserIdRequestBuilder
    {
        return new GetPresencesByUserIdRequestBuilder($this->client, $this->requestUrl . '/getPresencesByUserId');
    }
    /**
     * Navigate to onlineMeetings
     *
     * @return OnlineMeetingsRequestBuilder
     */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder
    {
        return new OnlineMeetingsRequestBuilder($this->client, $this->requestUrl . '/onlineMeetings');
    }
    /**
     * Navigate to presences
     *
     * @return PresencesRequestBuilder
     */
    public function presences(): PresencesRequestBuilder
    {
        return new PresencesRequestBuilder($this->client, $this->requestUrl . '/presences');
    }
}
