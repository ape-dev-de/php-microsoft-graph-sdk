<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLearningSummary
 */
class WindowsInformationProtectionAppLearningSummary
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Application Name */
    public ?string $applicationName = null;

    /**  */
    public ?ApplicationType $applicationType = null;

    /** Device Count */
    public ?float $deviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['applicationName'])) {
            $this->applicationName = $data['applicationName'];
        }
        if (isset($data['applicationType'])) {
            $this->applicationType = $data['applicationType'];
        }
        if (isset($data['deviceCount'])) {
            $this->deviceCount = $data['deviceCount'];
        }
    }
}
