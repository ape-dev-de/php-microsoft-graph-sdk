<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Group;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Teams\Group\ServiceProvisioningErrorsRequestBuilder;

/**
 * Request builder for /teams/{team-id}/group
 */
class GroupRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get group from teams
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Group|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Group|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Group|null
     */
    private function deserializeGet(string $body): Group|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Group($data);
    }
    /**
     * Navigate to serviceProvisioningErrors
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->requestUrl . '/serviceProvisioningErrors');
    }
}
