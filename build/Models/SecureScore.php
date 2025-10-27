<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScore
 */
class SecureScore
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Active user count of the given tenant. */
    public ?float $activeUserCount = null;

    /** 
     * Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     * @var AverageComparativeScore[]
     */
    public array $averageComparativeScores = [];

    /** GUID string for tenant ID. */
    public ?string $azureTenantId = null;

    /** 
     * Contains tenant scores for a set of controls.
     * @var ControlScore[]
     */
    public array $controlScores = [];

    /** When the report was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Tenant current attained score on specified date. */
    public ?string $currentScore = null;

    /** 
     * Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     * @var string[]
     */
    public array $enabledServices = [];

    /** Licensed user count of the given tenant. */
    public ?float $licensedUserCount = null;

    /** Tenant maximum possible score on specified date. */
    public ?string $maxScore = null;

    /** 
     * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     * @var SecurityVendorInformation|\stdClass|null
     */
    public mixed $vendorInformation = null;


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
        if (isset($data['activeUserCount'])) {
            $this->activeUserCount = $data['activeUserCount'];
        }
        if (isset($data['averageComparativeScores'])) {
            $this->averageComparativeScores = $data['averageComparativeScores'];
        }
        if (isset($data['azureTenantId'])) {
            $this->azureTenantId = $data['azureTenantId'];
        }
        if (isset($data['controlScores'])) {
            $this->controlScores = $data['controlScores'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['currentScore'])) {
            $this->currentScore = $data['currentScore'];
        }
        if (isset($data['enabledServices'])) {
            $this->enabledServices = $data['enabledServices'];
        }
        if (isset($data['licensedUserCount'])) {
            $this->licensedUserCount = $data['licensedUserCount'];
        }
        if (isset($data['maxScore'])) {
            $this->maxScore = $data['maxScore'];
        }
        if (isset($data['vendorInformation'])) {
            $this->vendorInformation = is_array($data['vendorInformation']) ? new SecurityVendorInformation($data['vendorInformation']) : $data['vendorInformation'];
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
