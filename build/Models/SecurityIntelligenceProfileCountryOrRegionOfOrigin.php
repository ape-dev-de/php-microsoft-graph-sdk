<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfileCountryOrRegionOfOrigin
 */
class SecurityIntelligenceProfileCountryOrRegionOfOrigin
{
    /**
     * A codified representation for this country/region of origin.
     */
    private ?string $code;

    /**
     * A display label for this ountry/region of origin.
     */
    private ?string $label;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

}
