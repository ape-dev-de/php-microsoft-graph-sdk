<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CurrencyColumn
 */
class CurrencyColumn
{
    /**
     * Specifies the locale from which to infer the currency symbol.
     */
    private ?string $locale;


    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

}
