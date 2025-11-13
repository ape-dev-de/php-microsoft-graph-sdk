<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceWorkflow;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/microsoft.graph.identityGovernance.createNewVersion
 */
class IdentityGovernanceCreateNewVersionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action createNewVersion
     * @param IdentityGovernanceWorkflow|\stdClass $body Request body
     * @return IdentityGovernanceWorkflow|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(IdentityGovernanceWorkflow|\stdClass $body): IdentityGovernanceWorkflow|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceWorkflow|\stdClass|null
     */
    private function deserializePost(string $body): IdentityGovernanceWorkflow|\stdClass|null    {
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
