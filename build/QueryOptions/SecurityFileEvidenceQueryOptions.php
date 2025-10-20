<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileEvidence resources
 *
 * Available select fields:
 * - detectionStatus
 * - fileDetails
 * - mdeDeviceId
 */
class SecurityFileEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_DETECTION_STATUS = 'detectionStatus';
    public const FIELD_FILE_DETAILS = 'fileDetails';
    public const FIELD_MDE_DEVICE_ID = 'mdeDeviceId';

    /**
     * Select specific SecurityFileEvidence properties
     * 
     * @param array<string> $select Use SecurityFileEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
