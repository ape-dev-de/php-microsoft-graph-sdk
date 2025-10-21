<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailSearchFolder resources
 *
 * Available select fields:
 */
class MailSearchFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailSearchFolder
     */

    /**
     * Select specific MailSearchFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
