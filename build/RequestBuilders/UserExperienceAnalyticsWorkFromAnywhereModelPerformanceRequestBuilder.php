<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsWorkFromAnywhereModelPerformanceCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsWorkFromAnywhereModelPerformance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;

/**
 * Request builder for userExperienceAnalyticsWorkFromAnywhereModelPerformance
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsWorkFromAnywhereModelPerformance from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformanceCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): UserExperienceAnalyticsWorkFromAnywhereModelPerformanceCollectionResponse
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null && $top !== '') {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null && $skip !== '') {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null && $count !== '') {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null && $orderby !== '') {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsWorkFromAnywhereModelPerformanceCollectionResponse
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
        
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new UserExperienceAnalyticsWorkFromAnywhereModelPerformance($item);
        }
        $collection = new UserExperienceAnalyticsWorkFromAnywhereModelPerformanceCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to userExperienceAnalyticsWorkFromAnywhereModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body Request body
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body): UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsWorkFromAnywhereModelPerformance
     */
    private function deserializePost(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId The item ID
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder
     */
    public function byId(string $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId): UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder
    {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder($this->client, $this->requestUrl . '/' . $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
