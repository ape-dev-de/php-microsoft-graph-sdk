<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrenceRange
 */
class RecurrenceRange
{
    /**
     * The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate.
     */
    private ?\DateTimeInterface $endDate;

    /**
     * The number of times to repeat the event. Required and must be positive if type is numbered.
     */
    private ?float $numberOfOccurrences;

    /**
     * Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used.
     */
    private ?string $recurrenceTimeZone;

    /**
     * The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required.
     */
    private ?\DateTimeInterface $startDate;

    /**
     * The recurrence range. The possible values are: endDate, noEnd, numbered. Required.
     */
    private ?string $type;

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getNumberOfOccurrences(): ?float
    {
        return $this->numberOfOccurrences;
    }

    public function setNumberOfOccurrences(?float $numberOfOccurrences): self
    {
        $this->numberOfOccurrences = $numberOfOccurrences;
        return $this;
    }

    public function getRecurrenceTimeZone(): ?string
    {
        return $this->recurrenceTimeZone;
    }

    public function setRecurrenceTimeZone(?string $recurrenceTimeZone): self
    {
        $this->recurrenceTimeZone = $recurrenceTimeZone;
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;
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
