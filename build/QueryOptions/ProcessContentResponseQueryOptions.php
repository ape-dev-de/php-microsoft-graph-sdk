<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentResponse resources
 *
 * Available select fields:
 * - policyActions
 * - processingErrors
 * - protectionScopeState
 */
class ProcessContentResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProcessContentResponse
     */
    public const FIELD_POLICY_ACTIONS = 'policyActions';
    public const FIELD_PROCESSING_ERRORS = 'processingErrors';
    public const FIELD_PROTECTION_SCOPE_STATE = 'protectionScopeState';

    /**
     * Select specific ProcessContentResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
