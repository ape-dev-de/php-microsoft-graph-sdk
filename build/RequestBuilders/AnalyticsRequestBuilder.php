<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemAnalytics;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AllTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ItemActivityStatsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LastSevenDaysRequestBuilder;

/**
 * Request builder for analytics
 */
class AnalyticsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get analytics from groups
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ItemAnalytics
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ItemAnalytics
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
     * Deserialize response to ItemAnalytics
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
        return new ItemAnalytics($data);
    }
    /**
     * Update the navigation property analytics in groups
     * @param ItemAnalytics $body Request body
     * @return ItemAnalytics
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ItemAnalytics $body): ItemAnalytics
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ItemAnalytics
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
        return new ItemAnalytics($data);
    }
    /**
     * Delete navigation property analytics for groups
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
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
     * Navigate to allTime
     *
     * @return AllTimeRequestBuilder
     */
    public function allTime(): AllTimeRequestBuilder
    {
        return new AllTimeRequestBuilder($this->client, $this->requestUrl . '/allTime');
    }
    /**
     * Navigate to itemActivityStats
     *
     * @return ItemActivityStatsRequestBuilder
     */
    public function itemActivityStats(): ItemActivityStatsRequestBuilder
    {
        return new ItemActivityStatsRequestBuilder($this->client, $this->requestUrl . '/itemActivityStats');
    }
    /**
     * Navigate to lastSevenDays
     *
     * @return LastSevenDaysRequestBuilder
     */
    public function lastSevenDays(): LastSevenDaysRequestBuilder
    {
        return new LastSevenDaysRequestBuilder($this->client, $this->requestUrl . '/lastSevenDays');
    }
}
