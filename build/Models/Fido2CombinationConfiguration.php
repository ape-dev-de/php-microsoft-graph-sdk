<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2CombinationConfiguration
 */
class Fido2CombinationConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Which authentication method combinations this configuration applies to. Must be an allowedCombinations object, part of the authenticationStrengthPolicy. The only possible value for fido2combinationConfigurations is 'fido2'.
     * @var AuthenticationMethodModes[]
     */
    public array $appliesToCombinations = [];

    /** 
     * A list of AAGUIDs allowed to be used as part of the specified authentication method combinations.
     * @var string[]
     */
    public array $allowedAAGUIDs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appliesToCombinations'])) {
            $this->appliesToCombinations = $data['appliesToCombinations'];
        }
        if (isset($data['allowedAAGUIDs'])) {
            $this->allowedAAGUIDs = $data['allowedAAGUIDs'];
        }
    }
}
