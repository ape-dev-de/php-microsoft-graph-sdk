<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingDateTime
 */
class OmaSettingDateTime
{
    /**
     * OMA Settings DateTime definition.
     */
    private ?\DateTimeInterface $value;


    public function getValue(): ?\DateTimeInterface
    {
        return $this->value;
    }

    public function setValue(?\DateTimeInterface $value): self
    {
        $this->value = $value;
        return $this;
    }

}
