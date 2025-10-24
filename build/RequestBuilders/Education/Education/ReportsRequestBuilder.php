<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ReportsRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Reports\ReadingAssignmentSubmissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Education\Education\Reports\ReflectCheckInResponsesRequestBuilder;

/**
 * Request builder for /education/reports
 */
class ReportsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get reports from education
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ReportsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ReportsRoot
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
     * Deserialize response to ReportsRoot
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
        return new ReportsRoot($data);
    }
    /**
     * Update the navigation property reports in education
     * @param ReportsRoot $body Request body
     * @return ReportsRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ReportsRoot $body): ReportsRoot
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ReportsRoot
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
        return new ReportsRoot($data);
    }
    /**
     * Delete navigation property reports for education
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
     * Navigate to readingAssignmentSubmissions
     *
     * @return ReadingAssignmentSubmissionsRequestBuilder
     */
    public function readingAssignmentSubmissions(): ReadingAssignmentSubmissionsRequestBuilder
    {
        return new ReadingAssignmentSubmissionsRequestBuilder($this->client, $this->requestUrl . '/readingAssignmentSubmissions');
    }
    /**
     * Navigate to reflectCheckInResponses
     *
     * @return ReflectCheckInResponsesRequestBuilder
     */
    public function reflectCheckInResponses(): ReflectCheckInResponsesRequestBuilder
    {
        return new ReflectCheckInResponsesRequestBuilder($this->client, $this->requestUrl . '/reflectCheckInResponses');
    }
}
