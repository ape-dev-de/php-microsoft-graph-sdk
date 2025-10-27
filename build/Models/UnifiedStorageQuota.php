<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedStorageQuota
 */
class UnifiedStorageQuota
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?float $deleted = null;

    /**  */
    public ?string $manageWebUrl = null;

    /**  */
    public ?float $remaining = null;

    /**  */
    public ?string $state = null;

    /**  */
    public ?float $total = null;

    /**  */
    public ?float $used = null;

    /** 
     * 
     * @var ServiceStorageQuotaBreakdown[]
     */
    public array $services = [];


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
        if (isset($data['deleted'])) {
            $this->deleted = $data['deleted'];
        }
        if (isset($data['manageWebUrl'])) {
            $this->manageWebUrl = $data['manageWebUrl'];
        }
        if (isset($data['remaining'])) {
            $this->remaining = $data['remaining'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['total'])) {
            $this->total = $data['total'];
        }
        if (isset($data['used'])) {
            $this->used = $data['used'];
        }
        if (isset($data['services'])) {
            $this->services = $data['services'];
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
