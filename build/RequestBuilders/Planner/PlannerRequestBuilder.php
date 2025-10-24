<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Planner;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\BucketsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\PlansRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Planner\TasksRequestBuilder;

/**
 * Request builder for /planner
 */
class PlannerRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get planner
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Planner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Planner
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
     * Deserialize response to Planner
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
        return new Planner($data);
    }
    /**
     * Update planner
     * @param Planner $body Request body
     * @return Planner
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Planner $body): Planner
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Planner
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
        return new Planner($data);
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
     * Navigate to plans
     *
     * @return PlansRequestBuilder
     */
    public function plans(): PlansRequestBuilder
    {
        return new PlansRequestBuilder($this->client, $this->requestUrl . '/plans');
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
