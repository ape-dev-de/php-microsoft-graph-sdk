<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSGeneralDeviceConfiguration
 */
class MacOSGeneralDeviceConfiguration
{
    /**
     */
    private ?string $compliantAppListType;

    /**
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     */
    private array $compliantAppsList = [];

    /**
     * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     */
    private ?string $emailInDomainSuffixes;

    /**
     * Block simple passwords.
     */
    private ?bool $passwordBlockSimple;

    /**
     * Number of days before the password expires.
     */
    private ?float $passwordExpirationDays;

    /**
     * Number of character sets a password must contain. Valid values 0 to 4
     */
    private ?float $passwordMinimumCharacterSetCount;

    /**
     * Minimum length of passwords.
     */
    private ?float $passwordMinimumLength;

    /**
     * Minutes of inactivity required before a password is required.
     */
    private ?float $passwordMinutesOfInactivityBeforeLock;

    /**
     * Minutes of inactivity required before the screen times out.
     */
    private ?float $passwordMinutesOfInactivityBeforeScreenTimeout;

    /**
     * Number of previous passwords to block.
     */
    private ?float $passwordPreviousPasswordBlockCount;

    /**
     * Whether or not to require a password.
     */
    private ?bool $passwordRequired;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSGeneralDeviceConfiguration resource.
     */
    private ?string $passwordRequiredType;

    public function getCompliantAppListType(): ?string
    {
        return $this->compliantAppListType;
    }

    public function setCompliantAppListType(?string $compliantAppListType): self
    {
        $this->compliantAppListType = $compliantAppListType;
        return $this;
    }

    public function getCompliantAppsList(): array
    {
        return $this->compliantAppsList;
    }

    public function setCompliantAppsList(array $compliantAppsList): self
    {
        $this->compliantAppsList = $compliantAppsList;
        return $this;
    }

    public function getEmailInDomainSuffixes(): ?string
    {
        return $this->emailInDomainSuffixes;
    }

    public function setEmailInDomainSuffixes(?string $emailInDomainSuffixes): self
    {
        $this->emailInDomainSuffixes = $emailInDomainSuffixes;
        return $this;
    }

    public function getPasswordBlockSimple(): ?bool
    {
        return $this->passwordBlockSimple;
    }

    public function setPasswordBlockSimple(?bool $passwordBlockSimple): self
    {
        $this->passwordBlockSimple = $passwordBlockSimple;
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

    public function getPasswordMinimumCharacterSetCount(): ?float
    {
        return $this->passwordMinimumCharacterSetCount;
    }

    public function setPasswordMinimumCharacterSetCount(?float $passwordMinimumCharacterSetCount): self
    {
        $this->passwordMinimumCharacterSetCount = $passwordMinimumCharacterSetCount;
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

    public function getPasswordMinutesOfInactivityBeforeLock(): ?float
    {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    public function setPasswordMinutesOfInactivityBeforeLock(?float $passwordMinutesOfInactivityBeforeLock): self
    {
        $this->passwordMinutesOfInactivityBeforeLock = $passwordMinutesOfInactivityBeforeLock;
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

    public function getPasswordRequired(): ?bool
    {
        return $this->passwordRequired;
    }

    public function setPasswordRequired(?bool $passwordRequired): self
    {
        $this->passwordRequired = $passwordRequired;
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

}
