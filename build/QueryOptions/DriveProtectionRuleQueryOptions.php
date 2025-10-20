<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DriveProtectionRule resources
 *
 * Available select fields:
 * - driveExpression
 */
class DriveProtectionRuleQueryOptions extends QueryOptions
{
    public const FIELD_DRIVE_EXPRESSION = 'driveExpression';

    /**
     * Select specific DriveProtectionRule properties
     * 
     * @param array<string> $select Use DriveProtectionRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
