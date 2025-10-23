<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUnclassifiedArtifact
 */
class SecurityUnclassifiedArtifact
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The kind for this unclassifiedArtifact resource, describing what this value means. */
    public ?string $kind = null;

    /** The value for this unclassifiedArtifact. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['kind'])) {
            $this->kind = $data['kind'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
