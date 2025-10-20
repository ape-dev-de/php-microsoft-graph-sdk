<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestrictAccessActionBase
 */
class RestrictAccessActionBase
{
    /**
     * Action for the app to take. The possible values are: warn, audit, block.
     */
    private ?string $restrictionAction;

    public function getRestrictionAction(): ?string
    {
        return $this->restrictionAction;
    }

    public function setRestrictionAction(?string $restrictionAction): self
    {
        $this->restrictionAction = $restrictionAction;
        return $this;
    }

}
