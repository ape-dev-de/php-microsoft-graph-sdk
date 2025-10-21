<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSMicrosoftEdgeApp
 */
class MacOSMicrosoftEdgeApp
{
    /**
     * Contains properties and inherited properties for the macOS Microsoft Edge App.
     */
    private ?string $channel;


    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

}
