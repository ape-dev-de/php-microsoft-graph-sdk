<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Planner\Plans;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PlannerPlan;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Planner\Plans\BucketsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Planner\Plans\DetailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Planner\Plans\TasksRequestBuilder;

/**
 * Request builder for /me/planner/plans/{plannerPlan-id}
 */
class PlannerPlanRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get plans from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PlannerPlan
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PlannerPlan
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
     * Deserialize response to PlannerPlan
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
        return new PlannerPlan($data);
    }
    /**
     * Update the navigation property plans in me
     * @param PlannerPlan $body Request body
     * @return PlannerPlan
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(PlannerPlan $body): PlannerPlan
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to PlannerPlan
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
        return new PlannerPlan($data);
    }
    /**
     * Delete navigation property plans for me
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
     * Navigate to buckets
     *
     * @return BucketsRequestBuilder
     */
    public function buckets(): BucketsRequestBuilder
    {
        return new BucketsRequestBuilder($this->client, $this->requestUrl . '/buckets');
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
     * Navigate to tasks
     *
     * @return TasksRequestBuilder
     */
    public function tasks(): TasksRequestBuilder
    {
        return new TasksRequestBuilder($this->client, $this->requestUrl . '/tasks');
    }
}
