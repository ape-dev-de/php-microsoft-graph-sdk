<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailFolder resources
 *
 * Available select fields:
 */
class MailFolderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailFolder
     */

    /**
     * Select specific MailFolder properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
