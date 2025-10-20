<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GovernanceInsight
 */
class GovernanceInsight
{
    /**
     * Indicates when the insight was created.
     */
    private ?\DateTimeInterface $insightCreatedDateTime;

    public function getInsightCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->insightCreatedDateTime;
    }

    public function setInsightCreatedDateTime(?\DateTimeInterface $insightCreatedDateTime): self
    {
        $this->insightCreatedDateTime = $insightCreatedDateTime;
        return $this;
    }

}
