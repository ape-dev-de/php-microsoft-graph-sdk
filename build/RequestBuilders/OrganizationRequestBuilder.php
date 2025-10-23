<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Organization;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BrandingRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CertificateBasedAuthConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ExtensionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CheckMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberGroupsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\GetMemberObjectsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SetMobileDeviceManagementAuthorityRequestBuilder;

/**
 * Request builder for {organization-id}
 */
class OrganizationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get organization
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Organization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Organization
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
     * Deserialize response to Organization
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
        return new Organization($data);
    }
    /**
     * Update organization
     * @param Organization $body Request body
     * @return Organization
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Organization $body): Organization
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Organization
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
        return new Organization($data);
    }
    /**
     * Delete entity from organization
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
     * Navigate to branding
     *
     * @return BrandingRequestBuilder
     */
    public function branding(): BrandingRequestBuilder
    {
        return new BrandingRequestBuilder($this->client, $this->requestUrl . '/branding');
    }
    /**
     * Navigate to certificateBasedAuthConfiguration
     *
     * @return CertificateBasedAuthConfigurationRequestBuilder
     */
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder
    {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->client, $this->requestUrl . '/certificateBasedAuthConfiguration');
    }
    /**
     * Navigate to extensions
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->requestUrl . '/extensions');
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
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to setMobileDeviceManagementAuthority
     *
     * @return SetMobileDeviceManagementAuthorityRequestBuilder
     */
    public function setMobileDeviceManagementAuthority(): SetMobileDeviceManagementAuthorityRequestBuilder
    {
        return new SetMobileDeviceManagementAuthorityRequestBuilder($this->client, $this->requestUrl . '/setMobileDeviceManagementAuthority');
    }
}
