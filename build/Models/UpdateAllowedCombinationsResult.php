<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateAllowedCombinationsResult
 */
class UpdateAllowedCombinationsResult
{
    /** Information about why the updateAllowedCombinations action was successful or failed. */
    public ?string $additionalInformation = null;

    /** 
     * References to existing Conditional Access policies that use this authentication strength.
     * @var string[]
     */
    public array $conditionalAccessReferences = [];

    /** 
     * The list of current authentication method combinations allowed by the authentication strength.
     * @var AuthenticationMethodModes[]
     */
    public array $currentCombinations = [];

    /** 
     * The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     * @var AuthenticationMethodModes[]
     */
    public array $previousCombinations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['additionalInformation'])) {
            $this->additionalInformation = $data['additionalInformation'];
        }
        if (isset($data['conditionalAccessReferences'])) {
            $this->conditionalAccessReferences = $data['conditionalAccessReferences'];
        }
        if (isset($data['currentCombinations'])) {
            $this->currentCombinations = $data['currentCombinations'];
        }
        if (isset($data['previousCombinations'])) {
            $this->previousCombinations = $data['previousCombinations'];
        }
    }
}
