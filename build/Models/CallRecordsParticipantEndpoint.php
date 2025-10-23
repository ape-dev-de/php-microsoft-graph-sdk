<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantEndpoint
 */
class CallRecordsParticipantEndpoint
{
    /** 
     * User-agent reported by this endpoint.
     * @var CallRecordsUserAgent|\stdClass|null
     */
    public mixed $userAgent = null;

    /** 
     * Identity associated with the endpoint.
     * @var Identity|\stdClass|null
     */
    public mixed $associatedIdentity = null;

    /** CPU number of cores used by the media endpoint. */
    public ?float $cpuCoresCount = null;

    /** CPU name used by the media endpoint. */
    public ?string $cpuName = null;

    /** CPU processor speed used by the media endpoint. */
    public ?float $cpuProcessorSpeedInMhz = null;

    /** 
     * The feedback provided by the user of this endpoint about the quality of the session.
     * @var CallRecordsUserFeedback|\stdClass|null
     */
    public mixed $feedback = null;

    /** 
     * Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $identity = null;

    /** Name of the device used by the media endpoint. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userAgent'])) {
            $this->userAgent = $data['userAgent'];
        }
        if (isset($data['associatedIdentity'])) {
            $this->associatedIdentity = $data['associatedIdentity'];
        }
        if (isset($data['cpuCoresCount'])) {
            $this->cpuCoresCount = $data['cpuCoresCount'];
        }
        if (isset($data['cpuName'])) {
            $this->cpuName = $data['cpuName'];
        }
        if (isset($data['cpuProcessorSpeedInMhz'])) {
            $this->cpuProcessorSpeedInMhz = $data['cpuProcessorSpeedInMhz'];
        }
        if (isset($data['feedback'])) {
            $this->feedback = $data['feedback'];
        }
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
