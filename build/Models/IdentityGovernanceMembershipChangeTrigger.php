<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceMembershipChangeTrigger
 */
class IdentityGovernanceMembershipChangeTrigger
{
    /**
     */
    private ?string $changeType;


    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    public function setChangeType(?string $changeType): self
    {
        $this->changeType = $changeType;
        return $this;
    }

}
