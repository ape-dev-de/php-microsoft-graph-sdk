<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudAttachmentVersion resources
 *
 * Available select fields:
 */
class SecurityCloudAttachmentVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCloudAttachmentVersion
     */

    /**
     * Select specific SecurityCloudAttachmentVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
