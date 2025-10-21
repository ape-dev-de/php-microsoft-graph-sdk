<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsDisplayTemplate resources
 *
 * Available select fields:
 * - id
 * - layout
 * - priority
 * - rules
 */
class ExternalConnectorsDisplayTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsDisplayTemplate
     */
    public const FIELD_ID = 'id';
    public const FIELD_LAYOUT = 'layout';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_RULES = 'rules';

    /**
     * Select specific ExternalConnectorsDisplayTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
