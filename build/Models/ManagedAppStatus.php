<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatus
 */
class ManagedAppStatus
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Friendly name of the status report. */
    public ?string $displayName = null;

    /** Version of the entity. */
    public ?string $version = null;


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
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
