<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseUnitsDetail
 */
class LicenseUnitsDetail
{
    /**
     * The number of units that are enabled for the active subscription of the service SKU.
     */
    private ?float $enabled;

    /**
     * The number of units that are locked out because the customer canceled their subscription of the service SKU.
     */
    private ?float $lockedOut;

    /**
     * The number of units that are suspended because the subscription of the service SKU has been canceled. The units can't be assigned but can still be reactivated before they're deleted.
     */
    private ?float $suspended;

    /**
     * The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it''s canceled (moved to a suspended state).
     */
    private ?string $warning;

    public function getEnabled(): ?float
    {
        return $this->enabled;
    }

    public function setEnabled(?float $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getLockedOut(): ?float
    {
        return $this->lockedOut;
    }

    public function setLockedOut(?float $lockedOut): self
    {
        $this->lockedOut = $lockedOut;
        return $this;
    }

    public function getSuspended(): ?float
    {
        return $this->suspended;
    }

    public function setSuspended(?float $suspended): self
    {
        $this->suspended = $suspended;
        return $this;
    }

    public function getWarning(): ?string
    {
        return $this->warning;
    }

    public function setWarning(?string $warning): self
    {
        $this->warning = $warning;
        return $this;
    }

}
