<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\MemberOf\GraphadministrativeUnit;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /devices/{device-id}/memberOf/graph.administrativeUnit/$count
 */
class CountRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the number of the resource
     *
     * @param string|null $consistencyLevel Indicates the requested consistency level. Documentation URL: https://docs.microsoft.com/graph/aad-advanced-queries
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @return int|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?string $consistencyLevel = null, ?string $search = null, ?string $filter = null): int|null
    {
        $queryParams = [];
        if ($consistencyLevel !== null && $consistencyLevel !== '') {
            $queryParams['ConsistencyLevel'] = $consistencyLevel;
        }
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
