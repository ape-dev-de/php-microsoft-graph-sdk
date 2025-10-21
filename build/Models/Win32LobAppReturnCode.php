<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppReturnCode
 */
class Win32LobAppReturnCode
{
    /**
     * Return code.
     */
    private ?float $returnCode;

    /**
     * Contains return code properties for a Win32 App
     */
    private ?string $type;


    public function getReturnCode(): ?float
    {
        return $this->returnCode;
    }

    public function setReturnCode(?float $returnCode): self
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
