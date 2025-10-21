<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Agreement
 */
class Agreement
{
    /**
     * Display name of the agreement. The display name is used for internal tracking of the agreement but isn't shown to end users who view the agreement. Supports $filter (eq).
     */
    private ?string $displayName;

    /**
     * Indicates whether end users are required to accept this agreement on every device that they access it from. The end user is required to register their device in Microsoft Entra ID, if they haven''t already done so. Supports $filter (eq).
     */
    private ?bool $isPerDeviceAcceptanceRequired;

    /**
     * Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq).
     */
    private ?bool $isViewingBeforeAcceptanceRequired;

    /**
     * Expiration schedule and frequency of agreement for all users. Supports $filter (eq).
     */
    private ?string $termsExpiration;

    /**
     * The duration after which the user must reaccept the terms of use. The value is represented in ISO 8601 format for durations. Supports $filter (eq).
     */
    private ?string $userReacceptRequiredFrequency;

    /**
     * Read-only. Information about acceptances of this agreement.
     */
    private array $acceptances = [];

    /**
     * Default PDF linked to this agreement.
     */
    private ?string $file;

    /**
     * PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand.
     * @var string[]
     */
    private array $files = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsPerDeviceAcceptanceRequired(): ?bool
    {
        return $this->isPerDeviceAcceptanceRequired;
    }

    public function setIsPerDeviceAcceptanceRequired(?bool $isPerDeviceAcceptanceRequired): self
    {
        $this->isPerDeviceAcceptanceRequired = $isPerDeviceAcceptanceRequired;
        return $this;
    }

    public function getIsViewingBeforeAcceptanceRequired(): ?bool
    {
        return $this->isViewingBeforeAcceptanceRequired;
    }

    public function setIsViewingBeforeAcceptanceRequired(?bool $isViewingBeforeAcceptanceRequired): self
    {
        $this->isViewingBeforeAcceptanceRequired = $isViewingBeforeAcceptanceRequired;
        return $this;
    }

    public function getTermsExpiration(): ?string
    {
        return $this->termsExpiration;
    }

    public function setTermsExpiration(?string $termsExpiration): self
    {
        $this->termsExpiration = $termsExpiration;
        return $this;
    }

    public function getUserReacceptRequiredFrequency(): ?string
    {
        return $this->userReacceptRequiredFrequency;
    }

    public function setUserReacceptRequiredFrequency(?string $userReacceptRequiredFrequency): self
    {
        $this->userReacceptRequiredFrequency = $userReacceptRequiredFrequency;
        return $this;
    }

    public function getAcceptances(): array
    {
        return $this->acceptances;
    }

    public function setAcceptances(array $acceptances): self
    {
        $this->acceptances = $acceptances;
        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param string[] $files
     */
    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }

}
