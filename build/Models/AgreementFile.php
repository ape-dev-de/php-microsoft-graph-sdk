<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFile
 */
class AgreementFile
{
    /**
     * The localized version of the terms of use agreement files attached to the agreement.
     */
    private ?string $localizations;

    public function getLocalizations(): ?string
    {
        return $this->localizations;
    }

    public function setLocalizations(?string $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

}
