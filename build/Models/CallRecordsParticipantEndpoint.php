<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantEndpoint
 */
class CallRecordsParticipantEndpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * User-agent reported by this endpoint.
     * @var CallRecordsUserAgent|\stdClass|null
     */
    public CallRecordsUserAgent|\stdClass|null $userAgent = null;

    /** 
     * Identity associated with the endpoint.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $associatedIdentity = null;

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
    public CallRecordsUserFeedback|\stdClass|null $feedback = null;

    /** 
     * Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $identity = null;

    /** Name of the device used by the media endpoint. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['userAgent'])) {
            $this->userAgent = is_array($data['userAgent']) ? new CallRecordsUserAgent($data['userAgent']) : $data['userAgent'];
        }
        if (isset($data['associatedIdentity'])) {
            $this->associatedIdentity = is_array($data['associatedIdentity']) ? new Identity($data['associatedIdentity']) : $data['associatedIdentity'];
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
            $this->feedback = is_array($data['feedback']) ? new CallRecordsUserFeedback($data['feedback']) : $data['feedback'];
        }
        if (isset($data['identity'])) {
            $this->identity = is_array($data['identity']) ? new IdentitySet($data['identity']) : $data['identity'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
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
