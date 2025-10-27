<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfOfficeSettings
 */
class OutOfOfficeSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If true, either of the following is met:The current time falls within the out-of-office window configured in Outlook or Teams.An event marked as 'Show as Out of Office' appears on the user's calendar.Otherwise, false. */
    public ?bool $isOutOfOffice = null;

    /** The out-of-office message configured by the user in the Outlook client (Automatic replies) or the Teams client (Schedule out of office). */
    public ?string $message = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isOutOfOffice'])) {
            $this->isOutOfOffice = is_bool($data['isOutOfOffice']) ? $data['isOutOfOffice'] : (bool)$data['isOutOfOffice'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
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
