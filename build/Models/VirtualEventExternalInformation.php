<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalInformation
 */
class VirtualEventExternalInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Identifier of the application that hosts the externalEventId. Read-only. */
    public ?string $applicationId = null;

    /** The identifier for a virtualEventExternalInformation object that associates the virtual event with an event ID in an external application. This association bundles all the information (both supported and not supported in virtualEvent) into one virtual event object. Optional. If set, the maximum supported length is 256 characters. */
    public ?string $externalEventId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationId'])) {
            $this->applicationId = $data['applicationId'];
        }
        if (isset($data['externalEventId'])) {
            $this->externalEventId = $data['externalEventId'];
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
