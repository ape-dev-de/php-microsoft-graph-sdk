<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfBoxExperienceSetting
 */
class OutOfBoxExperienceSetting
{
    /**
     */
    private ?string $deviceUsageType;

    /**
     * When TRUE, the link that allows user to start over with a different account on company sign-in is hidden. When false, the link that allows user to start over with a different account on company sign-in is available. Default value is FALSE.
     */
    private ?bool $escapeLinkHidden;

    /**
     * When TRUE, EULA is hidden to the end user during OOBE. When FALSE, EULA is shown to the end user during OOBE. Default value is FALSE.
     */
    private ?bool $eulaHidden;

    /**
     * When TRUE, the keyboard selection page is hidden to the end user during OOBE if Language and Region are set. When FALSE, the keyboard selection page is skipped during OOBE.
     */
    private ?bool $keyboardSelectionPageSkipped;

    /**
     * When TRUE, privacy settings is hidden to the end user during OOBE. When FALSE, privacy settings is shown to the end user during OOBE. Default value is FALSE.
     */
    private ?bool $privacySettingsHidden;

    /**
     * The Windows Autopilot Deployment Profile settings used by the device for the out-of-box experience. Supports: $select, $top, $skip. $Search, $orderBy and $filter are not supported.
     */
    private ?string $userType;

    public function getDeviceUsageType(): ?string
    {
        return $this->deviceUsageType;
    }

    public function setDeviceUsageType(?string $deviceUsageType): self
    {
        $this->deviceUsageType = $deviceUsageType;
        return $this;
    }

    public function getEscapeLinkHidden(): ?bool
    {
        return $this->escapeLinkHidden;
    }

    public function setEscapeLinkHidden(?bool $escapeLinkHidden): self
    {
        $this->escapeLinkHidden = $escapeLinkHidden;
        return $this;
    }

    public function getEulaHidden(): ?bool
    {
        return $this->eulaHidden;
    }

    public function setEulaHidden(?bool $eulaHidden): self
    {
        $this->eulaHidden = $eulaHidden;
        return $this;
    }

    public function getKeyboardSelectionPageSkipped(): ?bool
    {
        return $this->keyboardSelectionPageSkipped;
    }

    public function setKeyboardSelectionPageSkipped(?bool $keyboardSelectionPageSkipped): self
    {
        $this->keyboardSelectionPageSkipped = $keyboardSelectionPageSkipped;
        return $this;
    }

    public function getPrivacySettingsHidden(): ?bool
    {
        return $this->privacySettingsHidden;
    }

    public function setPrivacySettingsHidden(?bool $privacySettingsHidden): self
    {
        $this->privacySettingsHidden = $privacySettingsHidden;
        return $this;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

}
