<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EmployeeExperienceUser;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\EmployeeExperience\LearningCourseActivitiesRequestBuilder;

/**
 * Request builder for /users/{user-id}/employeeExperience
 */
class EmployeeExperienceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get employeeExperience from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EmployeeExperienceUser|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EmployeeExperienceUser|null
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
     * Deserialize response to EmployeeExperienceUser|null
     */
    private function deserializeGet(string $body): EmployeeExperienceUser|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EmployeeExperienceUser($data);
    }
    /**
     * Update the navigation property employeeExperience in users
     * @param EmployeeExperienceUser $body Request body
     * @return EmployeeExperienceUser|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EmployeeExperienceUser $body): EmployeeExperienceUser|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EmployeeExperienceUser|null
     */
    private function deserializePatch(string $body): EmployeeExperienceUser|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EmployeeExperienceUser($data);
    }
    /**
     * Delete navigation property employeeExperience for users
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
     * Navigate to learningCourseActivities
     *
     * @return LearningCourseActivitiesRequestBuilder
     */
    public function learningCourseActivities(): LearningCourseActivitiesRequestBuilder
    {
        return new LearningCourseActivitiesRequestBuilder($this->client, $this->requestUrl . '/learningCourseActivities');
    }
}
