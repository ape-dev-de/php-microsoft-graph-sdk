<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHealthIssueCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHealthIssueCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHealthIssueCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHealthIssueCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
