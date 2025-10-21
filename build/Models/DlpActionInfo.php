<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DlpActionInfo
 */
class DlpActionInfo
{
    /**
     * The type of DLP action. Possible value is restrictAccessAction.
     */
    private ?string $action;


    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

}
