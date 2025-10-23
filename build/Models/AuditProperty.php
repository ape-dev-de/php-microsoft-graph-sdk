<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditProperty
 */
class AuditProperty
{
    /** Display name. */
    public ?string $displayName = null;

    /** New value. */
    public ?string $newValue = null;

    /** Old value. */
    public ?string $oldValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['newValue'])) {
            $this->newValue = $data['newValue'];
        }
        if (isset($data['oldValue'])) {
            $this->oldValue = $data['oldValue'];
        }
    }
}
