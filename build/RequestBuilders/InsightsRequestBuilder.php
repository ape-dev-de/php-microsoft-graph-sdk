<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceInsights;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MicrosoftgraphidentityGovernancetopTasksProcessedSummarystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MicrosoftgraphidentityGovernancetopWorkflowsProcessedSummarystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MicrosoftgraphidentityGovernanceworkflowsProcessedByCategorystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MicrosoftgraphidentityGovernanceworkflowsProcessedSummarystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder;

/**
 * Request builder for insights
 */
class InsightsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get insights from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityGovernanceInsights
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityGovernanceInsights
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
     * Deserialize response to IdentityGovernanceInsights
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
        return new IdentityGovernanceInsights($data);
    }
    /**
     * Update the navigation property insights in identityGovernance
     * @param IdentityGovernanceInsights $body Request body
     * @return IdentityGovernanceInsights
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityGovernanceInsights $body): IdentityGovernanceInsights
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceInsights
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
        return new IdentityGovernanceInsights($data);
    }
    /**
     * Delete navigation property insights for identityGovernance
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
}
