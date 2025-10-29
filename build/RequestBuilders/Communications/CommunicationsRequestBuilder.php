<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\CloudCommunications;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\CallsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\GetPresencesByUserIdRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\OnlineMeetingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Communications\PresencesRequestBuilder;

/**
 * Request builder for /communications
 */
class CommunicationsRequestBuilder extends RootBaseRequestBuilder
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
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
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
