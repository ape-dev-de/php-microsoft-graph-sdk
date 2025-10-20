<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallMediaState
 */
class CallMediaState
{
    /**
     * The audio media state. Possible values are: active, inactive, unknownFutureValue.
     */
    private ?string $audio;

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

}
