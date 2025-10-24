<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationClass;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\AssignmentCategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\AssignmentDefaultsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\AssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\AssignmentSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\GroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\MembersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\GetRecentlyModifiedSubmissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\ModulesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\SchoolsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Classes\TeachersRequestBuilder;

/**
 * Request builder for /education/classes/{educationClass-id}
 */
class EducationClassRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get educationClass
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationClass
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
     * Deserialize response to EducationClass
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
        return new EducationClass($data);
    }
    /**
     * Update educationClass
     * @param EducationClass $body Request body
     * @return EducationClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationClass $body): EducationClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationClass
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
        return new EducationClass($data);
    }
    /**
     * Delete educationClass
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
     * Navigate to assignmentCategories
     *
     * @return AssignmentCategoriesRequestBuilder
     */
    public function assignmentCategories(): AssignmentCategoriesRequestBuilder
    {
        return new AssignmentCategoriesRequestBuilder($this->client, $this->requestUrl . '/assignmentCategories');
    }
    /**
     * Navigate to assignmentDefaults
     *
     * @return AssignmentDefaultsRequestBuilder
     */
    public function assignmentDefaults(): AssignmentDefaultsRequestBuilder
    {
        return new AssignmentDefaultsRequestBuilder($this->client, $this->requestUrl . '/assignmentDefaults');
    }
    /**
     * Navigate to assignments
     *
     * @return AssignmentsRequestBuilder
     */
    public function assignments(): AssignmentsRequestBuilder
    {
        return new AssignmentsRequestBuilder($this->client, $this->requestUrl . '/assignments');
    }
    /**
     * Navigate to assignmentSettings
     *
     * @return AssignmentSettingsRequestBuilder
     */
    public function assignmentSettings(): AssignmentSettingsRequestBuilder
    {
        return new AssignmentSettingsRequestBuilder($this->client, $this->requestUrl . '/assignmentSettings');
    }
    /**
     * Navigate to group
     *
     * @return GroupRequestBuilder
     */
    public function group(): GroupRequestBuilder
    {
        return new GroupRequestBuilder($this->client, $this->requestUrl . '/group');
    }
    /**
     * Navigate to members
     *
     * @return MembersRequestBuilder
     */
    public function members(): MembersRequestBuilder
    {
        return new MembersRequestBuilder($this->client, $this->requestUrl . '/members');
    }
    /**
     * Navigate to getRecentlyModifiedSubmissions()
     *
     * @return GetRecentlyModifiedSubmissionsRequestBuilder
     */
    public function getRecentlyModifiedSubmissions(): GetRecentlyModifiedSubmissionsRequestBuilder
    {
        return new GetRecentlyModifiedSubmissionsRequestBuilder($this->client, $this->requestUrl . '/getRecentlyModifiedSubmissions()');
    }
    /**
     * Navigate to modules
     *
     * @return ModulesRequestBuilder
     */
    public function modules(): ModulesRequestBuilder
    {
        return new ModulesRequestBuilder($this->client, $this->requestUrl . '/modules');
    }
    /**
     * Navigate to schools
     *
     * @return SchoolsRequestBuilder
     */
    public function schools(): SchoolsRequestBuilder
    {
        return new SchoolsRequestBuilder($this->client, $this->requestUrl . '/schools');
    }
    /**
     * Navigate to teachers
     *
     * @return TeachersRequestBuilder
     */
    public function teachers(): TeachersRequestBuilder
    {
        return new TeachersRequestBuilder($this->client, $this->requestUrl . '/teachers');
    }
}
