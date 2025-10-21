<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlertFeedback resources
 *
 * Available select fields:
 */
class AlertFeedbackQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AlertFeedback
     */

    /**
     * Select specific AlertFeedback properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
