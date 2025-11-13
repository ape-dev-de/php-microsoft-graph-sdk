<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\TaskReports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTaskReport;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\TaskReports\TaskRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\TaskReports\TaskDefinitionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\TaskReports\TaskProcessingResultsRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/taskReports/{taskReport-id}
 */
class TaskReportRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get taskReports from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceTaskReport|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceTaskReport|null
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
     * Deserialize response to IdentityGovernanceTaskReport|null
     */
    private function deserializeGet(string $body): IdentityGovernanceTaskReport|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceTaskReport($data);
    }
    /**
     * Navigate to task
     *
     * @return TaskRequestBuilder
     */
    public function task(): TaskRequestBuilder
    {
        return new TaskRequestBuilder($this->client, $this->requestUrl . '/task');
    }
    /**
     * Navigate to taskDefinition
     *
     * @return TaskDefinitionRequestBuilder
     */
    public function taskDefinition(): TaskDefinitionRequestBuilder
    {
        return new TaskDefinitionRequestBuilder($this->client, $this->requestUrl . '/taskDefinition');
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
