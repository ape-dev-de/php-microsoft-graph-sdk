<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppScope
 */
class AppScope
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Provides the display name of the app-specific resource represented by the app scope. Read-only. */
    public ?string $displayName = null;

    /** Describes the type of app-specific resource represented by the app scope. Read-only. */
    public ?string $type = null;


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
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
