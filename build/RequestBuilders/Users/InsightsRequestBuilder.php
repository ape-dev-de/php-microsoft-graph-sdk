<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ItemInsights;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Insights\SharedRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Insights\TrendingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Insights\UsedRequestBuilder;

/**
 * Request builder for /users/{user-id}/insights
 */
class InsightsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get insights from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ItemInsights|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ItemInsights|null
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
     * Deserialize response to ItemInsights|null
     */
    private function deserializeGet(string $body): ItemInsights|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ItemInsights($data);
    }
    /**
     * Update the navigation property insights in users
     * @param ItemInsights $body Request body
     * @return ItemInsights|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ItemInsights $body): ItemInsights|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ItemInsights|null
     */
    private function deserializePatch(string $body): ItemInsights|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ItemInsights($data);
    }
    /**
     * Delete navigation property insights for users
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
     * Navigate to shared
     *
     * @return SharedRequestBuilder
     */
    public function shared(): SharedRequestBuilder
    {
        return new SharedRequestBuilder($this->client, $this->requestUrl . '/shared');
    }
    /**
     * Navigate to trending
     *
     * @return TrendingRequestBuilder
     */
    public function trending(): TrendingRequestBuilder
    {
        return new TrendingRequestBuilder($this->client, $this->requestUrl . '/trending');
    }
    /**
     * Navigate to used
     *
     * @return UsedRequestBuilder
     */
    public function used(): UsedRequestBuilder
    {
        return new UsedRequestBuilder($this->client, $this->requestUrl . '/used');
    }
}
