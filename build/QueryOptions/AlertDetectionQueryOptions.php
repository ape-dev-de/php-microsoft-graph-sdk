<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertDetection resources
 *
 * Available select fields:
 * - detectionType
 * - method
 * - name
 */
class AlertDetectionQueryOptions extends QueryOptions
{
    public const FIELD_DETECTION_TYPE = 'detectionType';
    public const FIELD_METHOD = 'method';
    public const FIELD_NAME = 'name';

    /**
     * Select specific AlertDetection properties
     * 
     * @param array<string> $select Use AlertDetectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
