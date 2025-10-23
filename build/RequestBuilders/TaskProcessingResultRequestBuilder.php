<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTaskProcessingResult;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernanceResumeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubjectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TaskRequestBuilder;

/**
 * Request builder for {taskProcessingResult-id}
 */
class TaskProcessingResultRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get taskProcessingResults from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceTaskProcessingResult
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceTaskProcessingResult
    {
        $queryParams = [];
        if ($select !== null && $select !== '') {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== '') {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceTaskProcessingResult
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
        return new IdentityGovernanceTaskProcessingResult($data);
    }
    /**
     * Navigate to microsoft.graph.identityGovernance.resume
     *
     * @return IdentityGovernanceResumeRequestBuilder
     */
    public function identityGovernanceResume(): IdentityGovernanceResumeRequestBuilder
    {
        return new IdentityGovernanceResumeRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.identityGovernance.resume');
    }
    /**
     * Navigate to subject
     *
     * @return SubjectRequestBuilder
     */
    public function subject(): SubjectRequestBuilder
    {
        return new SubjectRequestBuilder($this->client, $this->requestUrl . '/subject');
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
}
