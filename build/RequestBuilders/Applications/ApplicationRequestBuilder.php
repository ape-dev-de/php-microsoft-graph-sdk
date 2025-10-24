<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Application;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\AppManagementPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\CreatedOnBehalfOfRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\ExtensionPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\FederatedIdentityCredentialsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\HomeRealmDiscoveryPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\LogoRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\AddKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\AddPasswordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\RemoveKeyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\RemovePasswordRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\SetVerifiedPublisherRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\UnsetVerifiedPublisherRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\OwnersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\SynchronizationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\TokenIssuancePoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\TokenLifetimePoliciesRequestBuilder;

/**
 * Request builder for /applications/{application-id}
 */
class ApplicationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get application
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Application
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Application
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
     * Deserialize response to Application
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
        return new Application($data);
    }
    /**
     * Upsert application
     * @param Application $body Request body
     * @return Application
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Application $body): Application
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Application
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
        return new Application($data);
    }
    /**
     * Delete application
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to createdOnBehalfOf
     *
     * @return CreatedOnBehalfOfRequestBuilder
     */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder
    {
        return new CreatedOnBehalfOfRequestBuilder($this->client, $this->requestUrl . '/createdOnBehalfOf');
    }
    /**
     * Navigate to extensionProperties
     *
     * @return ExtensionPropertiesRequestBuilder
     */
    public function extensionProperties(): ExtensionPropertiesRequestBuilder
    {
        return new ExtensionPropertiesRequestBuilder($this->client, $this->requestUrl . '/extensionProperties');
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
     * Navigate to logo
     *
     * @return LogoRequestBuilder
     */
    public function logo(): LogoRequestBuilder
    {
        return new LogoRequestBuilder($this->client, $this->requestUrl . '/logo');
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
     * Navigate to setVerifiedPublisher
     *
     * @return SetVerifiedPublisherRequestBuilder
     */
    public function setVerifiedPublisher(): SetVerifiedPublisherRequestBuilder
    {
        return new SetVerifiedPublisherRequestBuilder($this->client, $this->requestUrl . '/setVerifiedPublisher');
    }
    /**
     * Navigate to unsetVerifiedPublisher
     *
     * @return UnsetVerifiedPublisherRequestBuilder
     */
    public function unsetVerifiedPublisher(): UnsetVerifiedPublisherRequestBuilder
    {
        return new UnsetVerifiedPublisherRequestBuilder($this->client, $this->requestUrl . '/unsetVerifiedPublisher');
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
}
