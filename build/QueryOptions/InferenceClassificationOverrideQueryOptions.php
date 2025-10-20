<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InferenceClassificationOverride resources
 *
 * Available select fields:
 * - classifyAs
 * - senderEmailAddress
 */
class InferenceClassificationOverrideQueryOptions extends QueryOptions
{
    public const FIELD_CLASSIFY_AS = 'classifyAs';
    public const FIELD_SENDER_EMAIL_ADDRESS = 'senderEmailAddress';

    /**
     * Select specific InferenceClassificationOverride properties
     * 
     * @param array<string> $select Use InferenceClassificationOverrideQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
