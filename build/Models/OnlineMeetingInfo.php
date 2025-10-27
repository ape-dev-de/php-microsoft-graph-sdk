<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingInfo
 */
class OnlineMeetingInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID of the conference. */
    public ?string $conferenceId = null;

    /** The external link that launches the online meeting. This is a URL that clients launch into a browser and will redirect the user to join the meeting. */
    public ?string $joinUrl = null;

    /** 
     * All of the phone numbers associated with this conference.
     * @var Phone[]
     */
    public array $phones = [];

    /** The preformatted quick dial for this call. */
    public ?string $quickDial = null;

    /** 
     * The toll free numbers that can be used to join the conference.
     * @var string[]
     */
    public array $tollFreeNumbers = [];

    /** The toll number that can be used to join the conference. */
    public ?string $tollNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['conferenceId'])) {
            $this->conferenceId = $data['conferenceId'];
        }
        if (isset($data['joinUrl'])) {
            $this->joinUrl = $data['joinUrl'];
        }
        if (isset($data['phones'])) {
            $this->phones = $data['phones'];
        }
        if (isset($data['quickDial'])) {
            $this->quickDial = $data['quickDial'];
        }
        if (isset($data['tollFreeNumbers'])) {
            $this->tollFreeNumbers = $data['tollFreeNumbers'];
        }
        if (isset($data['tollNumber'])) {
            $this->tollNumber = $data['tollNumber'];
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
