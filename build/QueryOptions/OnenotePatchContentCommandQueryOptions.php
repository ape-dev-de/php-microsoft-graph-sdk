<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePatchContentCommand resources
 *
 * Available select fields:
 * - action
 * - content
 * - position
 * - target
 */
class OnenotePatchContentCommandQueryOptions extends QueryOptions
{
    public const FIELD_ACTION = 'action';
    public const FIELD_CONTENT = 'content';
    public const FIELD_POSITION = 'position';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific OnenotePatchContentCommand properties
     * 
     * @param array<string> $select Use OnenotePatchContentCommandQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
