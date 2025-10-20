<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppDiagnosticStatus resources
 *
 * Available select fields:
 * - mitigationInstruction
 * - state
 * - validationName
 */
class ManagedAppDiagnosticStatusQueryOptions extends QueryOptions
{
    public const FIELD_MITIGATION_INSTRUCTION = 'mitigationInstruction';
    public const FIELD_STATE = 'state';
    public const FIELD_VALIDATION_NAME = 'validationName';

    /**
     * Select specific ManagedAppDiagnosticStatus properties
     * 
     * @param array<string> $select Use ManagedAppDiagnosticStatusQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
