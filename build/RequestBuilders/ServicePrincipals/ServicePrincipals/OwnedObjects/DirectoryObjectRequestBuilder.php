<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects\GraphApplicationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects\GraphAppRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects\GraphEndpointRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects\GraphGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ServicePrincipals\ServicePrincipals\OwnedObjects\GraphServicePrincipalRequestBuilder;

/**
 * Request builder for /servicePrincipals/{servicePrincipal-id}/ownedObjects/{directoryObject-id}
 */
class DirectoryObjectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ownedObjects from servicePrincipals
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DirectoryObject
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DirectoryObject
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
     * Navigate to graph.application
     *
     * @return GraphApplicationRequestBuilder
     */
    public function graphApplication(): GraphApplicationRequestBuilder
    {
        return new GraphApplicationRequestBuilder($this->client, $this->requestUrl . '/graph.application');
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
     * Navigate to graph.endpoint
     *
     * @return GraphEndpointRequestBuilder
     */
    public function graphEndpoint(): GraphEndpointRequestBuilder
    {
        return new GraphEndpointRequestBuilder($this->client, $this->requestUrl . '/graph.endpoint');
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
    /**
     * Navigate to graph.servicePrincipal
     *
     * @return GraphServicePrincipalRequestBuilder
     */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder
    {
        return new GraphServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/graph.servicePrincipal');
    }
}
