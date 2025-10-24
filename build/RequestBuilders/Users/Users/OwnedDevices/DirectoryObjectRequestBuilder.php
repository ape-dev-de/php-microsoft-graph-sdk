<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OwnedDevices;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OwnedDevices\GraphAppRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OwnedDevices\GraphDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Users\OwnedDevices\GraphEndpointRequestBuilder;

/**
 * Request builder for /users/{user-id}/ownedDevices/{directoryObject-id}
 */
class DirectoryObjectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ownedDevices from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param string|null $consistencyLevel Indicates the requested consistency level. Documentation URL: https://docs.microsoft.com/graph/aad-advanced-queries
     * @return DirectoryObject
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?string $consistencyLevel = null): DirectoryObject
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
     * Deserialize response to DirectoryObject
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
        return new DirectoryObject($data);
    }
    /**
     * Navigate to graph.appRoleAssignment
     *
     * @return GraphAppRoleAssignmentRequestBuilder
     */
    public function graphAppRoleAssignment(): GraphAppRoleAssignmentRequestBuilder
    {
        return new GraphAppRoleAssignmentRequestBuilder($this->client, $this->requestUrl . '/graph.appRoleAssignment');
    }
    /**
     * Navigate to graph.device
     *
     * @return GraphDeviceRequestBuilder
     */
    public function graphDevice(): GraphDeviceRequestBuilder
    {
        return new GraphDeviceRequestBuilder($this->client, $this->requestUrl . '/graph.device');
    }
    /**
     * Navigate to graph.endpoint
     *
     * @return GraphEndpointRequestBuilder
     */
    public function graphEndpoint(): GraphEndpointRequestBuilder
    {
        return new GraphEndpointRequestBuilder($this->client, $this->requestUrl . '/graph.endpoint');
    }
}
