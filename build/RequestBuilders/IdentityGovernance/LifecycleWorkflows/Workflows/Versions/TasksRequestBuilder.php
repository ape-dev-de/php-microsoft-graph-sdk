<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Versions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTaskCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Versions\Tasks\TaskRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Versions\Tasks\CountRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/versions/{workflowVersion-versionNumber}/tasks
 */
class TasksRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List tasks (in a workflowVersion)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return IdentityGovernanceTaskCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): IdentityGovernanceTaskCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceTaskCollectionResponse|null
     */
    private function deserializeGet(string $body): IdentityGovernanceTaskCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new IdentityGovernanceTask($item);
        }
        $collection = new IdentityGovernanceTaskCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to tasks for identityGovernance
     * @param IdentityGovernanceTask $body Request body
     * @return IdentityGovernanceTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityGovernanceTask $body): IdentityGovernanceTask|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceTask|null
     */
    private function deserializePost(string $body): IdentityGovernanceTask|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceTask($data);
    }
    /**
     * Get request builder for specific item by ID
     *
     * @param string $taskId The item ID
     * @return TaskRequestBuilder
     */
    public function byId(string $taskId): TaskRequestBuilder
    {
        return new TaskRequestBuilder($this->client, $this->requestUrl . '/' . $taskId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
