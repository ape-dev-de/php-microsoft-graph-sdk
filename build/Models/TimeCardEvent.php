<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEvent
 */
class TimeCardEvent
{
    /** The time the entry is recorded. */
    public ?\DateTimeInterface $dateTime = null;

    /** Indicates whether this action happens at an approved location. */
    public ?bool $isAtApprovedLocation = null;

    /** 
     * Notes about the timeCardEvent.
     * @var ItemBody|\stdClass|null
     */
    public mixed $notes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['dateTime'])) {
            $this->dateTime = $data['dateTime'];
        }
        if (isset($data['isAtApprovedLocation'])) {
            $this->isAtApprovedLocation = $data['isAtApprovedLocation'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
    }
}
