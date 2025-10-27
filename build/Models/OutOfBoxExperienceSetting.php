<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfBoxExperienceSetting
 */
class OutOfBoxExperienceSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?WindowsDeviceUsageType $deviceUsageType = null;

    /** When TRUE, the link that allows user to start over with a different account on company sign-in is hidden. When false, the link that allows user to start over with a different account on company sign-in is available. Default value is FALSE. */
    public ?bool $escapeLinkHidden = null;

    /** When TRUE, EULA is hidden to the end user during OOBE. When FALSE, EULA is shown to the end user during OOBE. Default value is FALSE. */
    public ?bool $eulaHidden = null;

    /** When TRUE, the keyboard selection page is hidden to the end user during OOBE if Language and Region are set. When FALSE, the keyboard selection page is skipped during OOBE. */
    public ?bool $keyboardSelectionPageSkipped = null;

    /** When TRUE, privacy settings is hidden to the end user during OOBE. When FALSE, privacy settings is shown to the end user during OOBE. Default value is FALSE. */
    public ?bool $privacySettingsHidden = null;

    /**  */
    public ?WindowsUserType $userType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deviceUsageType'])) {
            $this->deviceUsageType = is_string($data['deviceUsageType']) ? WindowsDeviceUsageType::tryFrom($data['deviceUsageType']) : $data['deviceUsageType'];
        }
        if (isset($data['escapeLinkHidden'])) {
            $this->escapeLinkHidden = is_bool($data['escapeLinkHidden']) ? $data['escapeLinkHidden'] : (bool)$data['escapeLinkHidden'];
        }
        if (isset($data['eulaHidden'])) {
            $this->eulaHidden = is_bool($data['eulaHidden']) ? $data['eulaHidden'] : (bool)$data['eulaHidden'];
        }
        if (isset($data['keyboardSelectionPageSkipped'])) {
            $this->keyboardSelectionPageSkipped = is_bool($data['keyboardSelectionPageSkipped']) ? $data['keyboardSelectionPageSkipped'] : (bool)$data['keyboardSelectionPageSkipped'];
        }
        if (isset($data['privacySettingsHidden'])) {
            $this->privacySettingsHidden = is_bool($data['privacySettingsHidden']) ? $data['privacySettingsHidden'] : (bool)$data['privacySettingsHidden'];
        }
        if (isset($data['userType'])) {
            $this->userType = is_string($data['userType']) ? WindowsUserType::tryFrom($data['userType']) : $data['userType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
