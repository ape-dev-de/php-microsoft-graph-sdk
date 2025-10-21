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
     * @var string[]
     */
    private array $localizations = [];


    /**
     * @return string[]
     */
    public function getLocalizations(): array
    {
        return $this->localizations;
    }

    /**
     * @param string[] $localizations
     */
    public function setLocalizations(array $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

}
