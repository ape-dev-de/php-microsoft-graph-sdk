<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GovernanceInsight
 */
class GovernanceInsight
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates when the insight was created. */
        public ?\DateTimeInterface $insightCreatedDateTime = null
    ) {}
}
