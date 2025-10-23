<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppOperation
 */
class ManagedAppOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The operation name. */
    public ?string $displayName = null;

    /** The last time the app operation was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The current state of the operation */
    public ?string $state = null;

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
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
