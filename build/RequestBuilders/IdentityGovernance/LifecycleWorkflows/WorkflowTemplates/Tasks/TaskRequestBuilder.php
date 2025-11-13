<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Tasks;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTask;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\WorkflowTemplates\Tasks\TaskProcessingResultsRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflowTemplates/{workflowTemplate-id}/tasks/{task-id}
 */
class TaskRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get tasks from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceTask|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceTask|null
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
     * Deserialize response to IdentityGovernanceTask|null
     */
    private function deserializeGet(string $body): IdentityGovernanceTask|null    {
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
     * Navigate to taskProcessingResults
     *
     * @return TaskProcessingResultsRequestBuilder
     */
    public function taskProcessingResults(): TaskProcessingResultsRequestBuilder
    {
        return new TaskProcessingResultsRequestBuilder($this->client, $this->requestUrl . '/taskProcessingResults');
    }
}
