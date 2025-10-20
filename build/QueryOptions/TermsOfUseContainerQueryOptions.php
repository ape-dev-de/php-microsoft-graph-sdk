<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsOfUseContainer resources
 *
 * Available select fields:
 * - agreementAcceptances
 * - agreements
 */
class TermsOfUseContainerQueryOptions extends QueryOptions
{
    public const FIELD_AGREEMENT_ACCEPTANCES = 'agreementAcceptances';
    public const FIELD_AGREEMENTS = 'agreements';

    /**
     * Select specific TermsOfUseContainer properties
     * 
     * @param array<string> $select Use TermsOfUseContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
