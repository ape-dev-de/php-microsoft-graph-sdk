<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ManagedDevice;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\DeviceCategoryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\DeviceCompliancePolicyStatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\DeviceConfigurationStatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\LogCollectionRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\BypassActivationLockRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\CleanWindowsDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\DeleteUserFromSharedAppleDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\DisableLostModeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\LocateDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\LogoutSharedAppleDeviceActiveUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\RebootNowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\RecoverPasscodeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\RemoteLockRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\RequestRemoteAssistanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\ResetPasscodeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\RetireRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\ShutDownRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\SyncDeviceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\UpdateWindowsDeviceAccountRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\WindowsDefenderScanRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\WindowsDefenderUpdateSignaturesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\WipeRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\UsersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Me\ManagedDevices\WindowsProtectionStateRequestBuilder;

/**
 * Request builder for /me/managedDevices/{managedDevice-id}
 */
class ManagedDeviceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get managedDevices from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ManagedDevice
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ManagedDevice
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
     * Deserialize response to ManagedDevice
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
        return new ManagedDevice($data);
    }
    /**
     * Update the navigation property managedDevices in me
     * @param ManagedDevice $body Request body
     * @return ManagedDevice
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(ManagedDevice $body): ManagedDevice
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to ManagedDevice
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
        return new ManagedDevice($data);
    }
    /**
     * Delete navigation property managedDevices for me
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
     * Navigate to deviceCategory
     *
     * @return DeviceCategoryRequestBuilder
     */
    public function deviceCategory(): DeviceCategoryRequestBuilder
    {
        return new DeviceCategoryRequestBuilder($this->client, $this->requestUrl . '/deviceCategory');
    }
    /**
     * Navigate to deviceCompliancePolicyStates
     *
     * @return DeviceCompliancePolicyStatesRequestBuilder
     */
    public function deviceCompliancePolicyStates(): DeviceCompliancePolicyStatesRequestBuilder
    {
        return new DeviceCompliancePolicyStatesRequestBuilder($this->client, $this->requestUrl . '/deviceCompliancePolicyStates');
    }
    /**
     * Navigate to deviceConfigurationStates
     *
     * @return DeviceConfigurationStatesRequestBuilder
     */
    public function deviceConfigurationStates(): DeviceConfigurationStatesRequestBuilder
    {
        return new DeviceConfigurationStatesRequestBuilder($this->client, $this->requestUrl . '/deviceConfigurationStates');
    }
    /**
     * Navigate to logCollectionRequests
     *
     * @return LogCollectionRequestsRequestBuilder
     */
    public function logCollectionRequests(): LogCollectionRequestsRequestBuilder
    {
        return new LogCollectionRequestsRequestBuilder($this->client, $this->requestUrl . '/logCollectionRequests');
    }
    /**
     * Navigate to bypassActivationLock
     *
     * @return BypassActivationLockRequestBuilder
     */
    public function bypassActivationLock(): BypassActivationLockRequestBuilder
    {
        return new BypassActivationLockRequestBuilder($this->client, $this->requestUrl . '/bypassActivationLock');
    }
    /**
     * Navigate to cleanWindowsDevice
     *
     * @return CleanWindowsDeviceRequestBuilder
     */
    public function cleanWindowsDevice(): CleanWindowsDeviceRequestBuilder
    {
        return new CleanWindowsDeviceRequestBuilder($this->client, $this->requestUrl . '/cleanWindowsDevice');
    }
    /**
     * Navigate to deleteUserFromSharedAppleDevice
     *
     * @return DeleteUserFromSharedAppleDeviceRequestBuilder
     */
    public function deleteUserFromSharedAppleDevice(): DeleteUserFromSharedAppleDeviceRequestBuilder
    {
        return new DeleteUserFromSharedAppleDeviceRequestBuilder($this->client, $this->requestUrl . '/deleteUserFromSharedAppleDevice');
    }
    /**
     * Navigate to disableLostMode
     *
     * @return DisableLostModeRequestBuilder
     */
    public function disableLostMode(): DisableLostModeRequestBuilder
    {
        return new DisableLostModeRequestBuilder($this->client, $this->requestUrl . '/disableLostMode');
    }
    /**
     * Navigate to locateDevice
     *
     * @return LocateDeviceRequestBuilder
     */
    public function locateDevice(): LocateDeviceRequestBuilder
    {
        return new LocateDeviceRequestBuilder($this->client, $this->requestUrl . '/locateDevice');
    }
    /**
     * Navigate to logoutSharedAppleDeviceActiveUser
     *
     * @return LogoutSharedAppleDeviceActiveUserRequestBuilder
     */
    public function logoutSharedAppleDeviceActiveUser(): LogoutSharedAppleDeviceActiveUserRequestBuilder
    {
        return new LogoutSharedAppleDeviceActiveUserRequestBuilder($this->client, $this->requestUrl . '/logoutSharedAppleDeviceActiveUser');
    }
    /**
     * Navigate to rebootNow
     *
     * @return RebootNowRequestBuilder
     */
    public function rebootNow(): RebootNowRequestBuilder
    {
        return new RebootNowRequestBuilder($this->client, $this->requestUrl . '/rebootNow');
    }
    /**
     * Navigate to recoverPasscode
     *
     * @return RecoverPasscodeRequestBuilder
     */
    public function recoverPasscode(): RecoverPasscodeRequestBuilder
    {
        return new RecoverPasscodeRequestBuilder($this->client, $this->requestUrl . '/recoverPasscode');
    }
    /**
     * Navigate to remoteLock
     *
     * @return RemoteLockRequestBuilder
     */
    public function remoteLock(): RemoteLockRequestBuilder
    {
        return new RemoteLockRequestBuilder($this->client, $this->requestUrl . '/remoteLock');
    }
    /**
     * Navigate to requestRemoteAssistance
     *
     * @return RequestRemoteAssistanceRequestBuilder
     */
    public function requestRemoteAssistance(): RequestRemoteAssistanceRequestBuilder
    {
        return new RequestRemoteAssistanceRequestBuilder($this->client, $this->requestUrl . '/requestRemoteAssistance');
    }
    /**
     * Navigate to resetPasscode
     *
     * @return ResetPasscodeRequestBuilder
     */
    public function resetPasscode(): ResetPasscodeRequestBuilder
    {
        return new ResetPasscodeRequestBuilder($this->client, $this->requestUrl . '/resetPasscode');
    }
    /**
     * Navigate to retire
     *
     * @return RetireRequestBuilder
     */
    public function retire(): RetireRequestBuilder
    {
        return new RetireRequestBuilder($this->client, $this->requestUrl . '/retire');
    }
    /**
     * Navigate to shutDown
     *
     * @return ShutDownRequestBuilder
     */
    public function shutDown(): ShutDownRequestBuilder
    {
        return new ShutDownRequestBuilder($this->client, $this->requestUrl . '/shutDown');
    }
    /**
     * Navigate to syncDevice
     *
     * @return SyncDeviceRequestBuilder
     */
    public function syncDevice(): SyncDeviceRequestBuilder
    {
        return new SyncDeviceRequestBuilder($this->client, $this->requestUrl . '/syncDevice');
    }
    /**
     * Navigate to updateWindowsDeviceAccount
     *
     * @return UpdateWindowsDeviceAccountRequestBuilder
     */
    public function updateWindowsDeviceAccount(): UpdateWindowsDeviceAccountRequestBuilder
    {
        return new UpdateWindowsDeviceAccountRequestBuilder($this->client, $this->requestUrl . '/updateWindowsDeviceAccount');
    }
    /**
     * Navigate to windowsDefenderScan
     *
     * @return WindowsDefenderScanRequestBuilder
     */
    public function windowsDefenderScan(): WindowsDefenderScanRequestBuilder
    {
        return new WindowsDefenderScanRequestBuilder($this->client, $this->requestUrl . '/windowsDefenderScan');
    }
    /**
     * Navigate to windowsDefenderUpdateSignatures
     *
     * @return WindowsDefenderUpdateSignaturesRequestBuilder
     */
    public function windowsDefenderUpdateSignatures(): WindowsDefenderUpdateSignaturesRequestBuilder
    {
        return new WindowsDefenderUpdateSignaturesRequestBuilder($this->client, $this->requestUrl . '/windowsDefenderUpdateSignatures');
    }
    /**
     * Navigate to wipe
     *
     * @return WipeRequestBuilder
     */
    public function wipe(): WipeRequestBuilder
    {
        return new WipeRequestBuilder($this->client, $this->requestUrl . '/wipe');
    }
    /**
     * Navigate to users
     *
     * @return UsersRequestBuilder
     */
    public function users(): UsersRequestBuilder
    {
        return new UsersRequestBuilder($this->client, $this->requestUrl . '/users');
    }
    /**
     * Navigate to windowsProtectionState
     *
     * @return WindowsProtectionStateRequestBuilder
     */
    public function windowsProtectionState(): WindowsProtectionStateRequestBuilder
    {
        return new WindowsProtectionStateRequestBuilder($this->client, $this->requestUrl . '/windowsProtectionState');
    }
}
