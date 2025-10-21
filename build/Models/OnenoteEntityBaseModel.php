<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteEntityBaseModel
 */
class OnenoteEntityBaseModel
{
    /**
     * The endpoint where you can get details about the page. Read-only.
     */
    private ?string $self;


    public function getSelf(): ?string
    {
        return $this->self;
    }

    public function setSelf(?string $self): self
    {
        $this->self = $self;
        return $this;
    }

}
