<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Organization;

/**
 * Request builder for individual Organization item
 */
class OrganizationItemRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get Organization item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return Organization
     */
    public function get(?array $queryParameters = null): Organization
    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, Organization::class);
    }

    /**
     * Update Organization item
     *
     * @param Organization $item The item with updated properties
     * @return Organization
     */
    public function patch(Organization $item): Organization
    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, Organization::class);
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
     * Get branding request builder
     *
     * @return BrandingRequestBuilder
     */
    public function branding(): BrandingRequestBuilder
    {
        return new BrandingRequestBuilder($this->client, $this->buildPath('branding'));
    }

    /**
     * Get certificateBasedAuthConfiguration request builder
     *
     * @return CertificateBasedAuthConfigurationRequestBuilder
     */
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder
    {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->client, $this->buildPath('certificateBasedAuthConfiguration'));
    }

    /**
     * Get extensions request builder
     *
     * @return ExtensionsRequestBuilder
     */
    public function extensions(): ExtensionsRequestBuilder
    {
        return new ExtensionsRequestBuilder($this->client, $this->buildPath('extensions'));
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
     * Get restore request builder
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->buildPath('restore'));
    }

    /**
     * Get setMobileDeviceManagementAuthority request builder
     *
     * @return SetMobileDeviceManagementAuthorityRequestBuilder
     */
    public function setMobileDeviceManagementAuthority(): SetMobileDeviceManagementAuthorityRequestBuilder
    {
        return new SetMobileDeviceManagementAuthorityRequestBuilder($this->client, $this->buildPath('setMobileDeviceManagementAuthority'));
    }

}
