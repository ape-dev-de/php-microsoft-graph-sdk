<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceRun;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TaskProcessingResultsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UserProcessingResultsRequestBuilder;

/**
 * Request builder for {run-id}
 */
class RunRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get run
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceRun
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceRun
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceRun
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
