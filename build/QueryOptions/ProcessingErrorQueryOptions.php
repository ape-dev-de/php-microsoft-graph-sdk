<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessingError resources
 *
 * Available select fields:
 * - errorType
 */
class ProcessingErrorQueryOptions extends QueryOptions
{
    public const FIELD_ERROR_TYPE = 'errorType';

    /**
     * Select specific ProcessingError properties
     * 
     * @param array<string> $select Use ProcessingErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
