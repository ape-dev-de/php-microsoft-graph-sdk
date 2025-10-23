<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleItem
 */
class ScheduleItem
{
    /** 
     * The date, time, and time zone that the corresponding event ends.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $end = null;

    /** The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional. */
    public ?bool $isPrivate = null;

    /** The location where the corresponding event is held or attended from. Optional. */
    public ?string $location = null;

    /** 
     * The date, time, and time zone that the corresponding event starts.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $start = null;

    /** 
     * The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @var FreeBusyStatus|\stdClass|null
     */
    public mixed $status = null;

    /** The corresponding event's subject line. Optional. */
    public ?string $subject = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['end'])) {
            $this->end = is_array($data['end']) ? new DateTimeTimeZone($data['end']) : $data['end'];
        }
        if (isset($data['isPrivate'])) {
            $this->isPrivate = $data['isPrivate'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['start'])) {
            $this->start = is_array($data['start']) ? new DateTimeTimeZone($data['start']) : $data['start'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new FreeBusyStatus($data['status']) : $data['status'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
    }
}
