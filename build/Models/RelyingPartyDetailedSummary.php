<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RelyingPartyDetailedSummary
 */
class RelyingPartyDetailedSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq). */
    public ?float $failedSignInCount = null;

    /**  */
    public ?MigrationStatus $migrationStatus = null;

    /** 
     * Specifies all the validations checks done on applications config details.
     * @var KeyValuePair[]
     */
    public array $migrationValidationDetails = [];

    /** Identifies the relying party to this federation service. It's used when issuing claims to the relying party. Supports $orderby, $filter (eq). */
    public ?string $relyingPartyId = null;

    /** Name of the relying party's website or other entity on the Internet that uses an identity provider to authenticate a user who wants to log in. Supports $orderby, $filter (eq). */
    public ?string $relyingPartyName = null;

    /** 
     * Specifies where the relying party expects to receive the token.
     * @var string[]
     */
    public array $replyUrls = [];

    /** Uniquely identifies the Active Directory forest. Supports $orderby, $filter (eq). */
    public ?string $serviceId = null;

    /** 
     * Calculated as Number of successful / (Number of successful + Number of failed sign ins) or successfulSignInCount / totalSignInCount on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $signInSuccessRate = null;

    /** Number of successful sign ins on AD FS. Supports $orderby, $filter (eq). */
    public ?float $successfulSignInCount = null;

    /** Number of successful + failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq). */
    public ?float $totalSignInCount = null;

    /** Number of unique users that signed into the application. Supports $orderby, $filter (eq). */
    public ?float $uniqueUserCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['failedSignInCount'])) {
            $this->failedSignInCount = is_numeric($data['failedSignInCount']) ? (float)$data['failedSignInCount'] : $data['failedSignInCount'];
        }
        if (isset($data['migrationStatus'])) {
            $this->migrationStatus = is_string($data['migrationStatus']) ? MigrationStatus::tryFrom($data['migrationStatus']) : $data['migrationStatus'];
        }
        if (isset($data['migrationValidationDetails'])) {
            $this->migrationValidationDetails = $data['migrationValidationDetails'];
        }
        if (isset($data['relyingPartyId'])) {
            $this->relyingPartyId = $data['relyingPartyId'];
        }
        if (isset($data['relyingPartyName'])) {
            $this->relyingPartyName = $data['relyingPartyName'];
        }
        if (isset($data['replyUrls'])) {
            $this->replyUrls = $data['replyUrls'];
        }
        if (isset($data['serviceId'])) {
            $this->serviceId = $data['serviceId'];
        }
        if (isset($data['signInSuccessRate'])) {
            $this->signInSuccessRate = is_numeric($data['signInSuccessRate']) ? (float)$data['signInSuccessRate'] : $data['signInSuccessRate'];
        }
        if (isset($data['successfulSignInCount'])) {
            $this->successfulSignInCount = is_numeric($data['successfulSignInCount']) ? (float)$data['successfulSignInCount'] : $data['successfulSignInCount'];
        }
        if (isset($data['totalSignInCount'])) {
            $this->totalSignInCount = is_numeric($data['totalSignInCount']) ? (float)$data['totalSignInCount'] : $data['totalSignInCount'];
        }
        if (isset($data['uniqueUserCount'])) {
            $this->uniqueUserCount = is_numeric($data['uniqueUserCount']) ? (float)$data['uniqueUserCount'] : $data['uniqueUserCount'];
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
