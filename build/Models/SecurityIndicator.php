<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicator
 */
class SecurityIndicator
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?SecurityIndicatorSource $source = null;

    /**  */
    public ?SecurityArtifact $artifact = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['artifact'])) {
            $this->artifact = $data['artifact'];
        }
    }
}
