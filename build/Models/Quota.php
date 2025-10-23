<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Quota
 */
class Quota
{
    /** Total space consumed by files in the recycle bin, in bytes. Read-only. */
    public ?float $deleted = null;

    /** Total space remaining before reaching the capacity limit, in bytes. Read-only. */
    public ?float $remaining = null;

    /** Enumeration value that indicates the state of the storage space. Read-only. */
    public ?string $state = null;

    /** 
     * Information about the drive's storage quota plans. Only in Personal OneDrive.
     * @var StoragePlanInformation|\stdClass|null
     */
    public mixed $storagePlanInformation = null;

    /** Total allowed storage space, in bytes. Read-only. */
    public ?float $total = null;

    /** Total space used, in bytes. Read-only. */
    public ?float $used = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deleted'])) {
            $this->deleted = $data['deleted'];
        }
        if (isset($data['remaining'])) {
            $this->remaining = $data['remaining'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['storagePlanInformation'])) {
            $this->storagePlanInformation = $data['storagePlanInformation'];
        }
        if (isset($data['total'])) {
            $this->total = $data['total'];
        }
        if (isset($data['used'])) {
            $this->used = $data['used'];
        }
    }
}
