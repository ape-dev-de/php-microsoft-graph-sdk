<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftActivity
 */
class ShiftActivity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Customer defined code for the shiftActivity. Required. */
    public ?string $code = null;

    /** The name of the shiftActivity. Required. */
    public ?string $displayName = null;

    /** The end date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required. */
    public ?\DateTimeInterface $endDateTime = null;

    /** Indicates whether the microsoft.graph.user should be paid for the activity during their shift. Required. */
    public ?bool $isPaid = null;

    /** The start date and time for the shiftActivity. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required. */
    public ?\DateTimeInterface $startDateTime = null;

    /**  */
    public ?ScheduleEntityTheme $theme = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['isPaid'])) {
            $this->isPaid = is_bool($data['isPaid']) ? $data['isPaid'] : (bool)$data['isPaid'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['theme'])) {
            $this->theme = is_array($data['theme']) ? new ScheduleEntityTheme($data['theme']) : $data['theme'];
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
