<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppCategory
 */
class MobileAppCategory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the app category. */
    public ?string $displayName = null;

    /** The date and time the mobileAppCategory was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;


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
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
    }
}
