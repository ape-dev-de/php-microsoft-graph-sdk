<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GovernanceInsight
 */
class GovernanceInsight
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates when the insight was created. */
    public ?\DateTimeInterface $insightCreatedDateTime = null;


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
            $this->insightCreatedDateTime = is_string($data['insightCreatedDateTime']) ? new \DateTimeImmutable($data['insightCreatedDateTime']) : $data['insightCreatedDateTime'];
        }
    }
}
