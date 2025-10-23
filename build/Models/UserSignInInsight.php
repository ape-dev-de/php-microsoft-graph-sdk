<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInInsight
 */
class UserSignInInsight
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates when the insight was created. */
    public ?\DateTimeInterface $insightCreatedDateTime = null;

    /** Indicates when the user last signed in. */
    public ?\DateTimeInterface $lastSignInDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['insightCreatedDateTime'])) {
            $this->insightCreatedDateTime = $data['insightCreatedDateTime'];
        }
        if (isset($data['lastSignInDateTime'])) {
            $this->lastSignInDateTime = $data['lastSignInDateTime'];
        }
    }
}
