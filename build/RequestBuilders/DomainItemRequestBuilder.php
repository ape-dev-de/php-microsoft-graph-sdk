<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Domain;

/**
 * Request builder for individual Domain item
 */
class DomainItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Domain item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Domain
     */
    public function get(?array $queryParameters = null): Domain
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Domain::class);
    }

    /**
     * Update Domain item
     *
     * @param Domain $item The item with updated properties
     * @return Domain
     */
    public function patch(Domain $item): Domain
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Domain::class);
    }

    /**
     * Delete item
     *
     * @return void
     */
    public function delete(): void
    {
        $this->client->delete($this->getFullPath());
    }

    /**
     * Get domainNameReferences request builder
     *
     * @return DomainNameReferencesRequestBuilder
     */
    public function domainNameReferences(): DomainNameReferencesRequestBuilder
    {
        return new DomainNameReferencesRequestBuilder($this->client, $this->buildPath('domainNameReferences'));
    }

    /**
     * Get federationConfiguration request builder
     *
     * @return FederationConfigurationRequestBuilder
     */
    public function federationConfiguration(): FederationConfigurationRequestBuilder
    {
        return new FederationConfigurationRequestBuilder($this->client, $this->buildPath('federationConfiguration'));
    }

    /**
     * Get forceDelete request builder
     *
     * @return ForceDeleteRequestBuilder
     */
    public function forceDelete(): ForceDeleteRequestBuilder
    {
        return new ForceDeleteRequestBuilder($this->client, $this->buildPath('forceDelete'));
    }

    /**
     * Get promote request builder
     *
     * @return PromoteRequestBuilder
     */
    public function promote(): PromoteRequestBuilder
    {
        return new PromoteRequestBuilder($this->client, $this->buildPath('promote'));
    }

    /**
     * Get verify request builder
     *
     * @return VerifyRequestBuilder
     */
    public function verify(): VerifyRequestBuilder
    {
        return new VerifyRequestBuilder($this->client, $this->buildPath('verify'));
    }

    /**
     * Get rootDomain request builder
     *
     * @return RootDomainRequestBuilder
     */
    public function rootDomain(): RootDomainRequestBuilder
    {
        return new RootDomainRequestBuilder($this->client, $this->buildPath('rootDomain'));
    }

    /**
     * Get serviceConfigurationRecords request builder
     *
     * @return ServiceConfigurationRecordsRequestBuilder
     */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder
    {
        return new ServiceConfigurationRecordsRequestBuilder($this->client, $this->buildPath('serviceConfigurationRecords'));
    }

    /**
     * Get verificationDnsRecords request builder
     *
     * @return VerificationDnsRecordsRequestBuilder
     */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder
    {
        return new VerificationDnsRecordsRequestBuilder($this->client, $this->buildPath('verificationDnsRecords'));
    }

}
