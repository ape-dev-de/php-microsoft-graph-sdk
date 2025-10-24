<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers\RefRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers\GraphAppRoleAssignmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers\GraphEndpointRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers\GraphServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Devices\Devices\RegisteredUsers\GraphUserRequestBuilder;

/**
 * Request builder for /devices/{device-id}/registeredUsers/{directoryObject-id}
 */
class DirectoryObjectRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Navigate to $ref
     *
     * @return RefRequestBuilder
     */
    public function ref(): RefRequestBuilder
    {
        return new RefRequestBuilder($this->client, $this->requestUrl . '/$ref');
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
     * Navigate to graph.servicePrincipal
     *
     * @return GraphServicePrincipalRequestBuilder
     */
    public function graphServicePrincipal(): GraphServicePrincipalRequestBuilder
    {
        return new GraphServicePrincipalRequestBuilder($this->client, $this->requestUrl . '/graph.servicePrincipal');
    }
    /**
     * Navigate to graph.user
     *
     * @return GraphUserRequestBuilder
     */
    public function graphUser(): GraphUserRequestBuilder
    {
        return new GraphUserRequestBuilder($this->client, $this->requestUrl . '/graph.user');
    }
}
