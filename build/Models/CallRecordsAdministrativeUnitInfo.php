<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsAdministrativeUnitInfo
 */
class CallRecordsAdministrativeUnitInfo
{
    /** Unique identifier for the administrative unit. */
    public ?string $id = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
    }
}
