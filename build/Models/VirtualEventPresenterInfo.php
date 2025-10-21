<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenterInfo
 */
class VirtualEventPresenterInfo
{
    /**
     */
    private ?string $presenterDetails;


    public function getPresenterDetails(): ?string
    {
        return $this->presenterDetails;
    }

    public function setPresenterDetails(?string $presenterDetails): self
    {
        $this->presenterDetails = $presenterDetails;
        return $this;
    }

}
