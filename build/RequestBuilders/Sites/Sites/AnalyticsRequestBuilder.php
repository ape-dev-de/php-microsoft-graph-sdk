<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemAnalytics;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Analytics\AllTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Analytics\ItemActivityStatsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Sites\Sites\Analytics\LastSevenDaysRequestBuilder;

/**
 * Request builder for /sites/{site-id}/analytics
 */
class AnalyticsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get analytics from sites
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ItemAnalytics
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ItemAnalytics
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
     * Update the navigation property analytics in sites
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
     * Delete navigation property analytics for sites
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
