<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceLifecycleWorkflowsContainer;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\DeletedItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\InsightsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\SettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\TaskDefinitionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\WorkflowsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\WorkflowTemplatesRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows
 */
class LifecycleWorkflowsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get lifecycleWorkflows from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceLifecycleWorkflowsContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceLifecycleWorkflowsContainer
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
     * Deserialize response to IdentityGovernanceLifecycleWorkflowsContainer
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
        return new IdentityGovernanceLifecycleWorkflowsContainer($data);
    }
    /**
     * Update the navigation property lifecycleWorkflows in identityGovernance
     * @param IdentityGovernanceLifecycleWorkflowsContainer $body Request body
     * @return IdentityGovernanceLifecycleWorkflowsContainer
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityGovernanceLifecycleWorkflowsContainer $body): IdentityGovernanceLifecycleWorkflowsContainer
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceLifecycleWorkflowsContainer
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
        return new IdentityGovernanceLifecycleWorkflowsContainer($data);
    }
    /**
     * Delete navigation property lifecycleWorkflows for identityGovernance
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
     * Navigate to customTaskExtensions
     *
     * @return CustomTaskExtensionsRequestBuilder
     */
    public function customTaskExtensions(): CustomTaskExtensionsRequestBuilder
    {
        return new CustomTaskExtensionsRequestBuilder($this->client, $this->requestUrl . '/customTaskExtensions');
    }
    /**
     * Navigate to deletedItems
     *
     * @return DeletedItemsRequestBuilder
     */
    public function deletedItems(): DeletedItemsRequestBuilder
    {
        return new DeletedItemsRequestBuilder($this->client, $this->requestUrl . '/deletedItems');
    }
    /**
     * Navigate to insights
     *
     * @return InsightsRequestBuilder
     */
    public function insights(): InsightsRequestBuilder
    {
        return new InsightsRequestBuilder($this->client, $this->requestUrl . '/insights');
    }
    /**
     * Navigate to settings
     *
     * @return SettingsRequestBuilder
     */
    public function settings(): SettingsRequestBuilder
    {
        return new SettingsRequestBuilder($this->client, $this->requestUrl . '/settings');
    }
    /**
     * Navigate to taskDefinitions
     *
     * @return TaskDefinitionsRequestBuilder
     */
    public function taskDefinitions(): TaskDefinitionsRequestBuilder
    {
        return new TaskDefinitionsRequestBuilder($this->client, $this->requestUrl . '/taskDefinitions');
    }
    /**
     * Navigate to workflows
     *
     * @return WorkflowsRequestBuilder
     */
    public function workflows(): WorkflowsRequestBuilder
    {
        return new WorkflowsRequestBuilder($this->client, $this->requestUrl . '/workflows');
    }
    /**
     * Navigate to workflowTemplates
     *
     * @return WorkflowTemplatesRequestBuilder
     */
    public function workflowTemplates(): WorkflowTemplatesRequestBuilder
    {
        return new WorkflowTemplatesRequestBuilder($this->client, $this->requestUrl . '/workflowTemplates');
    }
}
