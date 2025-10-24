<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Schedule\TimeCards;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCard;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Schedule\TimeCards\ClockOutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Schedule\TimeCards\ConfirmRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Schedule\TimeCards\EndBreakRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Schedule\TimeCards\StartBreakRequestBuilder;

/**
 * Request builder for /teams/{team-id}/schedule/timeCards/{timeCard-id}
 */
class TimeCardRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get timeCards from teams
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return TimeCard
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): TimeCard
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
     * Deserialize response to TimeCard
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
        return new TimeCard($data);
    }
    /**
     * Update the navigation property timeCards in teams
     * @param TimeCard $body Request body
     * @return TimeCard
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(TimeCard $body): TimeCard
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to TimeCard
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
        return new TimeCard($data);
    }
    /**
     * Delete timeCard
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
     * Navigate to clockOut
     *
     * @return ClockOutRequestBuilder
     */
    public function clockOut(): ClockOutRequestBuilder
    {
        return new ClockOutRequestBuilder($this->client, $this->requestUrl . '/clockOut');
    }
    /**
     * Navigate to confirm
     *
     * @return ConfirmRequestBuilder
     */
    public function confirm(): ConfirmRequestBuilder
    {
        return new ConfirmRequestBuilder($this->client, $this->requestUrl . '/confirm');
    }
    /**
     * Navigate to endBreak
     *
     * @return EndBreakRequestBuilder
     */
    public function endBreak(): EndBreakRequestBuilder
    {
        return new EndBreakRequestBuilder($this->client, $this->requestUrl . '/endBreak');
    }
    /**
     * Navigate to startBreak
     *
     * @return StartBreakRequestBuilder
     */
    public function startBreak(): StartBreakRequestBuilder
    {
        return new StartBreakRequestBuilder($this->client, $this->requestUrl . '/startBreak');
    }
}
