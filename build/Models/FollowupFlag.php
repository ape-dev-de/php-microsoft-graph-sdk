<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FollowupFlag
 */
class FollowupFlag
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The date and time that the follow-up was finished.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $completedDateTime = null;

    /** 
     * The date and time that the follow-up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you get a 400 Bad Request response.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $dueDateTime = null;

    /** 
     * The status for follow-up for an item. Possible values are notFlagged, complete, and flagged.
     * @var FollowupFlagStatus|\stdClass|null
     */
    public mixed $flagStatus = null;

    /** 
     * The date and time that the follow-up is to begin.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_array($data['completedDateTime']) ? new DateTimeTimeZone($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['dueDateTime'])) {
            $this->dueDateTime = is_array($data['dueDateTime']) ? new DateTimeTimeZone($data['dueDateTime']) : $data['dueDateTime'];
        }
        if (isset($data['flagStatus'])) {
            $this->flagStatus = is_array($data['flagStatus']) ? new FollowupFlagStatus($data['flagStatus']) : $data['flagStatus'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
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
