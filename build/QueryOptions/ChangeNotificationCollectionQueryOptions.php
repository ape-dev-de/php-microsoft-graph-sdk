<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChangeNotificationCollection resources
 *
 * Available select fields:
 * - validationTokens
 * - value
 */
class ChangeNotificationCollectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChangeNotificationCollection
     */
    public const FIELD_VALIDATION_TOKENS = 'validationTokens';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ChangeNotificationCollection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
