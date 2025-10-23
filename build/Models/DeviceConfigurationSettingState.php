<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationSettingState
 */
class DeviceConfigurationSettingState
{
    /** Current value of setting on device */
    public ?string $currentValue = null;

    /** Error code for the setting */
    public ?float $errorCode = null;

    /** Error description */
    public ?string $errorDescription = null;

    /** Name of setting instance that is being reported. */
    public ?string $instanceDisplayName = null;

    /** The setting that is being reported */
    public ?string $setting = null;

    /** Localized/user friendly setting name that is being reported */
    public ?string $settingName = null;

    /** 
     * Contributing policies
     * @var SettingSource[]
     */
    public array $sources = [];

    /**  */
    public ?ComplianceStatus $state = null;

    /** UserEmail */
    public ?string $userEmail = null;

    /** UserId */
    public ?string $userId = null;

    /** UserName */
    public ?string $userName = null;

    /** UserPrincipalName. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['currentValue'])) {
            $this->currentValue = $data['currentValue'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['errorDescription'])) {
            $this->errorDescription = $data['errorDescription'];
        }
        if (isset($data['instanceDisplayName'])) {
            $this->instanceDisplayName = $data['instanceDisplayName'];
        }
        if (isset($data['setting'])) {
            $this->setting = $data['setting'];
        }
        if (isset($data['settingName'])) {
            $this->settingName = $data['settingName'];
        }
        if (isset($data['sources'])) {
            $this->sources = $data['sources'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['userEmail'])) {
            $this->userEmail = $data['userEmail'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userName'])) {
            $this->userName = $data['userName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
