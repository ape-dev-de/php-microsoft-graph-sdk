<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\EducationSubmission;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\ExcuseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\ReassignRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\ReturnModelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\SetUpResourcesFolderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\SubmitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\UnsubmitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\OutcomesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\ResourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Me\Assignments\Submissions\SubmittedResourcesRequestBuilder;

/**
 * Request builder for /education/me/assignments/{educationAssignment-id}/submissions/{educationSubmission-id}
 */
class EducationSubmissionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get submissions from education
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return EducationSubmission|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): EducationSubmission|null
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
     * Deserialize response to EducationSubmission|null
     */
    private function deserializeGet(string $body): EducationSubmission|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationSubmission($data);
    }
    /**
     * Update the navigation property submissions in education
     * @param EducationSubmission $body Request body
     * @return EducationSubmission|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(EducationSubmission $body): EducationSubmission|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to EducationSubmission|null
     */
    private function deserializePatch(string $body): EducationSubmission|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new EducationSubmission($data);
    }
    /**
     * Delete navigation property submissions for education
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
     * Navigate to excuse
     *
     * @return ExcuseRequestBuilder
     */
    public function excuse(): ExcuseRequestBuilder
    {
        return new ExcuseRequestBuilder($this->client, $this->requestUrl . '/excuse');
    }
    /**
     * Navigate to reassign
     *
     * @return ReassignRequestBuilder
     */
    public function reassign(): ReassignRequestBuilder
    {
        return new ReassignRequestBuilder($this->client, $this->requestUrl . '/reassign');
    }
    /**
     * Navigate to return
     *
     * @return ReturnModelRequestBuilder
     */
    public function returnModel(): ReturnModelRequestBuilder
    {
        return new ReturnModelRequestBuilder($this->client, $this->requestUrl . '/return');
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
     * Navigate to submit
     *
     * @return SubmitRequestBuilder
     */
    public function submit(): SubmitRequestBuilder
    {
        return new SubmitRequestBuilder($this->client, $this->requestUrl . '/submit');
    }
    /**
     * Navigate to unsubmit
     *
     * @return UnsubmitRequestBuilder
     */
    public function unsubmit(): UnsubmitRequestBuilder
    {
        return new UnsubmitRequestBuilder($this->client, $this->requestUrl . '/unsubmit');
    }
    /**
     * Navigate to outcomes
     *
     * @return OutcomesRequestBuilder
     */
    public function outcomes(): OutcomesRequestBuilder
    {
        return new OutcomesRequestBuilder($this->client, $this->requestUrl . '/outcomes');
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
     * Navigate to submittedResources
     *
     * @return SubmittedResourcesRequestBuilder
     */
    public function submittedResources(): SubmittedResourcesRequestBuilder
    {
        return new SubmittedResourcesRequestBuilder($this->client, $this->requestUrl . '/submittedResources');
    }
}
