<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsMedia
 */
class CallRecordsMedia
{
    /** 
     * Device information associated with the callee endpoint of this media.
     * @var CallRecordsDeviceInfo|\stdClass|null
     */
    public mixed $calleeDevice = null;

    /** 
     * Network information associated with the callee endpoint of this media.
     * @var CallRecordsNetworkInfo|\stdClass|null
     */
    public mixed $calleeNetwork = null;

    /** 
     * Device information associated with the caller endpoint of this media.
     * @var CallRecordsDeviceInfo|\stdClass|null
     */
    public mixed $callerDevice = null;

    /** 
     * Network information associated with the caller endpoint of this media.
     * @var CallRecordsNetworkInfo|\stdClass|null
     */
    public mixed $callerNetwork = null;

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
        if (isset($data['calleeDevice'])) {
            $this->calleeDevice = $data['calleeDevice'];
        }
        if (isset($data['calleeNetwork'])) {
            $this->calleeNetwork = $data['calleeNetwork'];
        }
        if (isset($data['callerDevice'])) {
            $this->callerDevice = $data['callerDevice'];
        }
        if (isset($data['callerNetwork'])) {
            $this->callerNetwork = $data['callerNetwork'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['streams'])) {
            $this->streams = $data['streams'];
        }
    }
}
