<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationCategory
 */
class EducationCategory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Unique identifier for the category. */
    public ?string $displayName = null;


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
    }
}
