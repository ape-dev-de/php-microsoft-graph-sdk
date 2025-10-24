<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceWorkflow;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\CreatedByRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\ExecutionScopeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\LastModifiedByRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\IdentityGovernanceActivateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\IdentityGovernanceCreateNewVersionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\IdentityGovernanceRestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\RunsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\TaskReportsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\TasksRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\UserProcessingResultsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\VersionsRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow-id}
 */
class WorkflowRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deletedItemContainer (a deleted lifecycle workflow)
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceWorkflow
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceWorkflow
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
     * Deserialize response to IdentityGovernanceWorkflow
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
        return new IdentityGovernanceWorkflow($data);
    }
    /**
     * Delete deletedItemContainer (permanently delete a deleted lifecycle workflow)
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
     * Navigate to createdBy
     *
     * @return CreatedByRequestBuilder
     */
    public function createdBy(): CreatedByRequestBuilder
    {
        return new CreatedByRequestBuilder($this->client, $this->requestUrl . '/createdBy');
    }
    /**
     * Navigate to executionScope
     *
     * @return ExecutionScopeRequestBuilder
     */
    public function executionScope(): ExecutionScopeRequestBuilder
    {
        return new ExecutionScopeRequestBuilder($this->client, $this->requestUrl . '/executionScope');
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
     * Navigate to microsoft.graph.identityGovernance.activate
     *
     * @return IdentityGovernanceActivateRequestBuilder
     */
    public function identityGovernanceActivate(): IdentityGovernanceActivateRequestBuilder
    {
        return new IdentityGovernanceActivateRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.identityGovernance.activate');
    }
    /**
     * Navigate to microsoft.graph.identityGovernance.createNewVersion
     *
     * @return IdentityGovernanceCreateNewVersionRequestBuilder
     */
    public function identityGovernanceCreateNewVersion(): IdentityGovernanceCreateNewVersionRequestBuilder
    {
        return new IdentityGovernanceCreateNewVersionRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.identityGovernance.createNewVersion');
    }
    /**
     * Navigate to microsoft.graph.identityGovernance.restore
     *
     * @return IdentityGovernanceRestoreRequestBuilder
     */
    public function identityGovernanceRestore(): IdentityGovernanceRestoreRequestBuilder
    {
        return new IdentityGovernanceRestoreRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.identityGovernance.restore');
    }
    /**
     * Navigate to runs
     *
     * @return RunsRequestBuilder
     */
    public function runs(): RunsRequestBuilder
    {
        return new RunsRequestBuilder($this->client, $this->requestUrl . '/runs');
    }
    /**
     * Navigate to taskReports
     *
     * @return TaskReportsRequestBuilder
     */
    public function taskReports(): TaskReportsRequestBuilder
    {
        return new TaskReportsRequestBuilder($this->client, $this->requestUrl . '/taskReports');
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
    /**
     * Navigate to userProcessingResults
     *
     * @return UserProcessingResultsRequestBuilder
     */
    public function userProcessingResults(): UserProcessingResultsRequestBuilder
    {
        return new UserProcessingResultsRequestBuilder($this->client, $this->requestUrl . '/userProcessingResults');
    }
    /**
     * Navigate to versions
     *
     * @return VersionsRequestBuilder
     */
    public function versions(): VersionsRequestBuilder
    {
        return new VersionsRequestBuilder($this->client, $this->requestUrl . '/versions');
    }
}
