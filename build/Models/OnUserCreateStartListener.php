<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnUserCreateStartListener
 */
class OnUserCreateStartListener
{
    /**
     * Required. Configuration for what to invoke if the event resolves to this listener. This lets us define potential handler configurations per-event.
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
