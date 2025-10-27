<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrenceRange
 */
class RecurrenceRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The date to stop applying the recurrence pattern. Depending on the recurrence pattern of the event, the last occurrence of the meeting may not be this date. Required if type is endDate. */
    public ?\DateTimeInterface $endDate = null;

    /** The number of times to repeat the event. Required and must be positive if type is numbered. */
    public ?float $numberOfOccurrences = null;

    /** Time zone for the startDate and endDate properties. Optional. If not specified, the time zone of the event is used. */
    public ?string $recurrenceTimeZone = null;

    /** The date to start applying the recurrence pattern. The first occurrence of the meeting may be this date or later, depending on the recurrence pattern of the event. Must be the same value as the start property of the recurring event. Required. */
    public ?\DateTimeInterface $startDate = null;

    /** 
     * The recurrence range. The possible values are: endDate, noEnd, numbered. Required.
     * @var RecurrenceRangeType|\stdClass|null
     */
    public RecurrenceRangeType|\stdClass|null $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['endDate'])) {
            $this->endDate = is_string($data['endDate']) ? new \DateTimeImmutable($data['endDate']) : $data['endDate'];
        }
        if (isset($data['numberOfOccurrences'])) {
            $this->numberOfOccurrences = is_numeric($data['numberOfOccurrences']) ? (float)$data['numberOfOccurrences'] : $data['numberOfOccurrences'];
        }
        if (isset($data['recurrenceTimeZone'])) {
            $this->recurrenceTimeZone = $data['recurrenceTimeZone'];
        }
        if (isset($data['startDate'])) {
            $this->startDate = is_string($data['startDate']) ? new \DateTimeImmutable($data['startDate']) : $data['startDate'];
        }
        if (isset($data['type'])) {
            $this->type = is_string($data['type']) ? RecurrenceRangeType::tryFrom($data['type']) : $data['type'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
