<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxRestoreArtifact resources
 *
 * Available select fields:
 */
class MailboxRestoreArtifactQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailboxRestoreArtifact
     */

    /**
     * Select specific MailboxRestoreArtifact properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
