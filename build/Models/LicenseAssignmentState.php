<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseAssignmentState
 */
class LicenseAssignmentState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?string $assignedByGroup = null;

    /** 
     * 
     * @var string[]
     */
    public array $disabledPlans = [];

    /**  */
    public ?string $error = null;

    /**  */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?string $skuId = null;

    /**  */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignedByGroup'])) {
            $this->assignedByGroup = $data['assignedByGroup'];
        }
        if (isset($data['disabledPlans'])) {
            $this->disabledPlans = $data['disabledPlans'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
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
