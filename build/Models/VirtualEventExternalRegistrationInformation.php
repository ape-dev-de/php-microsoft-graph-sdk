<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalRegistrationInformation
 */
class VirtualEventExternalRegistrationInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A URL or string that represents the location from which the registrant registered. Optional. */
    public ?string $referrer = null;

    /** The identifier for a virtualEventExternalRegistrationInformation object. Optional. If set, the maximum supported length is 256 characters. */
    public ?string $registrationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['referrer'])) {
            $this->referrer = $data['referrer'];
        }
        if (isset($data['registrationId'])) {
            $this->registrationId = $data['registrationId'];
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
