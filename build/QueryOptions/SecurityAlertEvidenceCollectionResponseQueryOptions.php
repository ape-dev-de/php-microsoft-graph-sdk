<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertEvidenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityAlertEvidenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityAlertEvidenceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityAlertEvidenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
