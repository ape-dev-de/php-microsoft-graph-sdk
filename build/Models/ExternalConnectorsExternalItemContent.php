<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItemContent
 */
class ExternalConnectorsExternalItemContent
{
    /**
     */
    private ?string $type;

    /**
     * The content for the externalItem. Required.
     */
    private ?string $value;


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

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
