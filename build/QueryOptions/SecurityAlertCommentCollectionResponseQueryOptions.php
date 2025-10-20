<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertCommentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityAlertCommentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityAlertCommentCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityAlertCommentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
