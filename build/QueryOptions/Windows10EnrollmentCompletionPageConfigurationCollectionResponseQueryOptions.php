<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EnrollmentCompletionPageConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10EnrollmentCompletionPageConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10EnrollmentCompletionPageConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10EnrollmentCompletionPageConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
