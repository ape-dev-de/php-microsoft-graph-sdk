<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\IdentityGovernance\LifecycleWorkflows\Insights;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceWorkflowsInsightsByCategory;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/insights/microsoft.graph.identityGovernance.workflowsProcessedByCategory(startDateTime={startDateTime},endDateTime={endDateTime})
 */
class MicrosoftgraphidentityGovernanceworkflowsProcessedByCategorystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function workflowsProcessedByCategory
     * @return IdentityGovernanceWorkflowsInsightsByCategory|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): IdentityGovernanceWorkflowsInsightsByCategory|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceWorkflowsInsightsByCategory|\stdClass
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
        return new IdentityGovernanceWorkflowsInsightsByCategory($data);
    }
}
