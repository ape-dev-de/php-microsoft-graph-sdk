<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsUserFeedback resources
 *
 * Available select fields:
 * - rating
 * - text
 * - tokens
 */
class CallRecordsUserFeedbackQueryOptions extends QueryOptions
{
    public const FIELD_RATING = 'rating';
    public const FIELD_TEXT = 'text';
    public const FIELD_TOKENS = 'tokens';

    /**
     * Select specific CallRecordsUserFeedback properties
     * 
     * @param array<string> $select Use CallRecordsUserFeedbackQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
