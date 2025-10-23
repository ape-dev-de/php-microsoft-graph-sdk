<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudCommunications
 */
class CloudCommunications
{
    /** 
     * 
     * @var CallRecordsCallRecord[]
     */
    public array $callRecords = [];

    /** 
     * 
     * @var Call[]
     */
    public array $calls = [];

    /** 
     * 
     * @var OnlineMeeting[]
     */
    public array $onlineMeetings = [];

    /** 
     * 
     * @var Presence[]
     */
    public array $presences = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['callRecords'])) {
            $this->callRecords = $data['callRecords'];
        }
        if (isset($data['calls'])) {
            $this->calls = $data['calls'];
        }
        if (isset($data['onlineMeetings'])) {
            $this->onlineMeetings = $data['onlineMeetings'];
        }
        if (isset($data['presences'])) {
            $this->presences = $data['presences'];
        }
    }
}
