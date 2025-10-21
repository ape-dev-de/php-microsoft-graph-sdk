<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateAllowedCombinationsResult
 */
class UpdateAllowedCombinationsResult
{
    public function __construct(
        /** Information about why the updateAllowedCombinations action was successful or failed. */
        public ?string $additionalInformation = null,
        /** @var string[] References to existing Conditional Access policies that use this authentication strength. */
        public array $conditionalAccessReferences = [],
        /** The list of current authentication method combinations allowed by the authentication strength. */
        public array $currentCombinations = [],
        /** The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action. */
        public array $previousCombinations = []
    ) {}
}
