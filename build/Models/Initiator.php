<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Initiator
 */
class Initiator
{
    /**
     * Type of initiator. Possible values are: user, application, system, unknownFutureValue.
     */
    private ?string $initiatorType;


    public function getInitiatorType(): ?string
    {
        return $this->initiatorType;
    }

    public function setInitiatorType(?string $initiatorType): self
    {
        $this->initiatorType = $initiatorType;
        return $this;
    }

}
