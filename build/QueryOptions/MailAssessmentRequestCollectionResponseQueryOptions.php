<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailAssessmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MailAssessmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MailAssessmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use MailAssessmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
