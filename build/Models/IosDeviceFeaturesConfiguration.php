<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceFeaturesConfiguration
 */
class IosDeviceFeaturesConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The list of assignments for the device configuration profile.
     * @var DeviceConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Device Configuration Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * Device configuration installation status by device.
     * @var DeviceConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device Configuration devices status overview
     * @var DeviceConfigurationDeviceOverview|\stdClass|null
     */
    public mixed $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public mixed $userStatusOverview = null;

    /** Asset tag information for the device, displayed on the login window and lock screen. */
    public ?string $assetTagTemplate = null;

    /** 
     * A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @var IosHomeScreenItem[]
     */
    public array $homeScreenDockIcons = [];

    /** 
     * A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @var IosHomeScreenPage[]
     */
    public array $homeScreenPages = [];

    /** A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later. */
    public ?string $lockScreenFootnote = null;

    /** 
     * Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @var IosNotificationSettings[]
     */
    public array $notificationSettings = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = $data['userStatusOverview'];
        }
        if (isset($data['assetTagTemplate'])) {
            $this->assetTagTemplate = $data['assetTagTemplate'];
        }
        if (isset($data['homeScreenDockIcons'])) {
            $this->homeScreenDockIcons = $data['homeScreenDockIcons'];
        }
        if (isset($data['homeScreenPages'])) {
            $this->homeScreenPages = $data['homeScreenPages'];
        }
        if (isset($data['lockScreenFootnote'])) {
            $this->lockScreenFootnote = $data['lockScreenFootnote'];
        }
        if (isset($data['notificationSettings'])) {
            $this->notificationSettings = $data['notificationSettings'];
        }
    }
}
