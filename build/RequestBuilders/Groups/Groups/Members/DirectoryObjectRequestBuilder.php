<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\RefRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphApplicationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphGroupRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphOrgContactRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphServicePrincipalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Groups\Members\GraphUserRequestBuilder;

/**
 * Request builder for /groups/{group-id}/members/{directoryObject-id}
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
     * Navigate to graph.application
     *
     * @return GraphApplicationRequestBuilder
     */
    public function graphApplication(): GraphApplicationRequestBuilder
    {
        return new GraphApplicationRequestBuilder($this->client, $this->requestUrl . '/graph.application');
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
     * Navigate to graph.group
     *
     * @return GraphGroupRequestBuilder
     */
    public function graphGroup(): GraphGroupRequestBuilder
    {
        return new GraphGroupRequestBuilder($this->client, $this->requestUrl . '/graph.group');
    }
    /**
     * Navigate to graph.orgContact
     *
     * @return GraphOrgContactRequestBuilder
     */
    public function graphOrgContact(): GraphOrgContactRequestBuilder
    {
        return new GraphOrgContactRequestBuilder($this->client, $this->requestUrl . '/graph.orgContact');
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
