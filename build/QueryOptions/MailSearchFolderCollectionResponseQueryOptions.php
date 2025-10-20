<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailSearchFolderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MailSearchFolderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MailSearchFolderCollectionResponse properties
     * 
     * @param array<string> $select Use MailSearchFolderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
