<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyLocation
 */
class PolicyLocation
{
    /**
     * The actual value representing the location. Location value is specific for concretetype of the  policyLocation - policyLocationDomain, policyLocationUrl, or policyLocationApplication (for example, ''contoso.com'', ''https://partner.contoso.com/upload'', ''83ef198a-0396-4893-9d4f-d36efbffcaaa'').
     */
    private ?string $value;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
