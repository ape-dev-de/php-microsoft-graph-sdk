<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncompleteData
 */
class IncompleteData
{
    /**
     * The service does not have source data before the specified time.
     */
    private ?\DateTimeInterface $missingDataBeforeDateTime;

    /**
     * Some data was not recorded due to excessive activity.
     */
    private ?string $wasThrottled;


    public function getMissingDataBeforeDateTime(): ?\DateTimeInterface
    {
        return $this->missingDataBeforeDateTime;
    }

    public function setMissingDataBeforeDateTime(?\DateTimeInterface $missingDataBeforeDateTime): self
    {
        $this->missingDataBeforeDateTime = $missingDataBeforeDateTime;
        return $this;
    }

    public function getWasThrottled(): ?string
    {
        return $this->wasThrottled;
    }

    public function setWasThrottled(?string $wasThrottled): self
    {
        $this->wasThrottled = $wasThrottled;
        return $this;
    }

}
