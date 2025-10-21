<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Application;

/**
 * Request builder for individual Application item
 */
class ApplicationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Application item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Application
     */
    public function get(?array $queryParameters = null): Application
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Application::class);
    }

    /**
     * Update Application item
     *
     * @param Application $item The item with updated properties
     * @return Application
     */
    public function patch(Application $item): Application
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Application::class);
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
     * Get appManagementPolicies request builder
     *
     * @return AppManagementPoliciesRequestBuilder
     */
    public function appManagementPolicies(): AppManagementPoliciesRequestBuilder
    {
        return new AppManagementPoliciesRequestBuilder($this->client, $this->buildPath('appManagementPolicies'));
    }

    /**
     * Get createdOnBehalfOf request builder
     *
     * @return CreatedOnBehalfOfRequestBuilder
     */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder
    {
        return new CreatedOnBehalfOfRequestBuilder($this->client, $this->buildPath('createdOnBehalfOf'));
    }

    /**
     * Get extensionProperties request builder
     *
     * @return ExtensionPropertiesRequestBuilder
     */
    public function extensionProperties(): ExtensionPropertiesRequestBuilder
    {
        return new ExtensionPropertiesRequestBuilder($this->client, $this->buildPath('extensionProperties'));
    }

    /**
     * Get federatedIdentityCredentials request builder
     *
     * @return FederatedIdentityCredentialsRequestBuilder
     */
    public function federatedIdentityCredentials(): FederatedIdentityCredentialsRequestBuilder
    {
        return new FederatedIdentityCredentialsRequestBuilder($this->client, $this->buildPath('federatedIdentityCredentials'));
    }

    /**
     * Get homeRealmDiscoveryPolicies request builder
     *
     * @return HomeRealmDiscoveryPoliciesRequestBuilder
     */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder
    {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->client, $this->buildPath('homeRealmDiscoveryPolicies'));
    }

    /**
     * Get logo request builder
     *
     * @return LogoRequestBuilder
     */
    public function logo(): LogoRequestBuilder
    {
        return new LogoRequestBuilder($this->client, $this->buildPath('logo'));
    }

    /**
     * Get addKey request builder
     *
     * @return AddKeyRequestBuilder
     */
    public function addKey(): AddKeyRequestBuilder
    {
        return new AddKeyRequestBuilder($this->client, $this->buildPath('addKey'));
    }

    /**
     * Get addPassword request builder
     *
     * @return AddPasswordRequestBuilder
     */
    public function addPassword(): AddPasswordRequestBuilder
    {
        return new AddPasswordRequestBuilder($this->client, $this->buildPath('addPassword'));
    }

    /**
     * Get checkMemberGroups request builder
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->buildPath('checkMemberGroups'));
    }

    /**
     * Get checkMemberObjects request builder
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->buildPath('checkMemberObjects'));
    }

    /**
     * Get getMemberGroups request builder
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->buildPath('getMemberGroups'));
    }

    /**
     * Get getMemberObjects request builder
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->buildPath('getMemberObjects'));
    }

    /**
     * Get removeKey request builder
     *
     * @return RemoveKeyRequestBuilder
     */
    public function removeKey(): RemoveKeyRequestBuilder
    {
        return new RemoveKeyRequestBuilder($this->client, $this->buildPath('removeKey'));
    }

    /**
     * Get removePassword request builder
     *
     * @return RemovePasswordRequestBuilder
     */
    public function removePassword(): RemovePasswordRequestBuilder
    {
        return new RemovePasswordRequestBuilder($this->client, $this->buildPath('removePassword'));
    }

    /**
     * Get restore request builder
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->buildPath('restore'));
    }

    /**
     * Get setVerifiedPublisher request builder
     *
     * @return SetVerifiedPublisherRequestBuilder
     */
    public function setVerifiedPublisher(): SetVerifiedPublisherRequestBuilder
    {
        return new SetVerifiedPublisherRequestBuilder($this->client, $this->buildPath('setVerifiedPublisher'));
    }

    /**
     * Get unsetVerifiedPublisher request builder
     *
     * @return UnsetVerifiedPublisherRequestBuilder
     */
    public function unsetVerifiedPublisher(): UnsetVerifiedPublisherRequestBuilder
    {
        return new UnsetVerifiedPublisherRequestBuilder($this->client, $this->buildPath('unsetVerifiedPublisher'));
    }

    /**
     * Get owners request builder
     *
     * @return OwnersRequestBuilder
     */
    public function owners(): OwnersRequestBuilder
    {
        return new OwnersRequestBuilder($this->client, $this->buildPath('owners'));
    }

    /**
     * Get synchronization request builder
     *
     * @return SynchronizationRequestBuilder
     */
    public function synchronization(): SynchronizationRequestBuilder
    {
        return new SynchronizationRequestBuilder($this->client, $this->buildPath('synchronization'));
    }

    /**
     * Get tokenIssuancePolicies request builder
     *
     * @return TokenIssuancePoliciesRequestBuilder
     */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder
    {
        return new TokenIssuancePoliciesRequestBuilder($this->client, $this->buildPath('tokenIssuancePolicies'));
    }

    /**
     * Get tokenLifetimePolicies request builder
     *
     * @return TokenLifetimePoliciesRequestBuilder
     */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder
    {
        return new TokenLifetimePoliciesRequestBuilder($this->client, $this->buildPath('tokenLifetimePolicies'));
    }

}
