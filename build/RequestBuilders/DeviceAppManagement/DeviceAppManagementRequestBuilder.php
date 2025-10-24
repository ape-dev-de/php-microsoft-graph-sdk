<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAppManagement;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\AndroidManagedAppProtectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\DefaultManagedAppProtectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\IosManagedAppProtectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\ManagedAppPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\ManagedAppRegistrationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\ManagedAppStatusesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\ManagedEBooksRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MdmWindowsInformationProtectionPoliciesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\SyncMicrosoftStoreForBusinessAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileAppCategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileAppConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileAppRelationshipsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\MobileAppsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\TargetedManagedAppConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\VppTokensRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\DeviceAppManagement\WindowsInformationProtectionPoliciesRequestBuilder;

/**
 * Request builder for /deviceAppManagement
 */
class DeviceAppManagementRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get deviceAppManagement
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DeviceAppManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DeviceAppManagement
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
     * Deserialize response to DeviceAppManagement
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
        return new DeviceAppManagement($data);
    }
    /**
     * Update deviceAppManagement
     * @param DeviceAppManagement $body Request body
     * @return DeviceAppManagement
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DeviceAppManagement $body): DeviceAppManagement
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DeviceAppManagement
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
        return new DeviceAppManagement($data);
    }
    /**
     * Navigate to androidManagedAppProtections
     *
     * @return AndroidManagedAppProtectionsRequestBuilder
     */
    public function androidManagedAppProtections(): AndroidManagedAppProtectionsRequestBuilder
    {
        return new AndroidManagedAppProtectionsRequestBuilder($this->client, $this->requestUrl . '/androidManagedAppProtections');
    }
    /**
     * Navigate to defaultManagedAppProtections
     *
     * @return DefaultManagedAppProtectionsRequestBuilder
     */
    public function defaultManagedAppProtections(): DefaultManagedAppProtectionsRequestBuilder
    {
        return new DefaultManagedAppProtectionsRequestBuilder($this->client, $this->requestUrl . '/defaultManagedAppProtections');
    }
    /**
     * Navigate to iosManagedAppProtections
     *
     * @return IosManagedAppProtectionsRequestBuilder
     */
    public function iosManagedAppProtections(): IosManagedAppProtectionsRequestBuilder
    {
        return new IosManagedAppProtectionsRequestBuilder($this->client, $this->requestUrl . '/iosManagedAppProtections');
    }
    /**
     * Navigate to managedAppPolicies
     *
     * @return ManagedAppPoliciesRequestBuilder
     */
    public function managedAppPolicies(): ManagedAppPoliciesRequestBuilder
    {
        return new ManagedAppPoliciesRequestBuilder($this->client, $this->requestUrl . '/managedAppPolicies');
    }
    /**
     * Navigate to managedAppRegistrations
     *
     * @return ManagedAppRegistrationsRequestBuilder
     */
    public function managedAppRegistrations(): ManagedAppRegistrationsRequestBuilder
    {
        return new ManagedAppRegistrationsRequestBuilder($this->client, $this->requestUrl . '/managedAppRegistrations');
    }
    /**
     * Navigate to managedAppStatuses
     *
     * @return ManagedAppStatusesRequestBuilder
     */
    public function managedAppStatuses(): ManagedAppStatusesRequestBuilder
    {
        return new ManagedAppStatusesRequestBuilder($this->client, $this->requestUrl . '/managedAppStatuses');
    }
    /**
     * Navigate to managedEBooks
     *
     * @return ManagedEBooksRequestBuilder
     */
    public function managedEBooks(): ManagedEBooksRequestBuilder
    {
        return new ManagedEBooksRequestBuilder($this->client, $this->requestUrl . '/managedEBooks');
    }
    /**
     * Navigate to mdmWindowsInformationProtectionPolicies
     *
     * @return MdmWindowsInformationProtectionPoliciesRequestBuilder
     */
    public function mdmWindowsInformationProtectionPolicies(): MdmWindowsInformationProtectionPoliciesRequestBuilder
    {
        return new MdmWindowsInformationProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/mdmWindowsInformationProtectionPolicies');
    }
    /**
     * Navigate to syncMicrosoftStoreForBusinessApps
     *
     * @return SyncMicrosoftStoreForBusinessAppsRequestBuilder
     */
    public function syncMicrosoftStoreForBusinessApps(): SyncMicrosoftStoreForBusinessAppsRequestBuilder
    {
        return new SyncMicrosoftStoreForBusinessAppsRequestBuilder($this->client, $this->requestUrl . '/syncMicrosoftStoreForBusinessApps');
    }
    /**
     * Navigate to mobileAppCategories
     *
     * @return MobileAppCategoriesRequestBuilder
     */
    public function mobileAppCategories(): MobileAppCategoriesRequestBuilder
    {
        return new MobileAppCategoriesRequestBuilder($this->client, $this->requestUrl . '/mobileAppCategories');
    }
    /**
     * Navigate to mobileAppConfigurations
     *
     * @return MobileAppConfigurationsRequestBuilder
     */
    public function mobileAppConfigurations(): MobileAppConfigurationsRequestBuilder
    {
        return new MobileAppConfigurationsRequestBuilder($this->client, $this->requestUrl . '/mobileAppConfigurations');
    }
    /**
     * Navigate to mobileAppRelationships
     *
     * @return MobileAppRelationshipsRequestBuilder
     */
    public function mobileAppRelationships(): MobileAppRelationshipsRequestBuilder
    {
        return new MobileAppRelationshipsRequestBuilder($this->client, $this->requestUrl . '/mobileAppRelationships');
    }
    /**
     * Navigate to mobileApps
     *
     * @return MobileAppsRequestBuilder
     */
    public function mobileApps(): MobileAppsRequestBuilder
    {
        return new MobileAppsRequestBuilder($this->client, $this->requestUrl . '/mobileApps');
    }
    /**
     * Navigate to targetedManagedAppConfigurations
     *
     * @return TargetedManagedAppConfigurationsRequestBuilder
     */
    public function targetedManagedAppConfigurations(): TargetedManagedAppConfigurationsRequestBuilder
    {
        return new TargetedManagedAppConfigurationsRequestBuilder($this->client, $this->requestUrl . '/targetedManagedAppConfigurations');
    }
    /**
     * Navigate to vppTokens
     *
     * @return VppTokensRequestBuilder
     */
    public function vppTokens(): VppTokensRequestBuilder
    {
        return new VppTokensRequestBuilder($this->client, $this->requestUrl . '/vppTokens');
    }
    /**
     * Navigate to windowsInformationProtectionPolicies
     *
     * @return WindowsInformationProtectionPoliciesRequestBuilder
     */
    public function windowsInformationProtectionPolicies(): WindowsInformationProtectionPoliciesRequestBuilder
    {
        return new WindowsInformationProtectionPoliciesRequestBuilder($this->client, $this->requestUrl . '/windowsInformationProtectionPolicies');
    }
}
