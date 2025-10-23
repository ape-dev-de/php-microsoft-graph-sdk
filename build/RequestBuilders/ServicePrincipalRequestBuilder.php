<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ServicePrincipal;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppManagementPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppRoleAssignedToRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AppRoleAssignmentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ClaimsMappingPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CreatedObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DelegatedPermissionClassificationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\EndpointsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\FederatedIdentityCredentialsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\HomeRealmDiscoveryPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\MemberOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AddKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AddPasswordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AddTokenSigningCertificateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RemoveKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RemovePasswordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Oauth2PermissionGrantsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OwnedObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\OwnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RemoteDesktopSecurityConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SynchronizationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TokenIssuancePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TokenLifetimePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TransitiveMemberOfRequestBuilder;

/**
 * Request builder for {servicePrincipal-id}
 */
class ServicePrincipalRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get servicePrincipal
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ServicePrincipal
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ServicePrincipal
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ServicePrincipal
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
        return new ServicePrincipal($data);
    }
    /**
     * Upsert servicePrincipal
     * @param ServicePrincipal $body Request body
     * @return ServicePrincipal
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ServicePrincipal $body): ServicePrincipal
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ServicePrincipal
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new ServicePrincipal($data);
    }
    /**
     * Delete servicePrincipal
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to appManagementPolicies
     *
     * @return AppManagementPoliciesRequestBuilder
     */
    public function appManagementPolicies(): AppManagementPoliciesRequestBuilder
    {
        return new AppManagementPoliciesRequestBuilder($this->client, $this->requestUrl . '/appManagementPolicies');
    }
    /**
     * Navigate to appRoleAssignedTo
     *
     * @return AppRoleAssignedToRequestBuilder
     */
    public function appRoleAssignedTo(): AppRoleAssignedToRequestBuilder
    {
        return new AppRoleAssignedToRequestBuilder($this->client, $this->requestUrl . '/appRoleAssignedTo');
    }
    /**
     * Navigate to appRoleAssignments
     *
     * @return AppRoleAssignmentsRequestBuilder
     */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder
    {
        return new AppRoleAssignmentsRequestBuilder($this->client, $this->requestUrl . '/appRoleAssignments');
    }
    /**
     * Navigate to claimsMappingPolicies
     *
     * @return ClaimsMappingPoliciesRequestBuilder
     */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder
    {
        return new ClaimsMappingPoliciesRequestBuilder($this->client, $this->requestUrl . '/claimsMappingPolicies');
    }
    /**
     * Navigate to createdObjects
     *
     * @return CreatedObjectsRequestBuilder
     */
    public function createdObjects(): CreatedObjectsRequestBuilder
    {
        return new CreatedObjectsRequestBuilder($this->client, $this->requestUrl . '/createdObjects');
    }
    /**
     * Navigate to delegatedPermissionClassifications
     *
     * @return DelegatedPermissionClassificationsRequestBuilder
     */
    public function delegatedPermissionClassifications(): DelegatedPermissionClassificationsRequestBuilder
    {
        return new DelegatedPermissionClassificationsRequestBuilder($this->client, $this->requestUrl . '/delegatedPermissionClassifications');
    }
    /**
     * Navigate to endpoints
     *
     * @return EndpointsRequestBuilder
     */
    public function endpoints(): EndpointsRequestBuilder
    {
        return new EndpointsRequestBuilder($this->client, $this->requestUrl . '/endpoints');
    }
    /**
     * Navigate to federatedIdentityCredentials
     *
     * @return FederatedIdentityCredentialsRequestBuilder
     */
    public function federatedIdentityCredentials(): FederatedIdentityCredentialsRequestBuilder
    {
        return new FederatedIdentityCredentialsRequestBuilder($this->client, $this->requestUrl . '/federatedIdentityCredentials');
    }
    /**
     * Navigate to homeRealmDiscoveryPolicies
     *
     * @return HomeRealmDiscoveryPoliciesRequestBuilder
     */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder
    {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->client, $this->requestUrl . '/homeRealmDiscoveryPolicies');
    }
    /**
     * Navigate to memberOf
     *
     * @return MemberOfRequestBuilder
     */
    public function memberOf(): MemberOfRequestBuilder
    {
        return new MemberOfRequestBuilder($this->client, $this->requestUrl . '/memberOf');
    }
    /**
     * Navigate to addKey
     *
     * @return AddKeyRequestBuilder
     */
    public function addKey(): AddKeyRequestBuilder
    {
        return new AddKeyRequestBuilder($this->client, $this->requestUrl . '/addKey');
    }
    /**
     * Navigate to addPassword
     *
     * @return AddPasswordRequestBuilder
     */
    public function addPassword(): AddPasswordRequestBuilder
    {
        return new AddPasswordRequestBuilder($this->client, $this->requestUrl . '/addPassword');
    }
    /**
     * Navigate to addTokenSigningCertificate
     *
     * @return AddTokenSigningCertificateRequestBuilder
     */
    public function addTokenSigningCertificate(): AddTokenSigningCertificateRequestBuilder
    {
        return new AddTokenSigningCertificateRequestBuilder($this->client, $this->requestUrl . '/addTokenSigningCertificate');
    }
    /**
     * Navigate to checkMemberGroups
     *
     * @return CheckMemberGroupsRequestBuilder
     */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder
    {
        return new CheckMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/checkMemberGroups');
    }
    /**
     * Navigate to checkMemberObjects
     *
     * @return CheckMemberObjectsRequestBuilder
     */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder
    {
        return new CheckMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/checkMemberObjects');
    }
    /**
     * Navigate to getMemberGroups
     *
     * @return GetMemberGroupsRequestBuilder
     */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder
    {
        return new GetMemberGroupsRequestBuilder($this->client, $this->requestUrl . '/getMemberGroups');
    }
    /**
     * Navigate to getMemberObjects
     *
     * @return GetMemberObjectsRequestBuilder
     */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder
    {
        return new GetMemberObjectsRequestBuilder($this->client, $this->requestUrl . '/getMemberObjects');
    }
    /**
     * Navigate to removeKey
     *
     * @return RemoveKeyRequestBuilder
     */
    public function removeKey(): RemoveKeyRequestBuilder
    {
        return new RemoveKeyRequestBuilder($this->client, $this->requestUrl . '/removeKey');
    }
    /**
     * Navigate to removePassword
     *
     * @return RemovePasswordRequestBuilder
     */
    public function removePassword(): RemovePasswordRequestBuilder
    {
        return new RemovePasswordRequestBuilder($this->client, $this->requestUrl . '/removePassword');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to oauth2PermissionGrants
     *
     * @return Oauth2PermissionGrantsRequestBuilder
     */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder
    {
        return new Oauth2PermissionGrantsRequestBuilder($this->client, $this->requestUrl . '/oauth2PermissionGrants');
    }
    /**
     * Navigate to ownedObjects
     *
     * @return OwnedObjectsRequestBuilder
     */
    public function ownedObjects(): OwnedObjectsRequestBuilder
    {
        return new OwnedObjectsRequestBuilder($this->client, $this->requestUrl . '/ownedObjects');
    }
    /**
     * Navigate to owners
     *
     * @return OwnersRequestBuilder
     */
    public function owners(): OwnersRequestBuilder
    {
        return new OwnersRequestBuilder($this->client, $this->requestUrl . '/owners');
    }
    /**
     * Navigate to remoteDesktopSecurityConfiguration
     *
     * @return RemoteDesktopSecurityConfigurationRequestBuilder
     */
    public function remoteDesktopSecurityConfiguration(): RemoteDesktopSecurityConfigurationRequestBuilder
    {
        return new RemoteDesktopSecurityConfigurationRequestBuilder($this->client, $this->requestUrl . '/remoteDesktopSecurityConfiguration');
    }
    /**
     * Navigate to synchronization
     *
     * @return SynchronizationRequestBuilder
     */
    public function synchronization(): SynchronizationRequestBuilder
    {
        return new SynchronizationRequestBuilder($this->client, $this->requestUrl . '/synchronization');
    }
    /**
     * Navigate to tokenIssuancePolicies
     *
     * @return TokenIssuancePoliciesRequestBuilder
     */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder
    {
        return new TokenIssuancePoliciesRequestBuilder($this->client, $this->requestUrl . '/tokenIssuancePolicies');
    }
    /**
     * Navigate to tokenLifetimePolicies
     *
     * @return TokenLifetimePoliciesRequestBuilder
     */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder
    {
        return new TokenLifetimePoliciesRequestBuilder($this->client, $this->requestUrl . '/tokenLifetimePolicies');
    }
    /**
     * Navigate to transitiveMemberOf
     *
     * @return TransitiveMemberOfRequestBuilder
     */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder
    {
        return new TransitiveMemberOfRequestBuilder($this->client, $this->requestUrl . '/transitiveMemberOf');
    }
}
