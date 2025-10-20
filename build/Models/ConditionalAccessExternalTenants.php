<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessExternalTenants
 */
class ConditionalAccessExternalTenants
{
    /**
     * The membership kind. Possible values are: all, enumerated, unknownFutureValue. The enumerated member references an conditionalAccessEnumeratedExternalTenants object.
     */
    private ?string $membershipKind;

    public function getMembershipKind(): ?string
    {
        return $this->membershipKind;
    }

    public function setMembershipKind(?string $membershipKind): self
    {
        $this->membershipKind = $membershipKind;
        return $this;
    }

}
