<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\Workflows\TaskReports;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityGovernanceTaskReportSummary;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/workflows/{workflow-id}/taskReports/microsoft.graph.identityGovernance.summary(startDateTime={startDateTime},endDateTime={endDateTime})
 */
class MicrosoftgraphidentityGovernancesummarystartDateTimestartDateTimeendDateTimeendDateTimeRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function summary
     * @return IdentityGovernanceTaskReportSummary|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): IdentityGovernanceTaskReportSummary|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to IdentityGovernanceTaskReportSummary|\stdClass|null
     */
    private function deserializeGet(string $body): IdentityGovernanceTaskReportSummary|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityGovernanceTaskReportSummary($data);
    }
}
