<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Runs\UserProcessingResults;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceUserSummary;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow-id}/runs/{run-id}/userProcessingResults/microsoft.graph.identityGovernance.summary(startDateTime={startDateTime},endDateTime={endDateTime})
 */
class MicrosoftgraphidentityGovernancesummarystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function summary
     * @return IdentityGovernanceUserSummary|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): IdentityGovernanceUserSummary|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceUserSummary|\stdClass|null
     */
    private function deserializeGet(string $body): IdentityGovernanceUserSummary|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceUserSummary($data);
    }
}
