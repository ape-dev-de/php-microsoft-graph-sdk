<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceUserProcessingResult;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubjectRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TaskProcessingResultsRequestBuilder;

/**
 * Request builder for {userProcessingResult-id}
 */
class UserProcessingResultRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get userProcessingResult
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceUserProcessingResult
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceUserProcessingResult
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
     * Deserialize response to IdentityGovernanceUserProcessingResult
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
        return new IdentityGovernanceUserProcessingResult($data);
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
     * Navigate to taskProcessingResults
     *
     * @return TaskProcessingResultsRequestBuilder
     */
    public function taskProcessingResults(): TaskProcessingResultsRequestBuilder
    {
        return new TaskProcessingResultsRequestBuilder($this->client, $this->requestUrl . '/taskProcessingResults');
    }
}
