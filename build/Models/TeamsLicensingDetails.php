<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsLicensingDetails
 */
class TeamsLicensingDetails
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the user has a valid license to use Microsoft Teams. */
    public ?bool $hasTeamsLicense = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['hasTeamsLicense'])) {
            $this->hasTeamsLicense = $data['hasTeamsLicense'];
        }
    }
}
