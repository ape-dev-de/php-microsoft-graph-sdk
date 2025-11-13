<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Versions;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceWorkflowVersion;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Versions\CreatedByRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Versions\LastModifiedByRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Versions\TasksRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow-id}/versions/{workflowVersion-versionNumber}
 */
class WorkflowVersionVersionNumberRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get versions from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceWorkflowVersion|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceWorkflowVersion|null
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
     * Deserialize response to IdentityGovernanceWorkflowVersion|null
     */
    private function deserializeGet(string $body): IdentityGovernanceWorkflowVersion|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceWorkflowVersion($data);
    }
    /**
     * Navigate to createdBy
     *
     * @return CreatedByRequestBuilder
     */
    public function createdBy(): CreatedByRequestBuilder
    {
        return new CreatedByRequestBuilder($this->client, $this->requestUrl . '/createdBy');
    }
    /**
     * Navigate to lastModifiedBy
     *
     * @return LastModifiedByRequestBuilder
     */
    public function lastModifiedBy(): LastModifiedByRequestBuilder
    {
        return new LastModifiedByRequestBuilder($this->client, $this->requestUrl . '/lastModifiedBy');
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
