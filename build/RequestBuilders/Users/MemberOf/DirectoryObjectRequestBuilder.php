<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MemberOf;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MemberOf\GraphAdministrativeUnitRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MemberOf\GraphDirectoryRoleRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\MemberOf\GraphGroupRequestBuilder;

/**
 * Request builder for /users/{user-id}/memberOf/{directoryObject-id}
 */
class DirectoryObjectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get memberOf from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $consistencyLevel Indicates the requested consistency level. Documentation URL: https://docs.microsoft.com/graph/aad-advanced-queries
     * @return DirectoryObject|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null): DirectoryObject|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($consistencyLevel !== null && $consistencyLevel !== '') {
            $queryParams['ConsistencyLevel'] = $consistencyLevel;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DirectoryObject|null
     */
    private function deserializeGet(string $body): DirectoryObject|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DirectoryObject($data);
    }
    /**
     * Navigate to graph.administrativeUnit
     *
     * @return GraphAdministrativeUnitRequestBuilder
     */
    public function graphAdministrativeUnit(): GraphAdministrativeUnitRequestBuilder
    {
        return new GraphAdministrativeUnitRequestBuilder($this->client, $this->requestUrl . '/graph.administrativeUnit');
    }
    /**
     * Navigate to graph.directoryRole
     *
     * @return GraphDirectoryRoleRequestBuilder
     */
    public function graphDirectoryRole(): GraphDirectoryRoleRequestBuilder
    {
        return new GraphDirectoryRoleRequestBuilder($this->client, $this->requestUrl . '/graph.directoryRole');
    }
    /**
     * Navigate to graph.group
     *
     * @return GraphGroupRequestBuilder
     */
    public function graphGroup(): GraphGroupRequestBuilder
    {
        return new GraphGroupRequestBuilder($this->client, $this->requestUrl . '/graph.group');
    }
}
