<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotificationMessageTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class NotificationMessageTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific NotificationMessageTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use NotificationMessageTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
