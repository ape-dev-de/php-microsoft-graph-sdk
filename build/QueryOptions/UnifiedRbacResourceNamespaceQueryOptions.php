<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceNamespace resources
 *
 * Available select fields:
 * - name
 * - resourceActions
 */
class UnifiedRbacResourceNamespaceQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_RESOURCE_ACTIONS = 'resourceActions';

    /**
     * Select specific UnifiedRbacResourceNamespace properties
     * 
     * @param array<string> $select Use UnifiedRbacResourceNamespaceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
