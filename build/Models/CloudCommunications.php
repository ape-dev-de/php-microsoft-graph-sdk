<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudCommunications
 */
class CloudCommunications
{
    /**
     */
    private array $callRecords = [];

    /**
     */
    private array $calls = [];

    /**
     */
    private array $onlineMeetings = [];

    /**
     */
    private ?string $presences;

    public function getCallRecords(): array
    {
        return $this->callRecords;
    }

    public function setCallRecords(array $callRecords): self
    {
        $this->callRecords = $callRecords;
        return $this;
    }

    public function getCalls(): array
    {
        return $this->calls;
    }

    public function setCalls(array $calls): self
    {
        $this->calls = $calls;
        return $this;
    }

    public function getOnlineMeetings(): array
    {
        return $this->onlineMeetings;
    }

    public function setOnlineMeetings(array $onlineMeetings): self
    {
        $this->onlineMeetings = $onlineMeetings;
        return $this;
    }

    public function getPresences(): ?string
    {
        return $this->presences;
    }

    public function setPresences(?string $presences): self
    {
        $this->presences = $presences;
        return $this;
    }

}
