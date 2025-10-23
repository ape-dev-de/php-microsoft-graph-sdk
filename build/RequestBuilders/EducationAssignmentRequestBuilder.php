<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationAssignment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GradingCategoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ActivateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeactivateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PublishRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetUpFeedbackResourcesFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetUpResourcesFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RubricRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubmissionsRequestBuilder;

/**
 * Request builder for {educationAssignment-id}
 */
class EducationAssignmentRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get educationAssignment
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationAssignment
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to EducationAssignment
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
        return new EducationAssignment($data);
    }
    /**
     * Update educationassignment
     * @param EducationAssignment $body Request body
     * @return EducationAssignment
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationAssignment $body): EducationAssignment
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationAssignment
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
        return new EducationAssignment($data);
    }
    /**
     * Delete educationAssignment
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
     * Navigate to categories
     *
     * @return CategoriesRequestBuilder
     */
    public function categories(): CategoriesRequestBuilder
    {
        return new CategoriesRequestBuilder($this->client, $this->requestUrl . '/categories');
    }
    /**
     * Navigate to gradingCategory
     *
     * @return GradingCategoryRequestBuilder
     */
    public function gradingCategory(): GradingCategoryRequestBuilder
    {
        return new GradingCategoryRequestBuilder($this->client, $this->requestUrl . '/gradingCategory');
    }
    /**
     * Navigate to activate
     *
     * @return ActivateRequestBuilder
     */
    public function activate(): ActivateRequestBuilder
    {
        return new ActivateRequestBuilder($this->client, $this->requestUrl . '/activate');
    }
    /**
     * Navigate to deactivate
     *
     * @return DeactivateRequestBuilder
     */
    public function deactivate(): DeactivateRequestBuilder
    {
        return new DeactivateRequestBuilder($this->client, $this->requestUrl . '/deactivate');
    }
    /**
     * Navigate to publish
     *
     * @return PublishRequestBuilder
     */
    public function publish(): PublishRequestBuilder
    {
        return new PublishRequestBuilder($this->client, $this->requestUrl . '/publish');
    }
    /**
     * Navigate to setUpFeedbackResourcesFolder
     *
     * @return SetUpFeedbackResourcesFolderRequestBuilder
     */
    public function setUpFeedbackResourcesFolder(): SetUpFeedbackResourcesFolderRequestBuilder
    {
        return new SetUpFeedbackResourcesFolderRequestBuilder($this->client, $this->requestUrl . '/setUpFeedbackResourcesFolder');
    }
    /**
     * Navigate to setUpResourcesFolder
     *
     * @return SetUpResourcesFolderRequestBuilder
     */
    public function setUpResourcesFolder(): SetUpResourcesFolderRequestBuilder
    {
        return new SetUpResourcesFolderRequestBuilder($this->client, $this->requestUrl . '/setUpResourcesFolder');
    }
    /**
     * Navigate to resources
     *
     * @return ResourcesRequestBuilder
     */
    public function resources(): ResourcesRequestBuilder
    {
        return new ResourcesRequestBuilder($this->client, $this->requestUrl . '/resources');
    }
    /**
     * Navigate to rubric
     *
     * @return RubricRequestBuilder
     */
    public function rubric(): RubricRequestBuilder
    {
        return new RubricRequestBuilder($this->client, $this->requestUrl . '/rubric');
    }
    /**
     * Navigate to submissions
     *
     * @return SubmissionsRequestBuilder
     */
    public function submissions(): SubmissionsRequestBuilder
    {
        return new SubmissionsRequestBuilder($this->client, $this->requestUrl . '/submissions');
    }
}
