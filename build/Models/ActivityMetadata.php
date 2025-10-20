<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityMetadata
 */
class ActivityMetadata
{
    /**
     */
    private ?string $activity;

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

}
