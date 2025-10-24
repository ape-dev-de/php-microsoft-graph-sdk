<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\EmployeeExperience\LearningProviders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\LearningProvider;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\EmployeeExperience\LearningProviders\LearningContentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EmployeeExperience\EmployeeExperience\LearningProviders\LearningCourseActivitiesRequestBuilder;

/**
 * Request builder for /employeeExperience/learningProviders/{learningProvider-id}
 */
class LearningProviderRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get learningProvider
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return LearningProvider
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): LearningProvider
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
     * Deserialize response to LearningProvider
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
        return new LearningProvider($data);
    }
    /**
     * Update learningProvider
     * @param LearningProvider $body Request body
     * @return LearningProvider
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(LearningProvider $body): LearningProvider
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to LearningProvider
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
        return new LearningProvider($data);
    }
    /**
     * Delete learningProvider
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
     * Navigate to learningContents
     *
     * @return LearningContentsRequestBuilder
     */
    public function learningContents(): LearningContentsRequestBuilder
    {
        return new LearningContentsRequestBuilder($this->client, $this->requestUrl . '/learningContents');
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
}
