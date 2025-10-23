<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StorageQuotaBreakdown
 */
class StorageQuotaBreakdown
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $displayName = null;

    /**  */
    public ?string $manageWebUrl = null;

    /**  */
    public ?float $used = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['manageWebUrl'])) {
            $this->manageWebUrl = $data['manageWebUrl'];
        }
        if (isset($data['used'])) {
            $this->used = $data['used'];
        }
    }
}
