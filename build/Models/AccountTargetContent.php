<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccountTargetContent
 */
class AccountTargetContent
{
    /**
     * The type of account target content. Possible values are: unknown, includeAll, addressBook, unknownFutureValue.
     */
    private ?string $type;

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
