<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGuestsOrExternalUsers
 */
class ConditionalAccessGuestsOrExternalUsers
{
    /**
     * The tenant IDs of the selected types of external users. Either all B2B tenant or a collection of tenant IDs. External tenants can be specified only when the property guestOrExternalUserTypes isn't null or an empty String.
     */
    private ?string $externalTenants;

    /**
     */
    private ?string $guestOrExternalUserTypes;

    public function getExternalTenants(): ?string
    {
        return $this->externalTenants;
    }

    public function setExternalTenants(?string $externalTenants): self
    {
        $this->externalTenants = $externalTenants;
        return $this;
    }

    public function getGuestOrExternalUserTypes(): ?string
    {
        return $this->guestOrExternalUserTypes;
    }

    public function setGuestOrExternalUserTypes(?string $guestOrExternalUserTypes): self
    {
        $this->guestOrExternalUserTypes = $guestOrExternalUserTypes;
        return $this;
    }

}
