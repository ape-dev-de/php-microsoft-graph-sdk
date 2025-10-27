<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleInformation
 */
class ScheduleInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free or working elswhere, 1= tentative, 2= busy, 3= out of office.Note: Working elsewhere is set to 0 instead of 4 for backward compatibility. For details, see the Q&A and Exchange 2007 and Exchange 2010 do not use the WorkingElsewhere value. */
    public ?string $availabilityView = null;

    /** 
     * Error information from attempting to get the availability of the user, distribution list, or resource.
     * @var FreeBusyError|\stdClass|null
     */
    public mixed $error = null;

    /** An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation. */
    public ?string $scheduleId = null;

    /** 
     * Contains the items that describe the availability of the user or resource.
     * @var ScheduleItem[]
     */
    public array $scheduleItems = [];

    /** 
     * The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     * @var WorkingHours|\stdClass|null
     */
    public mixed $workingHours = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['availabilityView'])) {
            $this->availabilityView = $data['availabilityView'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new FreeBusyError($data['error']) : $data['error'];
        }
        if (isset($data['scheduleId'])) {
            $this->scheduleId = $data['scheduleId'];
        }
        if (isset($data['scheduleItems'])) {
            $this->scheduleItems = $data['scheduleItems'];
        }
        if (isset($data['workingHours'])) {
            $this->workingHours = is_array($data['workingHours']) ? new WorkingHours($data['workingHours']) : $data['workingHours'];
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
