<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StoragePlanInformation
 */
class StoragePlanInformation
{
    /** Indicates whether there are higher storage quota plans available. Read-only. */
    public ?bool $upgradeAvailable = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['upgradeAvailable'])) {
            $this->upgradeAvailable = $data['upgradeAvailable'];
        }
    }
}
