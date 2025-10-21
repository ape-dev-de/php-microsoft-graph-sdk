<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShareAction resources
 *
 * Available select fields:
 * - recipients
 */
class ShareActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ShareAction
     */
    public const FIELD_RECIPIENTS = 'recipients';

    /**
     * Select specific ShareAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
