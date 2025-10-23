<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationConfiguration
 */
class OnPremisesDirectorySynchronizationConfiguration
{
    /** 
     * Contains the accidental deletion prevention configuration for a tenant.
     * @var OnPremisesAccidentalDeletionPrevention|\stdClass|null
     */
    public mixed $accidentalDeletionPrevention = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['accidentalDeletionPrevention'])) {
            $this->accidentalDeletionPrevention = $data['accidentalDeletionPrevention'];
        }
    }
}
