<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\UserExperienceAnalyticsBaseline;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\AppHealthMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\BatteryHealthMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\BestPracticesMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\DeviceBootPerformanceMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\RebootAnalyticsMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\ResourcePerformanceMetricsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\UserExperienceAnalyticsBaselines\WorkFromAnywhereMetricsRequestBuilder;

/**
 * Request builder for /deviceManagement/userExperienceAnalyticsBaselines/{userExperienceAnalyticsBaseline-id}
 */
class UserExperienceAnalyticsBaselineRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get userExperienceAnalyticsBaselines from deviceManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return UserExperienceAnalyticsBaseline
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): UserExperienceAnalyticsBaseline
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
     * Deserialize response to UserExperienceAnalyticsBaseline
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
        return new UserExperienceAnalyticsBaseline($data);
    }
    /**
     * Update the navigation property userExperienceAnalyticsBaselines in deviceManagement
     * @param UserExperienceAnalyticsBaseline $body Request body
     * @return UserExperienceAnalyticsBaseline
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(UserExperienceAnalyticsBaseline $body): UserExperienceAnalyticsBaseline
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to UserExperienceAnalyticsBaseline
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
        return new UserExperienceAnalyticsBaseline($data);
    }
    /**
     * Delete navigation property userExperienceAnalyticsBaselines for deviceManagement
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
     * Navigate to appHealthMetrics
     *
     * @return AppHealthMetricsRequestBuilder
     */
    public function appHealthMetrics(): AppHealthMetricsRequestBuilder
    {
        return new AppHealthMetricsRequestBuilder($this->client, $this->requestUrl . '/appHealthMetrics');
    }
    /**
     * Navigate to batteryHealthMetrics
     *
     * @return BatteryHealthMetricsRequestBuilder
     */
    public function batteryHealthMetrics(): BatteryHealthMetricsRequestBuilder
    {
        return new BatteryHealthMetricsRequestBuilder($this->client, $this->requestUrl . '/batteryHealthMetrics');
    }
    /**
     * Navigate to bestPracticesMetrics
     *
     * @return BestPracticesMetricsRequestBuilder
     */
    public function bestPracticesMetrics(): BestPracticesMetricsRequestBuilder
    {
        return new BestPracticesMetricsRequestBuilder($this->client, $this->requestUrl . '/bestPracticesMetrics');
    }
    /**
     * Navigate to deviceBootPerformanceMetrics
     *
     * @return DeviceBootPerformanceMetricsRequestBuilder
     */
    public function deviceBootPerformanceMetrics(): DeviceBootPerformanceMetricsRequestBuilder
    {
        return new DeviceBootPerformanceMetricsRequestBuilder($this->client, $this->requestUrl . '/deviceBootPerformanceMetrics');
    }
    /**
     * Navigate to rebootAnalyticsMetrics
     *
     * @return RebootAnalyticsMetricsRequestBuilder
     */
    public function rebootAnalyticsMetrics(): RebootAnalyticsMetricsRequestBuilder
    {
        return new RebootAnalyticsMetricsRequestBuilder($this->client, $this->requestUrl . '/rebootAnalyticsMetrics');
    }
    /**
     * Navigate to resourcePerformanceMetrics
     *
     * @return ResourcePerformanceMetricsRequestBuilder
     */
    public function resourcePerformanceMetrics(): ResourcePerformanceMetricsRequestBuilder
    {
        return new ResourcePerformanceMetricsRequestBuilder($this->client, $this->requestUrl . '/resourcePerformanceMetrics');
    }
    /**
     * Navigate to workFromAnywhereMetrics
     *
     * @return WorkFromAnywhereMetricsRequestBuilder
     */
    public function workFromAnywhereMetrics(): WorkFromAnywhereMetricsRequestBuilder
    {
        return new WorkFromAnywhereMetricsRequestBuilder($this->client, $this->requestUrl . '/workFromAnywhereMetrics');
    }
}
