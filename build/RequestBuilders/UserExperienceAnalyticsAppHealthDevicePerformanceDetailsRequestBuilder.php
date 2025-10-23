<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsAppHealthDevicePerformanceDetails;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CountRequestBuilder;

/**
 * Request builder for userExperienceAnalyticsAppHealthDevicePerformanceDetails
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsAppHealthDevicePerformanceDetails from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null) {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null) {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count;
        }
        if ($orderby !== null) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse
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
            $items[] = new UserExperienceAnalyticsAppHealthDevicePerformanceDetails($item);
        }
        $collection = new UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
    }
    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthDevicePerformanceDetails for deviceManagement
     * @param UserExperienceAnalyticsAppHealthDevicePerformanceDetails $body Request body
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(UserExperienceAnalyticsAppHealthDevicePerformanceDetails $body): UserExperienceAnalyticsAppHealthDevicePerformanceDetails
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsAppHealthDevicePerformanceDetails
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
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetails($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $userExperienceAnalyticsAppHealthDevicePerformanceDetailsId The item ID
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder
     */
    public function byId(string $userExperienceAnalyticsAppHealthDevicePerformanceDetailsId): UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder
    {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder($this->client, $this->requestUrl . '/' . $userExperienceAnalyticsAppHealthDevicePerformanceDetailsId);
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
