<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCurrency
 */
class BookingCurrency
{
    /**
     * The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $.
     */
    private ?string $symbol;

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

}
