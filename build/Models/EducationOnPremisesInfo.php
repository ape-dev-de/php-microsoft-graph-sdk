<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOnPremisesInfo
 */
class EducationOnPremisesInfo
{
    /** Unique identifier for the user object in Active Directory. */
    public ?string $immutableId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['immutableId'])) {
            $this->immutableId = $data['immutableId'];
        }
    }
}
