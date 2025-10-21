<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalItem resources
 *
 * Available select fields:
 * - acl
 * - content
 * - anyOf
 */
class ExternalConnectorsExternalItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalItem
     */
    public const FIELD_ACL = 'acl';
    public const FIELD_CONTENT = 'content';
    public const FIELD_ANY_OF = 'anyOf';

    /**
     * Select specific ExternalConnectorsExternalItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
