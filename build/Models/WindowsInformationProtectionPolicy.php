<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionPolicy
 */
class WindowsInformationProtectionPolicy
{
    /**
     * Offline interval before app data is wiped (days)
     */
    private ?float $daysWithoutContactBeforeUnenroll;

    /**
     * Enrollment url for the MDM
     */
    private ?string $mdmEnrollmentUrl;

    /**
     * Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
     */
    private ?float $minutesOfInactivityBeforeDeviceLock;

    /**
     * Integer value that specifies the number of past PINs that can be associated to a user account that can''t be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
     */
    private ?float $numberOfPastPinsRemembered;

    /**
     * The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
     */
    private ?float $passwordMaximumAttemptCount;

    /**
     * Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user''s PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
     */
    private ?float $pinExpirationDays;

    /**
     */
    private ?string $pinLowercaseLetters;

    /**
     * Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
     */
    private ?float $pinMinimumLength;

    /**
     */
    private ?string $pinSpecialCharacters;

    /**
     */
    private ?string $pinUppercaseLetters;

    /**
     * New property in RS2, pending documentation
     */
    private ?bool $revokeOnMdmHandoffDisabled;

    /**
     * Policy for Windows information protection without MDM
     */
    private ?string $windowsHelloForBusinessBlocked;


    public function getDaysWithoutContactBeforeUnenroll(): ?float
    {
        return $this->daysWithoutContactBeforeUnenroll;
    }

    public function setDaysWithoutContactBeforeUnenroll(?float $daysWithoutContactBeforeUnenroll): self
    {
        $this->daysWithoutContactBeforeUnenroll = $daysWithoutContactBeforeUnenroll;
        return $this;
    }

    public function getMdmEnrollmentUrl(): ?string
    {
        return $this->mdmEnrollmentUrl;
    }

    public function setMdmEnrollmentUrl(?string $mdmEnrollmentUrl): self
    {
        $this->mdmEnrollmentUrl = $mdmEnrollmentUrl;
        return $this;
    }

    public function getMinutesOfInactivityBeforeDeviceLock(): ?float
    {
        return $this->minutesOfInactivityBeforeDeviceLock;
    }

    public function setMinutesOfInactivityBeforeDeviceLock(?float $minutesOfInactivityBeforeDeviceLock): self
    {
        $this->minutesOfInactivityBeforeDeviceLock = $minutesOfInactivityBeforeDeviceLock;
        return $this;
    }

    public function getNumberOfPastPinsRemembered(): ?float
    {
        return $this->numberOfPastPinsRemembered;
    }

    public function setNumberOfPastPinsRemembered(?float $numberOfPastPinsRemembered): self
    {
        $this->numberOfPastPinsRemembered = $numberOfPastPinsRemembered;
        return $this;
    }

    public function getPasswordMaximumAttemptCount(): ?float
    {
        return $this->passwordMaximumAttemptCount;
    }

    public function setPasswordMaximumAttemptCount(?float $passwordMaximumAttemptCount): self
    {
        $this->passwordMaximumAttemptCount = $passwordMaximumAttemptCount;
        return $this;
    }

    public function getPinExpirationDays(): ?float
    {
        return $this->pinExpirationDays;
    }

    public function setPinExpirationDays(?float $pinExpirationDays): self
    {
        $this->pinExpirationDays = $pinExpirationDays;
        return $this;
    }

    public function getPinLowercaseLetters(): ?string
    {
        return $this->pinLowercaseLetters;
    }

    public function setPinLowercaseLetters(?string $pinLowercaseLetters): self
    {
        $this->pinLowercaseLetters = $pinLowercaseLetters;
        return $this;
    }

    public function getPinMinimumLength(): ?float
    {
        return $this->pinMinimumLength;
    }

    public function setPinMinimumLength(?float $pinMinimumLength): self
    {
        $this->pinMinimumLength = $pinMinimumLength;
        return $this;
    }

    public function getPinSpecialCharacters(): ?string
    {
        return $this->pinSpecialCharacters;
    }

    public function setPinSpecialCharacters(?string $pinSpecialCharacters): self
    {
        $this->pinSpecialCharacters = $pinSpecialCharacters;
        return $this;
    }

    public function getPinUppercaseLetters(): ?string
    {
        return $this->pinUppercaseLetters;
    }

    public function setPinUppercaseLetters(?string $pinUppercaseLetters): self
    {
        $this->pinUppercaseLetters = $pinUppercaseLetters;
        return $this;
    }

    public function getRevokeOnMdmHandoffDisabled(): ?bool
    {
        return $this->revokeOnMdmHandoffDisabled;
    }

    public function setRevokeOnMdmHandoffDisabled(?bool $revokeOnMdmHandoffDisabled): self
    {
        $this->revokeOnMdmHandoffDisabled = $revokeOnMdmHandoffDisabled;
        return $this;
    }

    public function getWindowsHelloForBusinessBlocked(): ?string
    {
        return $this->windowsHelloForBusinessBlocked;
    }

    public function setWindowsHelloForBusinessBlocked(?string $windowsHelloForBusinessBlocked): self
    {
        $this->windowsHelloForBusinessBlocked = $windowsHelloForBusinessBlocked;
        return $this;
    }

}
