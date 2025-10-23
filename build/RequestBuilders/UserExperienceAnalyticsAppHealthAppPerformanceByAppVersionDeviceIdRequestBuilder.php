<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId;

/**
 * Request builder for {userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId-id}
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
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
     * Deserialize response to UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
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
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId($data);
    }
    /**
     * Update the navigation property userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId in deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId $body Request body
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId $body): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
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
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId($data);
    }
    /**
     * Delete navigation property userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId for deviceManagement
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
}
