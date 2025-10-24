<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks\AssignedToTaskBoardFormatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks\BucketTaskBoardFormatRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks\DetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\Plans\Tasks\ProgressTaskBoardFormatRequestBuilder;

/**
 * Request builder for /planner/plans/{plannerPlan-id}/tasks/{plannerTask-id}
 */
class PlannerTaskRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get tasks from planner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PlannerTask
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PlannerTask
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
     * Deserialize response to PlannerTask
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
        return new PlannerTask($data);
    }
    /**
     * Update the navigation property tasks in planner
     * @param PlannerTask $body Request body
     * @return PlannerTask
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PlannerTask $body): PlannerTask
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PlannerTask
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
        return new PlannerTask($data);
    }
    /**
     * Delete navigation property tasks for planner
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
     * Navigate to assignedToTaskBoardFormat
     *
     * @return AssignedToTaskBoardFormatRequestBuilder
     */
    public function assignedToTaskBoardFormat(): AssignedToTaskBoardFormatRequestBuilder
    {
        return new AssignedToTaskBoardFormatRequestBuilder($this->client, $this->requestUrl . '/assignedToTaskBoardFormat');
    }
    /**
     * Navigate to bucketTaskBoardFormat
     *
     * @return BucketTaskBoardFormatRequestBuilder
     */
    public function bucketTaskBoardFormat(): BucketTaskBoardFormatRequestBuilder
    {
        return new BucketTaskBoardFormatRequestBuilder($this->client, $this->requestUrl . '/bucketTaskBoardFormat');
    }
    /**
     * Navigate to details
     *
     * @return DetailsRequestBuilder
     */
    public function details(): DetailsRequestBuilder
    {
        return new DetailsRequestBuilder($this->client, $this->requestUrl . '/details');
    }
    /**
     * Navigate to progressTaskBoardFormat
     *
     * @return ProgressTaskBoardFormatRequestBuilder
     */
    public function progressTaskBoardFormat(): ProgressTaskBoardFormatRequestBuilder
    {
        return new ProgressTaskBoardFormatRequestBuilder($this->client, $this->requestUrl . '/progressTaskBoardFormat');
    }
}
