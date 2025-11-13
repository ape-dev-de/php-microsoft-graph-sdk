<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Tasks\TaskProcessingResults\Subject\ServiceProvisioningErrors;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow-id}/tasks/{task-id}/taskProcessingResults/{taskProcessingResult-id}/subject/serviceProvisioningErrors/$count
 */
class CountRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the number of the resource
     *
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @return int|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?string $search = null, ?string $filter = null): int|null
    {
        $queryParams = [];
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to int|null
     */
    private function deserializeGet(string $body): int|null    {
        if (empty($body)) {
            return null;
        }

        return (int)$body;
    }
}
