<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioConferencing
 */
class AudioConferencing
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The conference id of the online meeting. */
    public ?string $conferenceId = null;

    /** A URL to the externally-accessible web page that contains dial-in information. */
    public ?string $dialinUrl = null;

    /** The toll-free number that connects to the Audio Conference Provider. */
    public ?string $tollFreeNumber = null;

    /** 
     * List of toll-free numbers that are displayed in the meeting invite.
     * @var string[]
     */
    public array $tollFreeNumbers = [];

    /** The toll number that connects to the Audio Conference Provider. */
    public ?string $tollNumber = null;

    /** 
     * List of toll numbers that are displayed in the meeting invite.
     * @var string[]
     */
    public array $tollNumbers = [];


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
        if (isset($data['dialinUrl'])) {
            $this->dialinUrl = $data['dialinUrl'];
        }
        if (isset($data['tollFreeNumber'])) {
            $this->tollFreeNumber = $data['tollFreeNumber'];
        }
        if (isset($data['tollFreeNumbers'])) {
            $this->tollFreeNumbers = $data['tollFreeNumbers'];
        }
        if (isset($data['tollNumber'])) {
            $this->tollNumber = $data['tollNumber'];
        }
        if (isset($data['tollNumbers'])) {
            $this->tollNumbers = $data['tollNumbers'];
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
