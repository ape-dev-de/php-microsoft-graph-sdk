<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelyingPartyDetailedSummary
 */
class RelyingPartyDetailedSummary
{
    /**
     * Number of failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     */
    private ?float $failedSignInCount;

    /**
     */
    private ?string $migrationStatus;

    /**
     * Specifies all the validations checks done on applications config details.
     */
    private array $migrationValidationDetails = [];

    /**
     * Identifies the relying party to this federation service. It''s used when issuing claims to the relying party. Supports $orderby, $filter (eq).
     */
    private ?string $relyingPartyId;

    /**
     * Name of the relying party''s website or other entity on the Internet that uses an identity provider to authenticate a user who wants to log in. Supports $orderby, $filter (eq).
     */
    private ?string $relyingPartyName;

    /**
     * Specifies where the relying party expects to receive the token.
     * @var string[]
     */
    private array $replyUrls = [];

    /**
     * Uniquely identifies the Active Directory forest. Supports $orderby, $filter (eq).
     */
    private ?string $serviceId;

    /**
     * Calculated as Number of successful / (Number of successful + Number of failed sign ins) or successfulSignInCount / totalSignInCount on AD FS in the period specified. Supports $orderby, $filter (eq).
     */
    private ?string $signInSuccessRate;

    /**
     * Number of successful sign ins on AD FS. Supports $orderby, $filter (eq).
     */
    private ?float $successfulSignInCount;

    /**
     * Number of successful + failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     */
    private ?float $totalSignInCount;

    /**
     * Number of unique users that signed into the application. Supports $orderby, $filter (eq).
     */
    private ?string $uniqueUserCount;


    public function getFailedSignInCount(): ?float
    {
        return $this->failedSignInCount;
    }

    public function setFailedSignInCount(?float $failedSignInCount): self
    {
        $this->failedSignInCount = $failedSignInCount;
        return $this;
    }

    public function getMigrationStatus(): ?string
    {
        return $this->migrationStatus;
    }

    public function setMigrationStatus(?string $migrationStatus): self
    {
        $this->migrationStatus = $migrationStatus;
        return $this;
    }

    public function getMigrationValidationDetails(): array
    {
        return $this->migrationValidationDetails;
    }

    public function setMigrationValidationDetails(array $migrationValidationDetails): self
    {
        $this->migrationValidationDetails = $migrationValidationDetails;
        return $this;
    }

    public function getRelyingPartyId(): ?string
    {
        return $this->relyingPartyId;
    }

    public function setRelyingPartyId(?string $relyingPartyId): self
    {
        $this->relyingPartyId = $relyingPartyId;
        return $this;
    }

    public function getRelyingPartyName(): ?string
    {
        return $this->relyingPartyName;
    }

    public function setRelyingPartyName(?string $relyingPartyName): self
    {
        $this->relyingPartyName = $relyingPartyName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getReplyUrls(): array
    {
        return $this->replyUrls;
    }

    /**
     * @param string[] $replyUrls
     */
    public function setReplyUrls(array $replyUrls): self
    {
        $this->replyUrls = $replyUrls;
        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    public function getSignInSuccessRate(): ?string
    {
        return $this->signInSuccessRate;
    }

    public function setSignInSuccessRate(?string $signInSuccessRate): self
    {
        $this->signInSuccessRate = $signInSuccessRate;
        return $this;
    }

    public function getSuccessfulSignInCount(): ?float
    {
        return $this->successfulSignInCount;
    }

    public function setSuccessfulSignInCount(?float $successfulSignInCount): self
    {
        $this->successfulSignInCount = $successfulSignInCount;
        return $this;
    }

    public function getTotalSignInCount(): ?float
    {
        return $this->totalSignInCount;
    }

    public function setTotalSignInCount(?float $totalSignInCount): self
    {
        $this->totalSignInCount = $totalSignInCount;
        return $this;
    }

    public function getUniqueUserCount(): ?string
    {
        return $this->uniqueUserCount;
    }

    public function setUniqueUserCount(?string $uniqueUserCount): self
    {
        $this->uniqueUserCount = $uniqueUserCount;
        return $this;
    }

}
