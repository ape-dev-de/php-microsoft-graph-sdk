<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartListener
 */
class OnTokenIssuanceStartListener
{
    /**
     * The handler to invoke when conditions are met for this onTokenIssuanceStartListener.
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
