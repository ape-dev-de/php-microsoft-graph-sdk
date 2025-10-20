<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationPredefinedQuestion
 */
class VirtualEventRegistrationPredefinedQuestion
{
    /**
     * Label of the predefined registration question. It accepts a single line of text: street, city, state, postalCode, countryOrRegion, industry, jobTitle, organization, and unknownFutureValue.
     */
    private ?string $label;

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
