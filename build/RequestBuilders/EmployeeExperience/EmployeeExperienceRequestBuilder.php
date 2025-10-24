<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperience;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\CommunitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\EngagementAsyncOperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\LearningCourseActivitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\LearningProvidersRequestBuilder;

/**
 * Request builder for /employeeExperience
 */
class EmployeeExperienceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get employeeExperience
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @return EmployeeExperience
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null): EmployeeExperience
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to EmployeeExperience
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
        return new EmployeeExperience($data);
    }
    /**
     * Update employeeExperience
     * @param EmployeeExperience $body Request body
     * @return EmployeeExperience
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EmployeeExperience $body): EmployeeExperience
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EmployeeExperience
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
        return new EmployeeExperience($data);
    }
    /**
     * Navigate to communities
     *
     * @return CommunitiesRequestBuilder
     */
    public function communities(): CommunitiesRequestBuilder
    {
        return new CommunitiesRequestBuilder($this->client, $this->requestUrl . '/communities');
    }
    /**
     * Navigate to engagementAsyncOperations
     *
     * @return EngagementAsyncOperationsRequestBuilder
     */
    public function engagementAsyncOperations(): EngagementAsyncOperationsRequestBuilder
    {
        return new EngagementAsyncOperationsRequestBuilder($this->client, $this->requestUrl . '/engagementAsyncOperations');
    }
    /**
     * Navigate to learningCourseActivities
     *
     * @return LearningCourseActivitiesRequestBuilder
     */
    public function learningCourseActivities(): LearningCourseActivitiesRequestBuilder
    {
        return new LearningCourseActivitiesRequestBuilder($this->client, $this->requestUrl . '/learningCourseActivities');
    }
    /**
     * Navigate to learningProviders
     *
     * @return LearningProvidersRequestBuilder
     */
    public function learningProviders(): LearningProvidersRequestBuilder
    {
        return new LearningProvidersRequestBuilder($this->client, $this->requestUrl . '/learningProviders');
    }
}
