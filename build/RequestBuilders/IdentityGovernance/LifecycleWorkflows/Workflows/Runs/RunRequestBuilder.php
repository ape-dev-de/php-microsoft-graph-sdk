<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Runs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceRun;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Runs\TaskProcessingResultsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\Runs\UserProcessingResultsRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/runs/{run-id}
 */
class RunRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get run
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceRun|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceRun|null
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
     * Deserialize response to IdentityGovernanceRun|null
     */
    private function deserializeGet(string $body): IdentityGovernanceRun|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceRun($data);
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
    /**
     * Navigate to userProcessingResults
     *
     * @return UserProcessingResultsRequestBuilder
     */
    public function userProcessingResults(): UserProcessingResultsRequestBuilder
    {
        return new UserProcessingResultsRequestBuilder($this->client, $this->requestUrl . '/userProcessingResults');
    }
}
