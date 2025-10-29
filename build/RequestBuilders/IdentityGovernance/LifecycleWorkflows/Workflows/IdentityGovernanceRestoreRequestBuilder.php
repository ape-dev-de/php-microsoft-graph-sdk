<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceWorkflow;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/microsoft.graph.identityGovernance.restore
 */
class IdentityGovernanceRestoreRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action restore
     * @param IdentityGovernanceWorkflow|\stdClass $body Request body
     * @return IdentityGovernanceWorkflow|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityGovernanceWorkflow|\stdClass $body): IdentityGovernanceWorkflow|\stdClass
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceWorkflow|\stdClass
     */
    private function deserializePost(string $body): mixed
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
}
