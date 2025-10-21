<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipal;

/**
 * Request builder for individual ServicePrincipal item
 */
class ServicePrincipalItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get ServicePrincipal item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return ServicePrincipal
     */
    public function get(?array $queryParameters = null): ServicePrincipal
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, ServicePrincipal::class);
    }

    /**
     * Update ServicePrincipal item
     *
     * @param ServicePrincipal $item The item with updated properties
     * @return ServicePrincipal
     */
    public function patch(ServicePrincipal $item): ServicePrincipal
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, ServicePrincipal::class);
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
     * Get appRoleAssignedTo request builder
     *
     * @return AppRoleAssignedToRequestBuilder
     */
    public function appRoleAssignedTo(): AppRoleAssignedToRequestBuilder
    {
        return new AppRoleAssignedToRequestBuilder($this->client, $this->buildPath('appRoleAssignedTo'));
    }

    /**
     * Get appRoleAssignments request builder
     *
     * @return AppRoleAssignmentsRequestBuilder
     */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder
    {
        return new AppRoleAssignmentsRequestBuilder($this->client, $this->buildPath('appRoleAssignments'));
    }

    /**
     * Get claimsMappingPolicies request builder
     *
     * @return ClaimsMappingPoliciesRequestBuilder
     */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder
    {
        return new ClaimsMappingPoliciesRequestBuilder($this->client, $this->buildPath('claimsMappingPolicies'));
    }

    /**
     * Get createdObjects request builder
     *
     * @return CreatedObjectsRequestBuilder
     */
    public function createdObjects(): CreatedObjectsRequestBuilder
    {
        return new CreatedObjectsRequestBuilder($this->client, $this->buildPath('createdObjects'));
    }

    /**
     * Get delegatedPermissionClassifications request builder
     *
     * @return DelegatedPermissionClassificationsRequestBuilder
     */
    public function delegatedPermissionClassifications(): DelegatedPermissionClassificationsRequestBuilder
    {
        return new DelegatedPermissionClassificationsRequestBuilder($this->client, $this->buildPath('delegatedPermissionClassifications'));
    }

    /**
     * Get endpoints request builder
     *
     * @return EndpointsRequestBuilder
     */
    public function endpoints(): EndpointsRequestBuilder
    {
        return new EndpointsRequestBuilder($this->client, $this->buildPath('endpoints'));
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
     * Get memberOf request builder
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->buildPath('memberOf'));
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
     * Get addTokenSigningCertificate request builder
     *
     * @return AddTokenSigningCertificateRequestBuilder
     */
    public function addTokenSigningCertificate(): AddTokenSigningCertificateRequestBuilder
    {
        return new AddTokenSigningCertificateRequestBuilder($this->client, $this->buildPath('addTokenSigningCertificate'));
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
     * Get oauth2PermissionGrants request builder
     *
     * @return Oauth2PermissionGrantsRequestBuilder
     */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder
    {
        return new Oauth2PermissionGrantsRequestBuilder($this->client, $this->buildPath('oauth2PermissionGrants'));
    }

    /**
     * Get ownedObjects request builder
     *
     * @return OwnedObjectsRequestBuilder
     */
    public function ownedObjects(): OwnedObjectsRequestBuilder
    {
        return new OwnedObjectsRequestBuilder($this->client, $this->buildPath('ownedObjects'));
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
     * Get remoteDesktopSecurityConfiguration request builder
     *
     * @return RemoteDesktopSecurityConfigurationRequestBuilder
     */
    public function remoteDesktopSecurityConfiguration(): RemoteDesktopSecurityConfigurationRequestBuilder
    {
        return new RemoteDesktopSecurityConfigurationRequestBuilder($this->client, $this->buildPath('remoteDesktopSecurityConfiguration'));
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

    /**
     * Get transitiveMemberOf request builder
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->buildPath('transitiveMemberOf'));
    }

}
