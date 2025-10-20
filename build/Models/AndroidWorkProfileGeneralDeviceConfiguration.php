<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileGeneralDeviceConfiguration
 */
class AndroidWorkProfileGeneralDeviceConfiguration
{
    /**
     * Indicates whether or not to block fingerprint unlock.
     */
    private ?bool $passwordBlockFingerprintUnlock;

    /**
     * Indicates whether or not to block Smart Lock and other trust agents.
     */
    private ?bool $passwordBlockTrustAgents;

    /**
     * Number of days before the password expires. Valid values 1 to 365
     */
    private ?float $passwordExpirationDays;

    /**
     * Minimum length of passwords. Valid values 4 to 16
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity before the screen times out.
     */
    private ?float $passwordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * Number of previous passwords to block. Valid values 0 to 24
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     */
    private ?string $passwordRequiredType;

    /**
     * Number of sign in failures allowed before factory reset. Valid values 1 to 16
     */
    private ?float $passwordSignInFailureCountBeforeFactoryReset;

    /**
     * Require the Android Verify apps feature is turned on.
     */
    private ?bool $securityRequireVerifyApps;

    /**
     * Block users from adding/removing accounts in work profile.
     */
    private ?bool $workProfileBlockAddingAccounts;

    /**
     * Block work profile camera.
     */
    private ?bool $workProfileBlockCamera;

    /**
     * Block display work profile caller ID in personal profile.
     */
    private ?bool $workProfileBlockCrossProfileCallerId;

    /**
     * Block work profile contacts availability in personal profile.
     */
    private ?bool $workProfileBlockCrossProfileContactsSearch;

    /**
     * Boolean that indicates if the setting disallow cross profile copy/paste is enabled.
     */
    private ?bool $workProfileBlockCrossProfileCopyPaste;

    /**
     * Indicates whether or not to block notifications while device locked.
     */
    private ?bool $workProfileBlockNotificationsWhileDeviceLocked;

    /**
     * Block screen capture in work profile.
     */
    private ?bool $workProfileBlockScreenCapture;

    /**
     * Allow bluetooth devices to access enterprise contacts.
     */
    private ?bool $workProfileBluetoothEnableContactSharing;

    /**
     */
    private ?string $workProfileDataSharingType;

    /**
     */
    private ?string $workProfileDefaultAppPermissionPolicy;

    /**
     * Indicates whether or not to block fingerprint unlock for work profile.
     */
    private ?bool $workProfilePasswordBlockFingerprintUnlock;

    /**
     * Indicates whether or not to block Smart Lock and other trust agents for work profile.
     */
    private ?bool $workProfilePasswordBlockTrustAgents;

    /**
     * Number of days before the work profile password expires. Valid values 1 to 365
     */
    private ?float $workProfilePasswordExpirationDays;

    /**
     * Minimum length of work profile password. Valid values 4 to 16
     */
    private ?float $workProfilePasswordMinimumLength;

    /**
     * Minimum # of letter characters required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinLetterCharacters;

    /**
     * Minimum # of lower-case characters required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinLowerCaseCharacters;

    /**
     * Minimum # of non-letter characters required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinNonLetterCharacters;

    /**
     * Minimum # of numeric characters required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinNumericCharacters;

    /**
     * Minimum # of symbols required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinSymbolCharacters;

    /**
     * Minimum # of upper-case characters required in work profile password. Valid values 1 to 10
     */
    private ?float $workProfilePasswordMinUpperCaseCharacters;

    /**
     * Minutes of inactivity before the screen times out.
     */
    private ?float $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * Number of previous work profile passwords to block. Valid values 0 to 24
     */
    private ?float $workProfilePasswordPreviousPasswordBlockCount;

    /**
     */
    private ?string $workProfilePasswordRequiredType;

    /**
     * Number of sign in failures allowed before work profile is removed and all corporate data deleted. Valid values 1 to 16
     */
    private ?float $workProfilePasswordSignInFailureCountBeforeFactoryReset;

    /**
     * Android Work Profile general device configuration.
     */
    private ?string $workProfileRequirePassword;

    public function getPasswordBlockFingerprintUnlock(): ?bool
    {
        return $this->passwordBlockFingerprintUnlock;
    }

    public function setPasswordBlockFingerprintUnlock(?bool $passwordBlockFingerprintUnlock): self
    {
        $this->passwordBlockFingerprintUnlock = $passwordBlockFingerprintUnlock;
        return $this;
    }

    public function getPasswordBlockTrustAgents(): ?bool
    {
        return $this->passwordBlockTrustAgents;
    }

    public function setPasswordBlockTrustAgents(?bool $passwordBlockTrustAgents): self
    {
        $this->passwordBlockTrustAgents = $passwordBlockTrustAgents;
        return $this;
    }

    public function getPasswordExpirationDays(): ?float
    {
        return $this->passwordExpirationDays;
    }

    public function setPasswordExpirationDays(?float $passwordExpirationDays): self
    {
        $this->passwordExpirationDays = $passwordExpirationDays;
        return $this;
    }

    public function getPasswordMinimumLength(): ?float
    {
        return $this->passwordMinimumLength;
    }

    public function setPasswordMinimumLength(?float $passwordMinimumLength): self
    {
        $this->passwordMinimumLength = $passwordMinimumLength;
        return $this;
    }

    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?float $passwordMinutesOfInactivityBeforeScreenTimeout): self
    {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $passwordMinutesOfInactivityBeforeScreenTimeout;
        return $this;
    }

    public function getPasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->passwordPreviousPasswordBlockCount;
    }

    public function setPasswordPreviousPasswordBlockCount(?float $passwordPreviousPasswordBlockCount): self
    {
        $this->passwordPreviousPasswordBlockCount = $passwordPreviousPasswordBlockCount;
        return $this;
    }

    public function getPasswordRequiredType(): ?string
    {
        return $this->passwordRequiredType;
    }

    public function setPasswordRequiredType(?string $passwordRequiredType): self
    {
        $this->passwordRequiredType = $passwordRequiredType;
        return $this;
    }

    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?float
    {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    public function setPasswordSignInFailureCountBeforeFactoryReset(?float $passwordSignInFailureCountBeforeFactoryReset): self
    {
        $this->passwordSignInFailureCountBeforeFactoryReset = $passwordSignInFailureCountBeforeFactoryReset;
        return $this;
    }

    public function getSecurityRequireVerifyApps(): ?bool
    {
        return $this->securityRequireVerifyApps;
    }

    public function setSecurityRequireVerifyApps(?bool $securityRequireVerifyApps): self
    {
        $this->securityRequireVerifyApps = $securityRequireVerifyApps;
        return $this;
    }

    public function getWorkProfileBlockAddingAccounts(): ?bool
    {
        return $this->workProfileBlockAddingAccounts;
    }

    public function setWorkProfileBlockAddingAccounts(?bool $workProfileBlockAddingAccounts): self
    {
        $this->workProfileBlockAddingAccounts = $workProfileBlockAddingAccounts;
        return $this;
    }

    public function getWorkProfileBlockCamera(): ?bool
    {
        return $this->workProfileBlockCamera;
    }

    public function setWorkProfileBlockCamera(?bool $workProfileBlockCamera): self
    {
        $this->workProfileBlockCamera = $workProfileBlockCamera;
        return $this;
    }

    public function getWorkProfileBlockCrossProfileCallerId(): ?bool
    {
        return $this->workProfileBlockCrossProfileCallerId;
    }

    public function setWorkProfileBlockCrossProfileCallerId(?bool $workProfileBlockCrossProfileCallerId): self
    {
        $this->workProfileBlockCrossProfileCallerId = $workProfileBlockCrossProfileCallerId;
        return $this;
    }

    public function getWorkProfileBlockCrossProfileContactsSearch(): ?bool
    {
        return $this->workProfileBlockCrossProfileContactsSearch;
    }

    public function setWorkProfileBlockCrossProfileContactsSearch(?bool $workProfileBlockCrossProfileContactsSearch): self
    {
        $this->workProfileBlockCrossProfileContactsSearch = $workProfileBlockCrossProfileContactsSearch;
        return $this;
    }

    public function getWorkProfileBlockCrossProfileCopyPaste(): ?bool
    {
        return $this->workProfileBlockCrossProfileCopyPaste;
    }

    public function setWorkProfileBlockCrossProfileCopyPaste(?bool $workProfileBlockCrossProfileCopyPaste): self
    {
        $this->workProfileBlockCrossProfileCopyPaste = $workProfileBlockCrossProfileCopyPaste;
        return $this;
    }

    public function getWorkProfileBlockNotificationsWhileDeviceLocked(): ?bool
    {
        return $this->workProfileBlockNotificationsWhileDeviceLocked;
    }

    public function setWorkProfileBlockNotificationsWhileDeviceLocked(?bool $workProfileBlockNotificationsWhileDeviceLocked): self
    {
        $this->workProfileBlockNotificationsWhileDeviceLocked = $workProfileBlockNotificationsWhileDeviceLocked;
        return $this;
    }

    public function getWorkProfileBlockScreenCapture(): ?bool
    {
        return $this->workProfileBlockScreenCapture;
    }

    public function setWorkProfileBlockScreenCapture(?bool $workProfileBlockScreenCapture): self
    {
        $this->workProfileBlockScreenCapture = $workProfileBlockScreenCapture;
        return $this;
    }

    public function getWorkProfileBluetoothEnableContactSharing(): ?bool
    {
        return $this->workProfileBluetoothEnableContactSharing;
    }

    public function setWorkProfileBluetoothEnableContactSharing(?bool $workProfileBluetoothEnableContactSharing): self
    {
        $this->workProfileBluetoothEnableContactSharing = $workProfileBluetoothEnableContactSharing;
        return $this;
    }

    public function getWorkProfileDataSharingType(): ?string
    {
        return $this->workProfileDataSharingType;
    }

    public function setWorkProfileDataSharingType(?string $workProfileDataSharingType): self
    {
        $this->workProfileDataSharingType = $workProfileDataSharingType;
        return $this;
    }

    public function getWorkProfileDefaultAppPermissionPolicy(): ?string
    {
        return $this->workProfileDefaultAppPermissionPolicy;
    }

    public function setWorkProfileDefaultAppPermissionPolicy(?string $workProfileDefaultAppPermissionPolicy): self
    {
        $this->workProfileDefaultAppPermissionPolicy = $workProfileDefaultAppPermissionPolicy;
        return $this;
    }

    public function getWorkProfilePasswordBlockFingerprintUnlock(): ?bool
    {
        return $this->workProfilePasswordBlockFingerprintUnlock;
    }

    public function setWorkProfilePasswordBlockFingerprintUnlock(?bool $workProfilePasswordBlockFingerprintUnlock): self
    {
        $this->workProfilePasswordBlockFingerprintUnlock = $workProfilePasswordBlockFingerprintUnlock;
        return $this;
    }

    public function getWorkProfilePasswordBlockTrustAgents(): ?bool
    {
        return $this->workProfilePasswordBlockTrustAgents;
    }

    public function setWorkProfilePasswordBlockTrustAgents(?bool $workProfilePasswordBlockTrustAgents): self
    {
        $this->workProfilePasswordBlockTrustAgents = $workProfilePasswordBlockTrustAgents;
        return $this;
    }

    public function getWorkProfilePasswordExpirationDays(): ?float
    {
        return $this->workProfilePasswordExpirationDays;
    }

    public function setWorkProfilePasswordExpirationDays(?float $workProfilePasswordExpirationDays): self
    {
        $this->workProfilePasswordExpirationDays = $workProfilePasswordExpirationDays;
        return $this;
    }

    public function getWorkProfilePasswordMinimumLength(): ?float
    {
        return $this->workProfilePasswordMinimumLength;
    }

    public function setWorkProfilePasswordMinimumLength(?float $workProfilePasswordMinimumLength): self
    {
        $this->workProfilePasswordMinimumLength = $workProfilePasswordMinimumLength;
        return $this;
    }

    public function getWorkProfilePasswordMinLetterCharacters(): ?float
    {
        return $this->workProfilePasswordMinLetterCharacters;
    }

    public function setWorkProfilePasswordMinLetterCharacters(?float $workProfilePasswordMinLetterCharacters): self
    {
        $this->workProfilePasswordMinLetterCharacters = $workProfilePasswordMinLetterCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinLowerCaseCharacters(): ?float
    {
        return $this->workProfilePasswordMinLowerCaseCharacters;
    }

    public function setWorkProfilePasswordMinLowerCaseCharacters(?float $workProfilePasswordMinLowerCaseCharacters): self
    {
        $this->workProfilePasswordMinLowerCaseCharacters = $workProfilePasswordMinLowerCaseCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinNonLetterCharacters(): ?float
    {
        return $this->workProfilePasswordMinNonLetterCharacters;
    }

    public function setWorkProfilePasswordMinNonLetterCharacters(?float $workProfilePasswordMinNonLetterCharacters): self
    {
        $this->workProfilePasswordMinNonLetterCharacters = $workProfilePasswordMinNonLetterCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinNumericCharacters(): ?float
    {
        return $this->workProfilePasswordMinNumericCharacters;
    }

    public function setWorkProfilePasswordMinNumericCharacters(?float $workProfilePasswordMinNumericCharacters): self
    {
        $this->workProfilePasswordMinNumericCharacters = $workProfilePasswordMinNumericCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinSymbolCharacters(): ?float
    {
        return $this->workProfilePasswordMinSymbolCharacters;
    }

    public function setWorkProfilePasswordMinSymbolCharacters(?float $workProfilePasswordMinSymbolCharacters): self
    {
        $this->workProfilePasswordMinSymbolCharacters = $workProfilePasswordMinSymbolCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinUpperCaseCharacters(): ?float
    {
        return $this->workProfilePasswordMinUpperCaseCharacters;
    }

    public function setWorkProfilePasswordMinUpperCaseCharacters(?float $workProfilePasswordMinUpperCaseCharacters): self
    {
        $this->workProfilePasswordMinUpperCaseCharacters = $workProfilePasswordMinUpperCaseCharacters;
        return $this;
    }

    public function getWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(): ?float
    {
        return $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout;
    }

    public function setWorkProfilePasswordMinutesOfInactivityBeforeScreenTimeout(?float $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout): self
    {
        $this->workProfilePasswordMinutesOfInactivityBeforeScreenTimeout = $workProfilePasswordMinutesOfInactivityBeforeScreenTimeout;
        return $this;
    }

    public function getWorkProfilePasswordPreviousPasswordBlockCount(): ?float
    {
        return $this->workProfilePasswordPreviousPasswordBlockCount;
    }

    public function setWorkProfilePasswordPreviousPasswordBlockCount(?float $workProfilePasswordPreviousPasswordBlockCount): self
    {
        $this->workProfilePasswordPreviousPasswordBlockCount = $workProfilePasswordPreviousPasswordBlockCount;
        return $this;
    }

    public function getWorkProfilePasswordRequiredType(): ?string
    {
        return $this->workProfilePasswordRequiredType;
    }

    public function setWorkProfilePasswordRequiredType(?string $workProfilePasswordRequiredType): self
    {
        $this->workProfilePasswordRequiredType = $workProfilePasswordRequiredType;
        return $this;
    }

    public function getWorkProfilePasswordSignInFailureCountBeforeFactoryReset(): ?float
    {
        return $this->workProfilePasswordSignInFailureCountBeforeFactoryReset;
    }

    public function setWorkProfilePasswordSignInFailureCountBeforeFactoryReset(?float $workProfilePasswordSignInFailureCountBeforeFactoryReset): self
    {
        $this->workProfilePasswordSignInFailureCountBeforeFactoryReset = $workProfilePasswordSignInFailureCountBeforeFactoryReset;
        return $this;
    }

    public function getWorkProfileRequirePassword(): ?string
    {
        return $this->workProfileRequirePassword;
    }

    public function setWorkProfileRequirePassword(?string $workProfileRequirePassword): self
    {
        $this->workProfileRequirePassword = $workProfileRequirePassword;
        return $this;
    }

}
