<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentTroubleshootingEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EnrollmentTroubleshootingEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EnrollmentTroubleshootingEventCollectionResponse properties
     * 
     * @param array<string> $select Use EnrollmentTroubleshootingEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
