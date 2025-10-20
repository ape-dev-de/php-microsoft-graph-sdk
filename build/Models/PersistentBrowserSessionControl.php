<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersistentBrowserSessionControl
 */
class PersistentBrowserSessionControl
{
    /**
     * Possible values are: always, never.
     */
    private ?string $mode;

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

}
