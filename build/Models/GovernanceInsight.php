<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GovernanceInsight
 */
class GovernanceInsight
{
    public function __construct(
        /** Indicates when the insight was created. */
        public ?\DateTimeInterface $insightCreatedDateTime = null
    ) {}
}
