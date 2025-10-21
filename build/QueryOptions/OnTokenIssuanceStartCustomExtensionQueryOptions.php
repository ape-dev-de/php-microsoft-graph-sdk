<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartCustomExtension resources
 *
 * Available select fields:
 * - claimsForTokenConfiguration
 */
class OnTokenIssuanceStartCustomExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnTokenIssuanceStartCustomExtension
     */
    public const FIELD_CLAIMS_FOR_TOKEN_CONFIGURATION = 'claimsForTokenConfiguration';

    /**
     * Select specific OnTokenIssuanceStartCustomExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
