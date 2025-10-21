<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnAttributeCollectionListener
 */
class OnAttributeCollectionListener
{
    /**
     * Required. Configuration for what to invoke if the event resolves to this listener.
     */
    private ?string $handler;


    public function getHandler(): ?string
    {
        return $this->handler;
    }

    public function setHandler(?string $handler): self
    {
        $this->handler = $handler;
        return $this;
    }

}
