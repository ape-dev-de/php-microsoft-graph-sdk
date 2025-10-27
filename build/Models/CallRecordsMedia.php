<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsMedia
 */
class CallRecordsMedia
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Device information associated with the callee endpoint of this media.
     * @var CallRecordsDeviceInfo|\stdClass|null
     */
    public CallRecordsDeviceInfo|\stdClass|null $calleeDevice = null;

    /** 
     * Network information associated with the callee endpoint of this media.
     * @var CallRecordsNetworkInfo|\stdClass|null
     */
    public CallRecordsNetworkInfo|\stdClass|null $calleeNetwork = null;

    /** 
     * Device information associated with the caller endpoint of this media.
     * @var CallRecordsDeviceInfo|\stdClass|null
     */
    public CallRecordsDeviceInfo|\stdClass|null $callerDevice = null;

    /** 
     * Network information associated with the caller endpoint of this media.
     * @var CallRecordsNetworkInfo|\stdClass|null
     */
    public CallRecordsNetworkInfo|\stdClass|null $callerNetwork = null;

    /** How the media was identified during media negotiation stage. */
    public ?string $label = null;

    /** 
     * Network streams associated with this media.
     * @var CallRecordsMediaStream[]
     */
    public array $streams = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['calleeDevice'])) {
            $this->calleeDevice = is_array($data['calleeDevice']) ? new CallRecordsDeviceInfo($data['calleeDevice']) : $data['calleeDevice'];
        }
        if (isset($data['calleeNetwork'])) {
            $this->calleeNetwork = is_array($data['calleeNetwork']) ? new CallRecordsNetworkInfo($data['calleeNetwork']) : $data['calleeNetwork'];
        }
        if (isset($data['callerDevice'])) {
            $this->callerDevice = is_array($data['callerDevice']) ? new CallRecordsDeviceInfo($data['callerDevice']) : $data['callerDevice'];
        }
        if (isset($data['callerNetwork'])) {
            $this->callerNetwork = is_array($data['callerNetwork']) ? new CallRecordsNetworkInfo($data['callerNetwork']) : $data['callerNetwork'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['streams'])) {
            $this->streams = $data['streams'];
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
